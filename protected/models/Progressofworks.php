<?php

/**
 * This is the model class for table "progressofworks".
 *
 * The followings are the available columns in table 'progressofworks':
 * @property integer $progressofworkid
 * @property string $note
 * @property string $actionby
 * @property string $duedate
 * @property integer $meetingid
 *
 * The followings are the available model relations:
 * @property Minutesofmeeting $meeting
 */
class Progressofworks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Progressofworks the static model class
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
		return 'progressofworks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('progressofworkid, note, actionby, duedate, meetingid', 'required'),
			array('progressofworkid, meetingid', 'numerical', 'integerOnly'=>true),
			array('actionby, duedate', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('progressofworkid, note, actionby, duedate, meetingid', 'safe', 'on'=>'search'),
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
			'meeting' => array(self::BELONGS_TO, 'Minutesofmeeting', 'meetingid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'progressofworkid' => 'Progressofworkid',
			'note' => 'Note',
			'actionby' => 'Actionby',
			'duedate' => 'Duedate',
			'meetingid' => 'Meetingid',
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

		$criteria->compare('progressofworkid',$this->progressofworkid);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('actionby',$this->actionby,true);
		$criteria->compare('duedate',$this->duedate,true);
		$criteria->compare('meetingid',$this->meetingid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}