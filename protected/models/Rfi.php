<?php

/**
 * This is the model class for table "rfi".
 *
 * The followings are the available columns in table 'rfi':
 * @property integer $rfiid
 * @property integer $projectid
 * @property string $to
 * @property string $issue
 * @property string $datesubmitted
 * @property string $datereceived
 *
 * The followings are the available model relations:
 * @property Project $project
 */
class Rfi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rfi the static model class
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
		return 'rfi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rfiid, projectid', 'required'),
			array('rfiid, projectid', 'numerical', 'integerOnly'=>true),
			array('to, datesubmitted, datereceived', 'length', 'max'=>45),
			array('issue', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rfiid, projectid, to, issue, datesubmitted, datereceived', 'safe', 'on'=>'search'),
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
			'project' => array(self::BELONGS_TO, 'Project', 'projectid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rfiid' => 'Rfiid',
			'projectid' => 'Projectid',
			'to' => 'To',
			'issue' => 'Issue',
			'datesubmitted' => 'Datesubmitted',
			'datereceived' => 'Datereceived',
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

		$criteria->compare('rfiid',$this->rfiid);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('issue',$this->issue,true);
		$criteria->compare('datesubmitted',$this->datesubmitted,true);
		$criteria->compare('datereceived',$this->datereceived,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}