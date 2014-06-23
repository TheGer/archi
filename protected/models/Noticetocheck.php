<?php

/**
 * This is the model class for table "noticetocheck".
 *
 * The followings are the available columns in table 'noticetocheck':
 * @property integer $noticetocheckid
 * @property integer $projectid
 * @property string $contractnumber
 * @property string $to
 * @property string $from
 * @property string $referencenumber
 * @property string $date
 * @property string $description
 * @property string $concealmentdate
 * @property string $concealmenttime
 * @property string $comments
 * @property string $inspectedbyname
 * @property string $inspectedbyposition
 * @property string $inspectedbydate
 * @property string $consultantname
 * @property string $consultantposition
 * @property string $consultantdate
 *
 * The followings are the available model relations:
 * @property Project $project
 */
class Noticetocheck extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Noticetocheck the static model class
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
		return 'noticetocheck';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('noticetocheckid, projectid', 'required'),
			array('noticetocheckid, projectid', 'numerical', 'integerOnly'=>true),
			array('contractnumber, to, from, referencenumber, date, concealmentdate, concealmenttime, inspectedbyname, inspectedbyposition, inspectedbydate, consultantname, consultantposition, consultantdate', 'length', 'max'=>45),
			array('description, comments', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('noticetocheckid, projectid, contractnumber, to, from, referencenumber, date, description, concealmentdate, concealmenttime, comments, inspectedbyname, inspectedbyposition, inspectedbydate, consultantname, consultantposition, consultantdate', 'safe', 'on'=>'search'),
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
			'noticetocheckid' => 'Noticetocheckid',
			'projectid' => 'Projectid',
			'contractnumber' => 'Contractnumber',
			'to' => 'To',
			'from' => 'From',
			'referencenumber' => 'Referencenumber',
			'date' => 'Date',
			'description' => 'Description',
			'concealmentdate' => 'Concealmentdate',
			'concealmenttime' => 'Concealmenttime',
			'comments' => 'Comments',
			'inspectedbyname' => 'Inspectedbyname',
			'inspectedbyposition' => 'Inspectedbyposition',
			'inspectedbydate' => 'Inspectedbydate',
			'consultantname' => 'Consultantname',
			'consultantposition' => 'Consultantposition',
			'consultantdate' => 'Consultantdate',
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

		$criteria->compare('noticetocheckid',$this->noticetocheckid);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('contractnumber',$this->contractnumber,true);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('referencenumber',$this->referencenumber,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('concealmentdate',$this->concealmentdate,true);
		$criteria->compare('concealmenttime',$this->concealmenttime,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('inspectedbyname',$this->inspectedbyname,true);
		$criteria->compare('inspectedbyposition',$this->inspectedbyposition,true);
		$criteria->compare('inspectedbydate',$this->inspectedbydate,true);
		$criteria->compare('consultantname',$this->consultantname,true);
		$criteria->compare('consultantposition',$this->consultantposition,true);
		$criteria->compare('consultantdate',$this->consultantdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}