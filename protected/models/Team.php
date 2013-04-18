<?php

/**
 * This is the model class for table "team".
 *
 * The followings are the available columns in table 'team':
 * @property integer $team_id
 * @property string $team_name
 * @property string $contact_name
 * @property string $contact_email
 * @property integer $contact_phone
 * @property string $contact_company
 * @property integer $user_id
 * @property integer $update_time
 * @property integer $record_time
 */
class Team extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Team the static model class
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
		return 'team';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team_name, contact_name, contact_email, contact_phone, user_id, update_time, record_time', 'required'),
			array('contact_phone, user_id, update_time, record_time', 'numerical', 'integerOnly'=>true),
			array('team_name', 'length', 'max'=>30),
			array('contact_name, contact_company', 'length', 'max'=>20),
			array('contact_email', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('team_id, team_name, contact_name, contact_email, contact_phone, contact_company, user_id, update_time, record_time', 'safe', 'on'=>'search'),
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
			'team_id' => 'Team',
			'team_name' => 'Team Name',
			'contact_name' => 'Contact Name',
			'contact_email' => 'Contact Email',
			'contact_phone' => 'Contact Phone',
			'contact_company' => 'Contact Company',
			'user_id' => 'User',
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

		$criteria->compare('team_id',$this->team_id);
		$criteria->compare('team_name',$this->team_name,true);
		$criteria->compare('contact_name',$this->contact_name,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('contact_phone',$this->contact_phone);
		$criteria->compare('contact_company',$this->contact_company,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('record_time',$this->record_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}