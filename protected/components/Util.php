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

    //判断手机号
//    public static function checkMobile($phone_num)
//    {
//        $pattern = "/^(13|15|18)\d{9}$/";
//        if(preg_match($pattern, $phone_num)){
//            return 1;
//        }else{
//            return 0;
//        }
//    }

    //判断手机或电话
    public static function checkPhoneTele($phone_num)
    {
        //电话或手机有一个正确就可以
        $phone_reg = "/^(13|15|18)\d{9}$/";
        $tele_reg = "/^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$/";
        if(preg_match($phone_reg, $phone_num)||preg_match($tele_reg, $phone_num)){
            return true;
        }else{
            return false;
        }
    }

    //判断邮箱格式
    public static function checkEmail($email)
    {
        $email_reg = "/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/";
        if(preg_match($email_reg, $email)){
            return true;
        }else{
            return false;
        }
    }

}
?>
