<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCDownLoads
{
    function __construct() {

    }

    //拿出版本类型的种类
    public static function getVersionType($type=11,$is_release=1,$status=1,$limit=15)
    {
        $sql = "select doc_version from doc where type = :type and is_release >= :is_release and status >= :status group by doc_version order by record_time desc limit 15";
        $cmd = Yii::app()->db->createCommand($sql)->queryColumn(array(
            ':type' => $type,
            ':is_release' => $is_release,
            ':status'  => $status,
        ));

        return $cmd?$cmd:array();
    }

    //按版本获取对于的文档内容
    public static function getDocByVer($doc_versions=array(),$type=11,$is_release=1,$status=1)
    {
        $vers = implode("','", $doc_versions);

        $sql = "select * from doc where doc_version in('".$vers."') and type =:type and is_release >= :is_release and status >= :status";
        $cmd = Yii::app()->db->createCommand($sql)->queryAll(true,array(
            ':type' => $type,
            ':is_release' => $is_release,
            ':status' => $status,
        ));

        return $cmd?$cmd:array();
    }

    //整理数据
    public static function sortDocByVer($data)
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

}



?>
