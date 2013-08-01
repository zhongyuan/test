<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCApi {

    const training = 1;
    const developer = 2;
    const reference = 3;
    const tools = 4;

    public $id;
    public static $limit = 0;

    function __construct($id) {
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
		$sql = "SELECT id,name,parent_id,path FROM api WHERE status = 1 AND parent_id = '$parent_id'";
		$query = Yii::app()->db->createCommand($sql)->queryAll();
		if(empty($query)){
			return FALSE;
		}
		$idx = 0;
		$dbRst = array();
		foreach($query as $row){
			$idx++;
			$subCnt = $this->getSubTreeCnt($row['id']);
			$data = array('name' => $row['name'],'id'=>$row['id'],'pId'=>$row['parent_id'],'file'=>"/gaia_plugin2/".$row['path']);
			if($subCnt > 0){
				$data['isParent'] = true;
				$data['children'] = $this->getTree($row['id'],FALSE);
				if($isOpen && $idx ==1){
					$data['open'] = true;
				}
			}
			$dbRst[] = $data;
		}
		return $dbRst;	
	}
	
	/**
	 * 获取当前父节点的字节点数量 
	 * @param undefined $parent_id
	 * 
	 */
	public function getSubTreeCnt($parent_id = 0)
	{
		$sql = "SELECT COUNT(*) AS CNT FROM api WHERE parent_id = '$parent_id' AND status = 1";
		$cnt = Yii::app()->db->createCommand($sql)->queryScalar();
		return intval($cnt);
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
}

?>
