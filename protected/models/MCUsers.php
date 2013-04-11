	
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCUsers {

    

    function __construct() {
       
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
