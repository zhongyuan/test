<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCApi {

    const training = 1;  //既是类别又是id
    const developer = 2;
    const reference = 3;
    const tools = 4;

    const lastestVersion = 9; //class list 最大版本


    public $id;

    public static $limit = 0;

    function __construct($id = null) {
        $this->id = $id;
    }

    public static function addApiItem($parent_id,$apis=array())
    {
        if(!$apis||count($apis)<=0){
            return 0;
        }
        $time = time();
        foreach ($apis as $api) {
            $value[] = "(null,'".$api['name']."',".$parent_id.",'".$api['path']."',1,0,".$time.','.$time.')';
        }
        $val = implode(',', $value);
        $sql = "insert into api values {$val}";
        $cmd = Yii::app()->db->createCommand($sql)->execute();

        return $cmd?$cmd:0;
    }

    //递推函数，插入数据库
    public static function addChildNote($target_level_array)
    {
        if($target_level_array){ //子一层
            $target_more_array = array();
            foreach ($target_level_array as $val) {
                $third_level = array();
                $target_third_level = array();


                $parent_id = self::getParIdByName($val['parent_name']);
                $target_third_level = $val['Sub_note'];

                if(array_key_exists('Name',$target_third_level)){
                    $third_level[] = array('name'=>$target_third_level['Name'],'path'=>$target_third_level['Path']);
                    if($target_third_level['Subnodes']){
                        $target_more_array[] = array('parent_name'=>$target_third_level['Name'],'Sub_note'=>$target_third_level['Subnodes']['Node']);
                    }
                }else{
                    foreach($target_third_level as $val2){
                        $third_level[] = array('name'=>$val2['Name'],'path'=>$val2['Path']);
                        if($val2['Subnodes']){
                            $target_more_array[] = array('parent_name'=>$val2['Name'],'Sub_note'=>$val2['Subnodes']['Node']);
                        }
                    }
                }

                $suc = self::addApiItem($parent_id,$third_level);
            }
                //调用嵌套
                if(count($target_more_array)>0){
                        $m = self::addChildNote($target_more_array);
                        echo $str .= $m;
                }
            return $str;
        }
        return 0;
    }

    //获取id
    public static function getParIdByName($name)
    {
//        if(self::$limit > 0){
//            $str = 'id > '.self::$limit .' and ';
//        }else{
//            $str = '';
//        }
        $sql = "select id from api where {$str} name = :name  limit 1"; //随时修改  id > 1151 and  大于1151保证不会跟到class list
        $cmd = Yii::app()->db->createCommand($sql)->queryScalar(array(
            ':name' => $name,
        ));
        return $cmd?$cmd:0;
    }


	/**
	 * 获取树型数据
	 * @param undefined $parent_id
	 * @param undefined $deep
	 *
	 */
	public function getTree($parent_id,$isOpen = TRUE)
	{
		//从缓存提取数据
		$data = Yii::app()->cache->get('tree_'.$parent_id);
		if($data){
			return $data;
		}
		
		//从DB提取数据
		$dbRst = $this->_getTree($parent_id,$isOpen);
		
		//将来自DB的数据写入缓存
		if($dbRst){
			Yii::app()->cache->set('tree_'.$parent_id,$dbRst,3600);	
		}
		
		return $dbRst;
	}
	
	/**
	 * 递归调用获取节点树 
	 * @param undefined $parent_id
	 * @param undefined $isOpen
	 * 
	 */
	private function _getTree($parent_id,$isOpen = TRUE)
	{
		$sql = "SELECT id,name,parent_id,has_child,path FROM api WHERE status = 1 AND parent_id = '$parent_id'";
		$query = Yii::app()->db->createCommand($sql)->queryAll();
		if(empty($query)){
			return FALSE;
		}
		$idx = 0;
		$dbRst = array();
		foreach($query as $row){
			$idx++;
			//$subCnt = $this->getSubTreeCnt($row['id']);
			$data = array('name' => $row['name'],'id'=>$row['id'],'pId'=>$row['parent_id'],'file'=>"/gaia_plugin2/".$row['path']);
			if($row['has_child'] == 1){//有子节点
				$data['isParent'] = true;
				$data['children'] = $this->_getTree($row['id'],FALSE);
				if($isOpen && $idx ==1){
					$data['open'] = true;
				}
			}
			$dbRst[] = $data;
		}
		return $dbRst;
	}

	/**
	 * 获取当前父节点的子节点数量
	 * @param undefined $parent_id
	 *
	 */
	public function getSubTreeCnt($parent_id = 0)
	{
		$sql = "SELECT COUNT(*) AS CNT FROM api WHERE parent_id = '$parent_id' AND status = 1";
		$cnt = Yii::app()->db->createCommand($sql)->queryScalar();
		return intval($cnt);
	}

    //获取class list 的子列表
    public function getChildById()
    {
        if($cl_child = Yii::app()->cache->get('cl_child')){
            return $cl_child;
        }
        $sql = "select id,name,path, status,version from api where parent_id = :parent_id ";
        $cmd = Yii::app()->db->createCommand($sql)->queryAll(true,array(
            ':parent_id' => $this->id,
        ));
        if($cmd){
            Yii::app()->cache->set('cl_child', $cmd, 3600);
        }
        return $cmd?$cmd:array();
    }

    //获取版本内容
    public function getVersionList()
    {
        if($vers_list = Yii::app()->cache->get('vers_list')){
            return $vers_list;
        }
        $sql = "select version from api where parent_id = :parent_id group by version";
        $cmd = Yii::app()->db->createCommand($sql)->queryColumn(array(
            ':parent_id' => self::reference,
        ));
        if($cmd){
            Yii::app()->cache->set('vers_list', $cmd, 3600);
        }
        return $cmd?$cmd:array();
    }

    //获取training guide的内容
    public static function getChildByType($type)
    {
        $type_child = 'child'.$type;
        if($trguide_child = Yii::app()->cache->get($type_child)){
            return $trguide_child;
        }

        $sql = "select id,name,path,status from api where type = :type";
        $cmd = Yii::app()->db->createCommand($sql)->queryAll(true,array(
            ':type' => $type,
        ));

        if($cmd){
            Yii::app()->cache->set($type_child, $cmd, 3600);
        }
        return $cmd?$cmd:array();
    }

	/**
	 * 更新节点名称的操作
	 * @param undefined $nodeName
	 * @param undefined $nodeId
	 *
	 */
	public function updateNodeName($nodeName,$nodeId = 0)
	{
		$sql = "UPDATE api SET name = :nodeName,update_time = :update_time WHERE id = :nodeId";
		$cmd = Yii::app()->db->createCommand($sql)->execute(array(
            ':nodeName' => $nodeName,
			':update_time'=>time(),
			':nodeId'	=> $nodeId
        ));
		return $cmd;
	}


	/**
	 * 删除树节点操作,只修改状态,不实际删除此记录
	 * @param undefined $nodeId
	 *
	 */
	public function removeNode($nodeId = 0)
	{
		if($nodeId<1){
			return FALSE;
		}
		$sql = "UPDATE api SET status = 0,update_time = :update_time WHERE id = :nodeId";
		$cmd = Yii::app()->db->createCommand($sql)->execute(array(
			':nodeId'	=> $nodeId,
			':update_time'=>time()
        ));
		if($cmd){
			$sql2 = "SELECT id FROM api WHERE parent_id = :parent_id AND status = 1";
			$query2 = Yii::app()->db->createCommand($sql2)->queryAll(true,array(
				':parent_id'	=> $nodeId
	        ));
			if($query2){
				foreach($query2 as $r){
					$this->removeNode($r['id']);
				}
			}
		}
		return $cmd;
	}


	/**
	 *
	 * @param undefined $nodeName
	 * @param undefined $parent_id
	 *
	 */
	public function addNode($nodeName,$parent_id = 0)
	{
		//检查当前父节点下的子节点名称是否已存在
		$sql = "SELECT COUNT(*) AS CNT FROM api WHERE parent_id = '$parent_id' AND name = '$nodeName'";
		$cnt = Yii::app()->db->createCommand($sql)->queryScalar();
		if($cnt > 0){
			return array(FALSE,"节点文档已存在,不能重复创建");
		}

		//创建一个新的节点文档
		$path = $this->_genRandomFile($parent_id);
		if(!$path){
			return array(FALSE,"节点文档创建失败,可能没有写入权限");
		}
		$sql2 = "INSERT INTO api(name,parent_id,path,status,record_time) VALUES(:name,:parent_id,:path,:status,:record_time)";
		$cmd2 = Yii::app()->db->createCommand($sql2)->execute(array(
            ':name' => $nodeName,
			':parent_id'=>$parent_id,
			':path'	=> $path,
			':status'=>1,
			':record_time'=>time()
        ));
		if($cmd2){
			return array(TRUE,"节点文档创建成功");
		}
		return array(FALSE,"节点文档创建失败");

	}

	private function _genRandomFile($parent_id = 0)
	{
		$targetFolder = $_SERVER['DOCUMENT_ROOT']."/gaia_plugin2/ext_html";
		if(!is_dir($targetFolder)){
			$m = mkdir($targetFolder,0777,TRUE);
			if(!$m){
				return FALSE;
			}
		}
		$targetFile = $targetFolder."/".$parent_id."_".uniqid().".html";
		if(touch($targetFile)){
			return str_replace($_SERVER['DOCUMENT_ROOT']."/gaia_plugin2","",$targetFile);
		}
		return FALSE;
	}

	/**
	 * 依据文档ID查找该文档的路径
	 * @param undefined $id
	 * @return string
	 */
    public function getFilePathById($id)
    {
		if(empty($id)){
			return FALSE;
		}
        $sql = "select path from api where id = :id  limit 1";
        $path = Yii::app()->db->createCommand($sql)->queryScalar(array(
            ':id' => $id,
        ));

		if($path){
			$path = "/gaia_plugin2/".$path;
		}
        return $path;
    }

    //替换颜色
    public static function HightLightKeyWord($key,&$results)
    {
        if(!$key || !is_array($results) || count($results)<=0){
            return 0;
        }
        $key = strtolower($key);
        $pattern = "/$key/i";
        $replacement = "<span style='color:rgb(255, 173, 47);'>$0</span>";
        foreach ($results as $res) {
            $res->name = preg_replace($pattern, $replacement, $res->name);
        }
        return 1;
    }

}

?>
