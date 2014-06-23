<?php

/**
 * This is the model class for table "variationorder".
 *
 * The followings are the available columns in table 'variationorder':
 * @property integer $variationorderid
 * @property integer $projectid
 * @property string $contractnumber
 * @property string $to
 * @property string $from
 * @property string $referencenumber
 * @property string $date
 * @property string $variationdetails
 * @property string $variationreason
 * @property string $costbreakdown
 * @property string $effectsonduration
 * @property string $requestedbyuomdate
 * @property string $approveddate
 * @property string $approvedconsultantdate
 *
 * The followings are the available model relations:
 * @property Variationattachment[] $variationattachments
 * @property Project $project
 */
class Variationorder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Variationorder the static model class
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
		return 'variationorder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('variationorderid, projectid', 'required'),
			array('variationorderid, projectid', 'numerical', 'integerOnly'=>true),
			array('contractnumber, to, from, referencenumber, date, requestedbyuomdate, approveddate, approvedconsultantdate', 'length', 'max'=>45),
			array('variationdetails, variationreason, costbreakdown, effectsonduration', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('variationorderid, projectid, contractnumber, to, from, referencenumber, date, variationdetails, variationreason, costbreakdown, effectsonduration, requestedbyuomdate, approveddate, approvedconsultantdate', 'safe', 'on'=>'search'),
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
			'variationattachments' => array(self::HAS_MANY, 'Variationattachment', 'variationorderid'),
			'project' => array(self::BELONGS_TO, 'Project', 'projectid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'variationorderid' => 'Variationorderid',
			'projectid' => 'Projectid',
			'contractnumber' => 'Contractnumber',
			'to' => 'To',
			'from' => 'From',
			'referencenumber' => 'Referencenumber',
			'date' => 'Date',
			'variationdetails' => 'Variationdetails',
			'variationreason' => 'Variationreason',
			'costbreakdown' => 'Costbreakdown',
			'effectsonduration' => 'Effectsonduration',
			'requestedbyuomdate' => 'Requestedbyuomdate',
			'approveddate' => 'Approveddate',
			'approvedconsultantdate' => 'Approvedconsultantdate',
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

		$criteria->compare('variationorderid',$this->variationorderid);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('contractnumber',$this->contractnumber,true);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('referencenumber',$this->referencenumber,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('variationdetails',$this->variationdetails,true);
		$criteria->compare('variationreason',$this->variationreason,true);
		$criteria->compare('costbreakdown',$this->costbreakdown,true);
		$criteria->compare('effectsonduration',$this->effectsonduration,true);
		$criteria->compare('requestedbyuomdate',$this->requestedbyuomdate,true);
		$criteria->compare('approveddate',$this->approveddate,true);
		$criteria->compare('approvedconsultantdate',$this->approvedconsultantdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}