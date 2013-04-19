<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class MCTeamTest extends CTestCase{


    public $team_id;
    public $team_name;


    function __construct($team_id=null,$team_name=null) {
        $this->team_id = $team_id;
        $this->team_name = $team_name;
    }


    //插入一个team
    // public function testaddTeam($user_id,$contact_name,$contact_email,$contact_phone,$contact_company=null)
    // {
    //     // $user_id = 5;
    //     // $team_name = 'haha';
    //     // $contact_name = 'hahaliang';
    //     // $contact_email = 'haha@qq.com';
    //     // $contact_phone = '1382848938';
    //     // $contact_company = 'sss';
    //     $sql = "insert into team values(null,:team_name,:contact_name,:contact_email,:contact_phone,:contact_company,:user_id,:update_time,:record_time)";

    //     $cmd = Yii::app()->db->createCommand($sql)->execute(array(
    //        ':team_name' => $this->team_name,
    //         ':contact_name' => $contact_name,
    //         ':contact_email' => $contact_email,
    //         ':contact_phone' => $contact_phone,
    //         ':contact_company' => $contact_company,
    //         ':user_id'     => $user_id,
    //         ':update_time' => time(),
    //         ':record_time' => time(),
    //     ));
    //     return $cmd?$cmd:0;
    // }

    //获取last insert id SELECT LAST_INSERT_ID()
//    public static function testgetLastInsertId()
//    {
//        $sql = "select last_insert_id()";
//        $cmd = Yii::app()->db->createCommand($sql)->queryScalar();
//        echo $cmd;
////        return $cmd?$cmd:0;
//    }


   //插入队员
   public function testaddTeamMember($member_name,$team_id,$member_email=null,$member_phone=null,$member_company=null)
   {
//        $member_name = 'hh';
//        $team_id = 3;
//        $member_email = 'dd@qq.com';
//        $member_phone = '1242353513';
//        $member_company = 'sssf';
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
//
//    批量插入队员
    public function addTeamMemberBatch($members,$team_id)
    {
//        $members = array(
//            1 => array(
//                'name' => 'ddd',
//                'email' => 'ss@qq.com',
//                'phone' => '1124242342',
//                'company' => 'sjgo;ajg',
//            ),
//            2 => array(
//                'name' => 'ddd',
//                'email' => 'ss@qq.com',
//                'phone' => '1124242342',
//                'company' => 'sjgo;ajg',
//            ),
//            3 => array(
//                'name' => 'ddd',
//                'email' => null,
//                'phone' => null,
//                'company' => null,
//            )
//        );
        $team_id = 3;
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
        echo $cmd;exit;
//        return $cmd?$cmd:0;
    }

    //整理post数据
    public static function testsortPostData($post=array())
    {
//        $post = array(
//            'mem_1_name' => 'ff',
//            'mem_1_email' => 'ff@qq.com',
//            'mem_1_phone' => '183882392',
//            'memb_1_company' => 'ssd',
//            'mem_2_name' => 'aad',
//            'mem_2_email' => 'ff@qq.com',
//            'mem_2_phone' => '1183882392',
//            'memb_2_company' => 'ssd',
//            'mem_3_name' => 'scc',
//            'mem_3_email' => 'aff@qq.com',
//            'mem_3_phone' => '1383882392',
//            'memb_3_company' => 'ssd',
//            'mem_4_name' => 'wuwu',
//            'mem_4_email' => null,
//            'mem_4_phone' => null,
//            'memb_4_company' => null,
//            'mem_5_name' => null,
//            'mem_5_email' => null,
//            'mem_5_phone' => null,
//            'memb_5_company' => null,
//        );
        $other_mems = array();
        for($i=2;$i<6;$i++){
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
//        print_r($other_mems);
        return $other_mems;
    }

}

?>
