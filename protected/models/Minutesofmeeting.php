<?php

/**
 * This is the model class for table "minutesofmeeting".
 *
 * The followings are the available columns in table 'minutesofmeeting':
 * @property integer $minutesofmeetingid
 * @property integer $projectid
 * @property string $time
 * @property string $place
 * @property string $typeofmeeting
 * @property integer $meetingnumber
 * @property string $date
 * @property string $nextmeetingdate
 * @property string $nextmeetingtime
 * @property string $nextmeetinglocation
 * @property string $sectionbcontractnumber
 * @property string $sectionbtitle
 *
 * The followings are the available model relations:
 * @property Attendance[] $attendances
 * @property Financialmatters[] $financialmatters
 * @property Generalmatters[] $generalmatters
 * @property Healthandsafety[] $healthandsafeties
 * @property Project $project
 * @property Progressofworks[] $progressofworks
 * @property Technicalmatters[] $technicalmatters
 */
class Minutesofmeeting extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Minutesofmeeting the static model class
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
		return 'minutesofmeeting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('minutesofmeetingid, projectid, time, place, typeofmeeting, meetingnumber, date', 'required'),
			array('minutesofmeetingid, projectid, meetingnumber', 'numerical', 'integerOnly'=>true),
			array('time, place, typeofmeeting, date, nextmeetingdate, nextmeetingtime, nextmeetinglocation, sectionbcontractnumber, sectionbtitle', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('minutesofmeetingid, projectid, time, place, typeofmeeting, meetingnumber, date, nextmeetingdate, nextmeetingtime, nextmeetinglocation, sectionbcontractnumber, sectionbtitle', 'safe', 'on'=>'search'),
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
			'attendances' => array(self::HAS_MANY, 'Attendance', 'meetingid'),
			'financialmatters' => array(self::HAS_MANY, 'Financialmatters', 'meetingid'),
			'generalmatters' => array(self::HAS_MANY, 'Generalmatters', 'meetingid'),
			'healthandsafeties' => array(self::HAS_MANY, 'Healthandsafety', 'meetingid'),
			'project' => array(self::BELONGS_TO, 'Project', 'projectid'),
			'progressofworks' => array(self::HAS_MANY, 'Progressofworks', 'meetingid'),
			'technicalmatters' => array(self::HAS_MANY, 'Technicalmatters', 'meetingid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'minutesofmeetingid' => 'Minutesofmeetingid',
			'projectid' => 'Projectid',
			'time' => 'Time',
			'place' => 'Place',
			'typeofmeeting' => 'Typeofmeeting',
			'meetingnumber' => 'Meetingnumber',
			'date' => 'Date',
			'nextmeetingdate' => 'Nextmeetingdate',
			'nextmeetingtime' => 'Nextmeetingtime',
			'nextmeetinglocation' => 'Nextmeetinglocation',
			'sectionbcontractnumber' => 'Sectionbcontractnumber',
			'sectionbtitle' => 'Sectionbtitle',
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

		$criteria->compare('minutesofmeetingid',$this->minutesofmeetingid);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('typeofmeeting',$this->typeofmeeting,true);
		$criteria->compare('meetingnumber',$this->meetingnumber);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('nextmeetingdate',$this->nextmeetingdate,true);
		$criteria->compare('nextmeetingtime',$this->nextmeetingtime,true);
		$criteria->compare('nextmeetinglocation',$this->nextmeetinglocation,true);
		$criteria->compare('sectionbcontractnumber',$this->sectionbcontractnumber,true);
		$criteria->compare('sectionbtitle',$this->sectionbtitle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}