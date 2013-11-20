<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MCDoc
 *
 * @author liangzhongyuan
 */
class MCDoc {
    
    public $id;
    const SDK = 11;
    const ROM = 12;
    const IDE = 13;
    const PDK = 21;
    
    const DOC_RELEASE = 1; //只拿发布版本
    const DOC_STATUS = 1;  //只拿未删除的版本
    
    const global_key = 'doc_change';

    function __construct($id=null) {
        $this->id = $id?$id:null;
    }
    
    //通过id获取文档信息
    public function getDocInfoById()
    {
        $sql = "select doc_id,doc_name,doc_version,type,is_release,release_time,available,update_time,record_time from doc where id = :id limit 1";
        $cmd = Yii::app()->dbrm->createCommand($sql)->queryRow(true,array(
            ':id' => $this->id,
        ));
        return $cmd?$cmd:0;
    }

    //拿出版本类型的种类
    public function getVersionType($type=11,$is_release=1,$status=1,$limit=15)
    {

        $sql = "select doc_version from doc where type = :type and is_release = :is_release and status = :status group by doc_version order by record_time desc limit 15";
        $cmd = Yii::app()->dbrm->createCommand($sql)->queryColumn(array(
            ':type' => $type,
            ':is_release' => $is_release,
            ':status'  => $status,
        ));

        return $cmd?$cmd:array();
    }

    //按版本获取对于的文档内容
    public function getDocByVer($doc_versions=array(),$type=11,$is_release=1,$status=1)
    {
        $vers = implode("','", $doc_versions);

        $sql = "select * from doc where doc_version in('".$vers."') and type =:type and is_release >= :is_release and status >= :status";
        $cmd = Yii::app()->dbrm->createCommand($sql)->queryAll(true,array(
            ':type' => $type,
            ':is_release' => $is_release,
            ':status' => $status,
        ));

        return $cmd?$cmd:array();
    }

    //整理数据
    public function sortDocByVer($data)
    {
        if(!is_array($data)||count($data)<=0)
        {
            return array();
        }

        $tmp = array();
        foreach($data as $key=>$val){
            if($tmp[$val['doc_version']]){
                $tmp[$val['doc_version']][] = $val;
            }else{
                $tmp[$val['doc_version']][] = $val;
            }
        }
        return $tmp;
    }
    
    //判断doc是否被修改过
    public static function getGlobalChange($key)
    {
        if(!$key){return 0;}
        $sql = "select status from global_change where kid = '"."{$key}'";
        $cmd = Yii::app()->dbrm->createCommand($sql)->queryScalar();
        return $cmd?$cmd:0;
    }
    
    //更新global,0表示表没有更新
    public static function updateGlobalRestore($key)
    {
        if(!$key){return 0;}
        $sql = "update global_change set status = 0 where kid = '"."{$key}'";
        $cmd = Yii::app()->dbrm->createCommand($sql)->execute();
        return $cmd?$cmd:0;
    }
    //更新global,0表示表没有更新
    public static function updateGlobalChange($key)
    {
        if(!$key){return 0;}
        $sql = "update global_change set status = 1 where kid = '"."{$key}'";
        $cmd = Yii::app()->dbrm->createCommand($sql)->execute();
        return $cmd?$cmd:0;
    }
    
	/**
	 * 依据文档字节数显示对应的单位,如100MB,10GB,200KB
	 * @param undefined $bytes 文件字节数
	 *
	 */
	public static function getFileSize($bytes){
		if ($bytes >= pow(2,40)) {
			$return = round($bytes/pow(1024, 4),2);
			$suffix="T";
		}elseif ($bytes >= pow(2,30)) {
			$return = round($bytes/pow(1024, 3),2);
			$suffix="G";
		}elseif ($bytes >= pow(2,20)) {
			$return = round($bytes/pow(1024, 2),2);
			$suffix="M";
		}elseif ($bytes >= pow(2,10)) {
			$return = round($bytes/pow(1024, 1),2);
			$suffix="K";
		}else{
			$return = $bytes;
			$suffix="B";
		}
		return $return.$suffix;
	}
    
}
