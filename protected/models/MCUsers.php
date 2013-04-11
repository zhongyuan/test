<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCUsers {

    public $user_name;
    public $user_id;

    function __construct($user_name=null,$user_id=null) {
        $this->user_name = $user_name;
        $this->user_id = $user_id;
    }

    public function checkUser()
    {
        if(!isset($this->user_name)){return;}
        $sql = "select user_id,user_name,passwd,first_name,last_name,language,contact_type,status from users where user_name = :user_name limit 1";
        $cmd = Yii::app()->db->createCommand($sql)->queryRow(true,array(
            ':user_name' => $this->user_name,
        ));

        return $cmd?$cmd:0;
    }


    public function addUser($email)
    {
            $sql = "SELECT COUNT(*) AS CNT FROM users WHERE email = :email LIMIT 1";
            $command = Yii::app()->db->createCommand($sql);
            $command->bindParam(':email',$email,PDO::PARAM_STR);
            if($command->queryScalar()){
                    return array(FALSE,"此Email已被其他用户注册了!");
            }

            return array(TRUE,"恭喜您注册成功!");

    }

    public function deleteUser()
    {

    }

    public function updateUser()
    {

    }

}





?>
