<?php

/**
 * This is the model class for table "teamWork".
 *
 * The followings are the available columns in table 'teamWork':
 * @property integer $work_id
 * @property string $work_name
 * @property integer $team_id
 * @property string $work_brief
 * @property string $work_detail
 * @property string $work_fee
 * @property integer $work_category
 * @property integer $reward_category
 * @property integer $update_time
 * @property integer $record_time
 */
class TeamWork extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TeamWork the static model class
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
		return 'teamWork';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('work_name, work_brief', 'required'),
			array('team_id, work_category, reward_category, update_time, record_time', 'numerical', 'integerOnly'=>true),
			array('work_name', 'length', 'max'=>20),
			array('work_brief', 'length', 'max'=>50),
			array('work_fee', 'length', 'max'=>5),
			array('work_detail', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('work_id, work_name, team_id, work_brief, work_detail, work_fee, work_category, reward_category, update_time, record_time', 'safe', 'on'=>'search'),
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
			'work_id' => 'Work',
			'work_name' => 'Work Name',
			'team_id' => 'Team',
			'work_brief' => 'Work Brief',
			'work_detail' => 'Work Detail',
			'work_fee' => 'Work Fee',
			'work_category' => 'Work Category',
			'reward_category' => 'Reward Category',
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

		$criteria->compare('work_id',$this->work_id);
		$criteria->compare('work_name',$this->work_name,true);
		$criteria->compare('team_id',$this->team_id);
		$criteria->compare('work_brief',$this->work_brief,true);
		$criteria->compare('work_detail',$this->work_detail,true);
		$criteria->compare('work_fee',$this->work_fee,true);
		$criteria->compare('work_category',$this->work_category);
		$criteria->compare('reward_category',$this->reward_category);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('record_time',$this->record_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}