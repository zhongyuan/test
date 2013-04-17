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
        $sql = "select news_detail from newsDetail where news_id = :news_id";
        $cmd = Yii::app()->db->createCommand($sql)->queryScalar(array(
            ':news_id' => $this->id,
        ));

        return $cmd?$cmd:0;
    }

}







?>
