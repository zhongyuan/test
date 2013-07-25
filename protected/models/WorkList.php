<?php

/**
 * This is the model class for table "newsList".
 *
 * The followings are the available columns in table 'newsList':
 * @property integer $id
 * @property string $title
 * @property string $outline
 * @property integer $img_little
 * @property integer $update_time
 * @property integer $record_time
 */
class WorkList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NewsList the static model class
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
		return 'team_work';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array();
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
			'work_name' => 'work_name',
			'work_icon' => 'work_icon',
			'team_id' => 'team_id',
			'work_brief' => 'work_brief',
			'work_detail' => 'work_detail',
			'work_fee' => 'work_fee',
			'work_category'=>'work_category',
			'reward_category'=>'reward_category',
			'update_time'=>'update_time',
			'record_time'=>'record_time',
			'reward_id'=>'reward_id'
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
		$criteria->compare('work_name',$this->work_name);
		$criteria->compare('work_icon',$this->work_icon);
		$criteria->compare('team_id',$this->team_id);
		$criteria->compare('work_brief',$this->work_brief);
		$criteria->compare('work_detail',$this->work_detail);
		
		$criteria->compare('work_fee',$this->work_fee);
		$criteria->compare('work_category',$this->work_category);
		$criteria->compare('reward_category',$this->reward_category);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('record_time',$this->record_time);
		$criteria->compare('reward_id',$this->reward_id);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}