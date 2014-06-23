<?php

/**
 * This is the model class for table "approvalrequest".
 *
 * The followings are the available columns in table 'approvalrequest':
 * @property integer $sarid
 * @property integer $projectid
 * @property string $contractnumber
 * @property string $to
 * @property string $sarnumber
 * @property string $from
 * @property string $date
 * @property string $comments
 * @property string $approval
 *
 * The followings are the available model relations:
 * @property Project $project
 * @property Sample[] $samples
 */
class Approvalrequest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Approvalrequest the static model class
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
		return 'approvalrequest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sarid, projectid', 'required'),
			array('sarid, projectid', 'numerical', 'integerOnly'=>true),
			array('contractnumber, to, sarnumber, from, date', 'length', 'max'=>45),
			array('comments, approval', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sarid, projectid, contractnumber, to, sarnumber, from, date, comments, approval', 'safe', 'on'=>'search'),
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
			'samples' => array(self::HAS_MANY, 'Sample', 'sarid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sarid' => 'Sarid',
			'projectid' => 'Projectid',
			'contractnumber' => 'Contractnumber',
			'to' => 'To',
			'sarnumber' => 'Sarnumber',
			'from' => 'From',
			'date' => 'Date',
			'comments' => 'Comments',
			'approval' => 'Approval',
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

		$criteria->compare('sarid',$this->sarid);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('contractnumber',$this->contractnumber,true);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('sarnumber',$this->sarnumber,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('approval',$this->approval,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}