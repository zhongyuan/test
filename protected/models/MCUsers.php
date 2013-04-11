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
		if(empty($input)){
			return array(false,"请填写注册信息");
		}
		
		$data = array();
		$fields = array('user_name','passwd','first_name','last_name');
		foreach($fields as $ef){
			if(!isset($input[$ef]) || empty($input[$ef])){
				return array(FALSE,"注册信息不完整!");
				break;
			}else{
				$data[$ef] = $input[$ef];
			}
		}
		
		//检查用户是否已被注册
		if($this->checkUser()){
			return array(FALSE,"此用户邮箱已被注册，请更换其他邮箱试试吧!");
		}
		
		//详细信息
		$data['passwd'] = substr(md5($data['passwd']),0,16);//采用16个字符的二进制格式
		$data['record_time'] = $data['update_time'] = time();
		$data['status'] = 1;//默认是注册后即激活用户(###后期可考虑只有通过邮件或手机验证后才激活用户###)
		$data['question_id']=empty($input['question_id'])?0:$input['question_id'];
		$data['answer'] = empty($input['answer'])?"":$input['answer'];
		$data['language'] = empty($input['language'])?"zh-cn":$input['language'];
		
		if(!empty($input['year']) && !empty($input['month']) && !empty($input['day'])){
			$data['birthday'] = mktime(0,0,0,intval($input['month']),intval($input['day']),intval($input['year']));
		}else{
			$data['birthday'] = 0;
		}
		
		if(!empty($input['viaEmail']) && !empty($input['viaEPaper'])){
			$data['contact_type'] = 2;//两种联系方式都使用
		}elseif(!empty($input['viaEmail'])){
			$data['contact_type'] = 0;//仅使用电子邮件联系
		}elseif(!empty($input['viaEPaper'])){
			$data['contact_type'] = 1;//仅使用电子报联系
		}else{
			$data['contact_type'] = 100;//不使用任何方式联系此用户
		}
		
		//保存用户信息
		
		
		
		
		
		$affect = $this->_insert("users",$data);
		if(!$affect){
			return array(FALSE,"数据写入失败,请重试!");
		}
		$user_id = Yii::app()->db->getLastInsertID("users");
		
		
		
		
		if(!$user_id){
			return array(FALSE,"数据写入失败,请重试!");
		}
		
		//保存用户联系地址相关信息
		$address = array();
		$addFields = array('country','company','address','county','state','zip_code');
		foreach($addFields as $af){
			if(isset($input[$af]) && !empty($input[$af])){
				$address[$af] = $input[$af];
			}
		}
		
		$address['update_time'] = $address['record_time'] = time();
		$address['user_id'] = $user_id;
		$this->_insert("address",$address);
		
		return array(TRUE,$data);//返回用户注册的详细信息
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
		var_dump(array_values($data));
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
