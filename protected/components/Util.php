<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Util {

    function __construct() {

    }

    public static function loadConfig($conf_file_name)
    {
        static $conf = array();
        if(!isset($conf[$conf_file_name])){   //导入配置文件，还得用绝对路径,用Yii::app()->request->baseUrl没用
            if(file_exists(dirname(__FILE__).'/../config/cosweb/'.$conf_file_name.'.cfg.php')){
                $conf[$conf_file_name] = require(dirname(__FILE__).'/../config/cosweb/'.$conf_file_name.'.cfg.php');
            }else{
                echo "不存在该目录";return ;
            }
        }
        return $conf[$conf_file_name];
    }



}
?>
