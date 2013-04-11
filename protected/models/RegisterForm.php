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
	
	
	public function rules()
	{
		return array(
			array('user_name,passwd,passwd2,question_id,answer','required'),
			array('user_name','email'),
			array('passwd','compare','compareAttribute'=>"passwd2"),
		);
	}
 }
?>