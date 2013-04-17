<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCAdmin {

    public $staff_name;
    public $staff_id;

    function __construct($staff_id=null,$staff_name=null) {
        $this->staff_id = $staff_id;
        $this->staff_name = $staff_name;
    }

    public function checkStaff()
    {
        $sql = "select id,staff_name,pass_word,authority,status from admin where staff_name = :staff_name and status =0 limit 1";
        $cmd = Yii::app()->db->createCommand($sql)->queryRow(true,array(
            ':staff_name' => $this->staff_name,
        ));
        return $cmd?$cmd:0;
    }

    /*
     * 插入一条新闻列表
     */
    public static function addNewsList($title,$outline,$image_name,$type=1,$status=0)
    {
        $sql = "insert into newsList values(null,:title,:outline,:image_name,:type,:status,:update_time,:record_time)";
        $cmd = Yii::app()->db->createCommand($sql)->execute(array(
            ':title'       => $title,
            ':outline'     => $outline,
            ':image_name'  => $image_name,
            ':type'        => $type,
            ':status'      => $status,
            ':update_time' => time(),
            ':record_time' => time(),
        ));

        return $cmd?$cmd:0;
    }

    /*
     * 获取最新的一条新闻列表id
     */
    public static function getLastestNewsId($title,$type)
    {
        $sql = "select id from newsList where title = :title and type = :type order by record_time desc limit 1";
        $cmd = Yii::app()->db->createCommand($sql)->queryScalar(array(
            ':title' => $title,
            ':type'  => $type,
        ));

        return $cmd?$cmd:0;
    }


    /*
     * 插入一条新闻详细
     */
    public static function addNewsDetail($id,$news_detail)
    {
        $sql = "insert into newsDetail values(:news_id,:news_detail,:update_time,:record_time)";
        $cmd = Yii::app()->db->createCommand($sql)->execute(array(
            ':news_id' => $id,
            ':news_detail' => $news_detail,
            ':update_time' => time(),
            ':record_time' => time(),
        ));

        return $cmd?$cmd:0;
    }


}








?>
