<?php

/**
 * This is the model class for table "dailyrecord".
 *
 * The followings are the available columns in table 'dailyrecord':
 * @property integer $dailyrecordid
 * @property string $wind
 * @property integer $maxtemp
 * @property integer $relativehumidity
 * @property string $date
 * @property integer $supervisors
 * @property integer $tradesmen
 * @property integer $labour
 * @property integer $builder
 * @property string $equipment
 * @property string $works
 * @property string $remarks
 * @property string $deliveries
 * @property string $phonecalls
 * @property string $visitors
 * @property string $nonconformance
 * @property integer $approved
 * @property integer $signed
 * @property integer $projectid
 *
 * The followings are the available model relations:
 * @property Project $project
 */
class Dailyrecord extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dailyrecord the static model class
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
		return 'dailyrecord';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('wind, maxtemp, relativehumidity, date, supervisors, tradesmen, labour, builder, equipment, works, remarks, deliveries, phonecalls, visitors, nonconformance, approved, signed, projectid', 'required'),
			array('maxtemp, relativehumidity, supervisors, tradesmen, labour, builder, approved, signed, projectid', 'numerical', 'integerOnly'=>true),
			array('wind, date', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dailyrecordid, wind, maxtemp, relativehumidity, date, supervisors, tradesmen, labour, builder, equipment, works, remarks, deliveries, phonecalls, visitors, nonconformance, approved, signed, projectid', 'safe', 'on'=>'search'),
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
			'dailyrecordid' => 'Daily record id',
			'wind' => 'Wind',
			'maxtemp' => 'Max temp',
			'relativehumidity' => 'Relative humidity',
			'date' => 'Date',
			'supervisors' => 'Supervisors',
			'tradesmen' => 'Tradesmen',
			'labour' => 'Labour',
			'builder' => 'Builder',
			'equipment' => 'Equipment',
			'works' => 'Works',
			'remarks' => 'Remarks',
			'deliveries' => 'Deliveries',
			'phonecalls' => 'Phonecalls',
			'visitors' => 'Visitors',
			'nonconformance' => 'Non conformance',
			'approved' => 'Approved',
			'signed' => 'Signed',
			'projectid' => 'Projectid',
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

		$criteria->compare('dailyrecordid',$this->dailyrecordid);
		$criteria->compare('wind',$this->wind,true);
		$criteria->compare('maxtemp',$this->maxtemp);
		$criteria->compare('relativehumidity',$this->relativehumidity);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('supervisors',$this->supervisors);
		$criteria->compare('tradesmen',$this->tradesmen);
		$criteria->compare('labour',$this->labour);
		$criteria->compare('builder',$this->builder);
		$criteria->compare('equipment',$this->equipment,true);
		$criteria->compare('works',$this->works,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('deliveries',$this->deliveries,true);
		$criteria->compare('phonecalls',$this->phonecalls,true);
		$criteria->compare('visitors',$this->visitors,true);
		$criteria->compare('nonconformance',$this->nonconformance,true);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('signed',$this->signed);
		$criteria->compare('projectid',$this->projectid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}