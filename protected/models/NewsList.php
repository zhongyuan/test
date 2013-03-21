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
class NewsList extends CActiveRecord
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
		return 'newsList';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, outline, img_little, update_time, record_time', 'required'),
			array('img_little, update_time, record_time', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>60),
			array('outline', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, outline, img_little, update_time, record_time', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'outline' => 'Outline',
			'img_little' => 'Img Little',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('outline',$this->outline,true);
		$criteria->compare('img_little',$this->img_little);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('record_time',$this->record_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}