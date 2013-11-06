
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCUsers {

    const open = 1; //开放用户即游客，将来不注册的用户。
    const verify = 2; //验证只可下载sdk用户,注册后的用户
    const verify2 = 3; //验证可下载sdk和pdk用户，将来有可能和cos商店普通会员等级一致
    
    public $user_name;
    public $user_id;

    function __construct($user_name=null,$user_id=null) {
        $this->user_name = $user_name;
        $this->user_id = $user_id;
    }

    public function checkUser()
    {
        if(!isset($this->user_name)){
			return FALSE;
		}
		if($this->_checkUserFromCosweb($this->user_name)){
			return TRUE;
		}
		/*if($this->_checkUserFromReleaseManage($this->user_name)){
			return TRUE;
		}*/
		return FALSE;
    }

	/**
	 * 检测Cosweb是否存在该账户信息
	 * @param undefined $username
	 *
	 */
	private function _checkUserFromCosweb($username)
	{
		 $sql = "SELECT COUNT(*) AS CNT FROM users WHERE user_name = :user_name";
         $cnt = Yii::app()->db->createCommand($sql)->queryScalar(array(
            ':user_name' => $username,
         ));
		 return $cnt;
	}

	/**
	 * 检测ReleaseManage是否存在该账户信息
	 * @param undefined $username
	 *
	 */
	/*private function _checkUserFromReleaseManage($username)
	{
		$sql_rm = "SELECT COUNT(*) AS CNT FROM staff WHERE login_name = :username OR email = :username";
		$cnt = Yii::app()->dbrm->createCommand($sql_rm)->queryScalar(array(
            ':username' => $username,
        ));
		return $cnt;
	}*/

	/**
	 * 用户登录处理
	 * @param undefined $username
	 * @param undefined $password
	 *
	 */
	public function login($username,$password)
	{
		$user = $this->_getInfoFromCosweb($username,$password);
		if($user){
			return $user;
		}
		/*$user = $this->_getInfoFromReleaseManage($username,$password);
		if($user){
			return $user;
		}*/
		return FALSE;//没有找到登录账户信息
	}


	private function _getInfoFromCosweb($username,$password)
	{
		//从cosweb db查找用户信息
		$sql = "SELECT * FROM users WHERE user_name = :username AND passwd = :passwd AND status = 1";
		$row = Yii::app()->db->createCommand($sql)->queryRow(true,array(
            ':username' => $username,
			':passwd' => md5($password)
        ));
		if($row){
			$row['authority'] = 3;//等同于ReleaseManage里的SDK用户权限
		}
		return $row;
	}

	private function _getInfoFromReleaseManage($username,$password)
	{
		//从releasemanage db查找用户信息
		$sql_rm = "SELECT * FROM staff WHERE (login_name = :username OR email = :username) AND pass_word = :password AND status = 1";
		$row = Yii::app()->dbrm->createCommand($sql_rm)->queryRow(true,array(
            ':username' => $username,
			':password' => $password
        ));
		if($row){
			//与Cosweb账户登录信息字段保持一致
			$row['user_id'] = $row['id'];
			$row['user_name'] = $row['login_name'];
			$row['first_name'] = $row['staff_name'];
			$row['last_name'] = "";
		}
		return $row;
	}

    public function addUser($input=array())
    {
        //保存用户基本信息src_passwd

        $data = $input['data'];
		$src_data = $data;
		$data['status'] = 1;//默认注册后即激活此用户
		//$data['passwd'] = md5($data['passwd']);

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


	/**
	 * 用户通过邮箱地址找回密码时,修改用户当前登录密码
	 * @param undefined $pass_word
	 *
	 */
	public function updatePwdByEmail($pass_word,$email)
    {
		if($this->_checkUserFromCosweb($email)){
			$sql = 'update users set passwd = :pass_word where user_name = :email';
	        $cmd = Yii::app()->db->createCommand($sql)->execute(array(
	            ':pass_word' => md5($pass_word),
	            ':email' => $email,
	        ));
	        return $cmd;	
		}
		
		/*if($this->_checkUserFromReleaseManage($email)){
			$sql = 'update staff set pass_word = :pass_word where email = :email';
	        $cmd = Yii::app()->dbrm->createCommand($sql)->execute(array(
	            ':pass_word' => $pass_word,
	            ':email' => $email,
	        ));
	        return $cmd;	
		}*/
		return FALSE;
        
    }


}

?>

