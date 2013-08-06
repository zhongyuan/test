<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCNewsDetail {

    public $id;

    function __construct($id) {
        $this->id = $id;
    }

    /*
     * 获取指定id新闻
     */
    public function getNDById()
    {
        if(!$this->id){return false;}
        $news_id = 'news_detail_'.$this->id;
        $news_detail = Yii::app()->cache->get($news_id);
        if($news_detail){
            return $news_detail;
        }
        $sql = "select news_detail from newsDetail where news_id = :news_id";
        $cmd = Yii::app()->db->createCommand($sql)->queryScalar(array(
            ':news_id' => $this->id,
        ));
        Yii::app()->cache->set($news_id,$cmd,3600);
        return $cmd?$cmd:0;
    }

}







?>
