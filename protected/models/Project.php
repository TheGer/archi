<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $projectid
 * @property string $projectname
 * @property string $startdate
 *
 * The followings are the available model relations:
 * @property Approvalrequest[] $approvalrequests
 * @property Dailyrecord[] $dailyrecords
 * @property Minutesofmeeting[] $minutesofmeetings
 * @property Noticetocheck[] $noticetochecks
 * @property Rfi[] $rfis
 * @property Variationorder[] $variationorders
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Project the static model class
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
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projectname', 'required'),
			array('projectname, startdate', 'length', 'max'=>45),
            array('startdate','date','format'=>'dd/mm/yyyy'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('projectid, projectname, startdate', 'safe', 'on'=>'search'),
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
			'approvalrequests' => array(self::HAS_MANY, 'Approvalrequest', 'projectid'),
			'dailyrecords' => array(self::HAS_MANY, 'Dailyrecord', 'projectid'),
			'minutesofmeetings' => array(self::HAS_MANY, 'Minutesofmeeting', 'projectid'),
			'noticetochecks' => array(self::HAS_MANY, 'Noticetocheck', 'projectid'),
			'rfis' => array(self::HAS_MANY, 'Rfi', 'projectid'),
			'variationorders' => array(self::HAS_MANY, 'Variationorder', 'projectid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'projectid' => 'Projectid',
			'projectname' => 'Projectname',
			'startdate' => 'Startdate',
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

		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('projectname',$this->projectname,true);
		$criteria->compare('startdate',$this->startdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}