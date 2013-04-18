<?php

/**
 * This is the model class for table "teamMember".
 *
 * The followings are the available columns in table 'teamMember':
 * @property integer $member_id
 * @property string $member_name
 * @property integer $team_id
 * @property string $member_email
 * @property integer $member_phone
 * @property string $member_company
 * @property integer $update_time
 * @property integer $record_time
 */
class TeamMember extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TeamMember the static model class
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
		return 'teamMember';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_name, team_id, member_email, member_phone, update_time, record_time', 'required'),
			array('team_id, member_phone, update_time, record_time', 'numerical', 'integerOnly'=>true),
			array('member_name, member_company', 'length', 'max'=>20),
			array('member_email', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('member_id, member_name, team_id, member_email, member_phone, member_company, update_time, record_time', 'safe', 'on'=>'search'),
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
			'member_id' => 'Member',
			'member_name' => 'Member Name',
			'team_id' => 'Team',
			'member_email' => 'Member Email',
			'member_phone' => 'Member Phone',
			'member_company' => 'Member Company',
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

		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('member_name',$this->member_name,true);
		$criteria->compare('team_id',$this->team_id);
		$criteria->compare('member_email',$this->member_email,true);
		$criteria->compare('member_phone',$this->member_phone);
		$criteria->compare('member_company',$this->member_company,true);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('record_time',$this->record_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}