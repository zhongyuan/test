<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCNewsList {

    public $id;
    const num = 2;


    function __construct($id) {
        $this->id = $id;
    }

    //======获取新闻对象==========
    public static function getOutline($start)
    {
        $end = $start + self::num;
        $sql = "select title,outline,img_little from newsList order by update_time desc  limit :start,:end";

        $cmd = Yii::app()->db->createCommand($sql)->queryAll(true,array(
           ':start' => $start,
           ':end' => $end,
        ));

        return $cmd?$cmd:0;
    }

    public static function insertNewsList()
    {
        $title = '8COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！';
        $outline = '8在HTC 201顶顶顶顶顶顶顶反反复复在HTC 2012年的年会上，HTC CEO周顶反反复复在HTC 2012年的年会上，HTC CEO永明展示了一款神秘的手机。这款手机大家
            纷纷猜测可能看看看 看看看看看库顶顶顶顶顶顶顶顶短短的顶顶顶顶顶顶顶顶顶顶。顶顶顶顶短短的8。';
        $img_little = 1;
        $time = time();

        $sql = "insert into newsList values(null,'{$title}','{$outline}',{$img_little},{$time},{$time})";
//        echo $sql ;exit;
        $cmd = Yii::app()->db->createCommand($sql)->execute();

        return $cmd?$cmd:0;
    }

}







?>
