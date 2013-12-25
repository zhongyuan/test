<?php

/**
 * This is the model class for table "api".
 *
 * The followings are the available columns in table 'api':
 * @property integer $id
 * @property string $name
 * @property integer $parent_id
 * @property integer $has_child
 * @property string $path
 * @property integer $type
 * @property integer $status
 * @property integer $is_locked
 * @property integer $version
 * @property integer $staff_id
 * @property integer $update_time
 * @property integer $record_time
 */
class Api extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Api the static model class
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
		return 'api';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id, has_child, type, status, is_locked, version, staff_id, update_time, record_time', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('path', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, parent_id, has_child, path, type, status, is_locked, version, staff_id, update_time, record_time', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'parent_id' => 'Parent',
			'has_child' => 'Has Child',
			'path' => 'Path',
			'type' => 'Type',
			'status' => 'Status',
			'is_locked' => 'Is Locked',
			'version' => 'Version',
			'staff_id' => 'Staff',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('has_child',$this->has_child);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('status',$this->status);
		$criteria->compare('is_locked',$this->is_locked);
		$criteria->compare('version',$this->version);
		$criteria->compare('staff_id',$this->staff_id);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('record_time',$this->record_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}