<?php

/**
 * This is the model class for table "newsDetail".
 *
 * The followings are the available columns in table 'newsDetail':
 * @property integer $news_id
 * @property string $news_detail
 * @property integer $update_time
 * @property integer $record_time
 */
class NewsDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NewsDetail the static model class
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
		return 'newsDetail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('news_id, news_detail, update_time, record_time', 'required'),
			array('news_id, update_time, record_time', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('news_id, news_detail, update_time, record_time', 'safe', 'on'=>'search'),
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
			'news_id' => 'News',
			'news_detail' => 'News Detail',
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

		$criteria->compare('news_id',$this->news_id);
		$criteria->compare('news_detail',$this->news_detail,true);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('record_time',$this->record_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}