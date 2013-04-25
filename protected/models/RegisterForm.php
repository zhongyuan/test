<?php
 class RegisterForm extends CFormModel
 {
 	public $user_name;
	public $passwd;
	public $passwd2;
	public $question_id;
	public $answer;
	public $first_name;
	public $last_name;
	public $language;
	public $contact_type;
	
	public $year;
	public $month;
	public $day;
	
	public $country;
	public $company;
	public $address;
	public $county;
	public $state;
	public $zip_code;
	public $status;
	public $viaEmail;
	public $viaEPaper;
	public $isRead;
	public $verifyCode;
	
	
	public function rules()
	{
		return array(
			
			array('user_name,passwd,passwd2,first_name,last_name,isRead,verifyCode','required'),
			array('user_name','email'),
			array('passwd','compare','compareAttribute'=>"passwd2"),
			array('verifyCode','captcha','allowEmpty'=>!Yii::app()->user->isGuest),
			array('question_id,answer,language,contact_type,year,month,day,country,company,address,county,state,zip_code,status,viaEmail,viaEPaper','safe')
		);
	}
	
	public function attributeLabels()
	{
		return array('verifyCode' => 'Verification Code');
	}
 }
?>