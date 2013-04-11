<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */


        public function authenticate()
	{

                $mcUser = new MCUsers($this->username);
                $record = $mcUser->checkUser();

		if(!isset($record['user_id']) || $record['status']==1){  //status=1表示用户被禁
			$this->errorCode=self::ERROR_USERNAME_INVALID;
                }elseif($record['passwd']!=$this->password){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
                }else{
			$this->errorCode=self::ERROR_NONE;
                        //记录到session
                        $session = Yii::app()->session;
                        $session['user_id'] = $record['user_id'];
                        $session['user_name'] = $this->username;
                        $session['first_name'] = $record['first_name'];
                        $session['last_name'] = $record['last_name'];
                        $session['language'] = $record['language'];
                        $session->setTimeout(3600*24);
                }
		return !$this->errorCode;


	}
}