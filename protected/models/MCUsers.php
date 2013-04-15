
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


    public function addUser($input=array())
    {
        //保存用户基本信息src_passwd
		
        $data = $input['data'];
		$src_data = $data;
		$data['passwd'] = md5($data['passwd']);
		
        $affect = $this->_insert("users",$data);
        if(!$affect){
                return array(FALSE,"数据写入失败,请重试!");
        }
        $user_id = Yii::app()->db->getLastInsertID("users");
        if(!$user_id){
                return array(FALSE,"数据写入失败,请重试!");
        }

        //保存用户联系地址相关信息
		$src_data['user_id'] = $user_id;
        $address = $input['address'];
        $address['user_id'] = $user_id;
        $this->_insert("address",$address);

        return array(TRUE,$src_data);//返回用户注册的详细信息
    }

    public function deleteUser()
    {

    }

    public function updateUser()
    {

    }

    private function _insert($tbl,$data = array())
    {
        if(empty($data)){
                return FALSE;
        }

        $sql = "INSERT INTO $tbl (";
        $sql.=implode(",",array_keys($data));
        $sql.=") VALUES(";
//		var_dump(array_values($data));
        foreach(array_values($data) as $ev){
                $ev=addslashes($ev);
                $sql.="'$ev',";
        }
        $sql=substr($sql,0,-1);
        $sql.=")";


        $command = Yii::app()->db->createCommand($sql);
        $affetct = $command->execute();
        if(!$affetct){
                return FALSE;
        }
        return TRUE;
    }


}

?>

