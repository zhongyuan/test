<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCTeam {

    public $team_id;
    public $team_name;

    const totle_member = 6; //加上主联系人(队长)，的总个数


    function __construct($team_id=null,$team_name=null) {
        $this->team_id = $team_id;
        $this->team_name = $team_name;
    }

    //检测名称是否重复
    public static function checkTeamName($team_name)
    {
        $sql = "select team_id from team where team_name = :team_name";

        $cmd = Yii::app()->db->createCommand($sql)->queryScalar(array(
            ':team_name' => $team_name,
        ));

        return $cmd?$cmd:0;
    }

    //检测是否已经注册过团队
    public static function checkIsRebuild($user_id)
    {
        $sql = "select team_id from team where user_id = :user_id";

        $cmd = Yii::app()->db->createCommand($sql)->queryScalar(array(
            ':user_id' => $user_id,
        ));

        return $cmd?$cmd:0;
    }

    //插入一个team
    public function addTeam($user_id,$contact_name,$contact_email,$contact_phone,$contact_company=null)
    {
        $sql = "insert into team values(null,:team_name,:contact_name,:contact_email,:contact_phone,:contact_company,:user_id,:update_time,:record_time)";
        $cmd = Yii::app()->db->createCommand($sql)->execute(array(
            ':team_name' => $this->team_name,
            ':contact_name' => $contact_name,
            ':contact_email' => $contact_email,
            ':contact_phone' => $contact_phone,
            ':contact_company' => $contact_company,
            ':user_id'     => $user_id,
            ':update_time' => time(),
            ':record_time' => time(),
        ));

        return $cmd?$cmd:0;
    }

    //获取last insert id SELECT LAST_INSERT_ID()
    public static function getLastInsertId()
    {
        $sql = "select last_insert_id()";
        $cmd = Yii::app()->db->createCommand($sql)->queryScalar();

        return $cmd?$cmd:0;
    }

    //插入队员
    public function addTeamMember($member_name,$team_id,$member_email=null,$member_phone=null,$member_company=null)
    {
        $sql = "insert into teamMember values(null,:member_name,:team_id,:member_email,:member_phone,:member_company,:update_time,:record_time)";
        $cmd = Yii::app()->db->createCommand($sql)->execute(array(
            ':member_name' => $member_name,
            ':team_id' => $team_id,
            ':member_email' => $member_email,
            ':member_phone' =>$member_phone,
            ':member_company' => $member_company,
            ':update_time' => time(),
            ':record_time' => time(),
        ));

        return $cmd?$cmd:0;
    }

    //批量插入队员
    public function addTeamMemberBatch($members,$team_id)
    {
        if(!is_array($members)||count($members)<0){
            return false;
        }
        $sql = "insert into teamMember values";
        $values = array();
        foreach($members as $key=>$member){
            $values[] = '(null'.',"'.$member['name'].'",'.$team_id.',"'.$member['email'].'","'.$member['phone'].'","'.$member['company'].'",'.time().','.time().')';
        }
        $values = implode(',', $values);
        $sql .= $values;

        $cmd = Yii::app()->db->createCommand($sql)->execute();

        return $cmd?$cmd:0;
    }

    //整理post数据
    public static function sortPostData($post=array())
    {
        $other_mems = array();
        for($i=2;$i<MCTeam::totle_member-1;$i++){
            $mem_name = 'mem_'.$i.'_name';
            $mem_email = 'mem_'.$i.'_email';
            $mem_phone = 'mem_'.$i.'_phone';
            $memb_company = 'memb_'.$i.'_company';
            if($post[$mem_name]){
                $other_mems[$i]['name'] = $post[$mem_name];
                $other_mems[$i]['email'] = $post[$mem_email];
                $other_mems[$i]['phone'] = $post[$mem_phone];
                $other_mems[$i]['company'] = $post[$memb_company];
            }
        }
        return $other_mems;
    }

    //判断邮箱
    public static function checkEmails($emails=array())
    {
        if(!is_array($emails)||count($emails)<=0){return false;}
        $success = true;
        foreach ($emails as $email){
            $success = $success&&Util::checkEmail($email);
        }
        return $success;
    }

    //判断电话或手机号码
    public static function checkPhoneTeles($phones=array())
    {
        if(!is_array($phones)||count($phones)<=0){return false;}
        $success = true;
        foreach ($phones as $phone){
            $success = $success&&Util::checkPhoneTele($phone);
        }
        return $success;
    }

}



?>
