<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $user_id
 * @property string $email
 * @property string $passwd
 * @property integer $question_id
 * @property string $answer
 * @property integer $birthday
 * @property string $first_name
 * @property string $last_name
 * @property string $language
 * @property integer $contact_type
 * @property integer $status
 * @property integer $update_time
 * @property integer $record_time
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, passwd, first_name, update_time, record_time', 'required'),
			array('question_id, birthday, contact_type, status, update_time, record_time', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>50),
			array('passwd', 'length', 'max'=>16),
			array('answer', 'length', 'max'=>30),
			array('first_name, last_name', 'length', 'max'=>20),
			array('language', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, email, passwd, question_id, answer, birthday, first_name, last_name, language, contact_type, status, update_time, record_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'email' => 'Email',
			'passwd' => 'Passwd',
			'question_id' => 'Question',
			'answer' => 'Answer',
			'birthday' => 'Birthday',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'language' => 'Language',
			'contact_type' => 'Contact Type',
			'status' => 'Status',
			'update_time' => 'Update Time',
			'record_time' => 'Record Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('passwd',$this->passwd,true);
		$criteria->compare('question_id',$this->question_id);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('birthday',$this->birthday);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('contact_type',$this->contact_type);
		$criteria->compare('status',$this->status);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('record_time',$this->record_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}