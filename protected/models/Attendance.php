<?php

/**
 * This is the model class for table "attendance".
 *
 * The followings are the available columns in table 'attendance':
 * @property integer $attendanceid
 * @property string $name
 * @property string $company
 * @property string $role
 * @property string $responsibility
 * @property string $acronym
 * @property string $note
 * @property integer $presentabsent
 * @property integer $meetingid
 *
 * The followings are the available model relations:
 * @property Minutesofmeeting $meeting
 */
class Attendance extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Attendance the static model class
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
		return 'attendance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attendanceid, name, company, presentabsent, meetingid', 'required'),
			array('attendanceid, presentabsent, meetingid', 'numerical', 'integerOnly'=>true),
			array('name, company, role, responsibility, acronym', 'length', 'max'=>45),
			array('note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('attendanceid, name, company, role, responsibility, acronym, note, presentabsent, meetingid', 'safe', 'on'=>'search'),
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
			'attendanceid' => 'Attendanceid',
			'name' => 'Name',
			'company' => 'Company',
			'role' => 'Role',
			'responsibility' => 'Responsibility',
			'acronym' => 'Acronym',
			'note' => 'Note',
			'presentabsent' => 'Presentabsent',
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

		$criteria->compare('attendanceid',$this->attendanceid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('responsibility',$this->responsibility,true);
		$criteria->compare('acronym',$this->acronym,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('presentabsent',$this->presentabsent);
		$criteria->compare('meetingid',$this->meetingid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}