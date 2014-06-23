<?php

/**
 * This is the model class for table "generalmatters".
 *
 * The followings are the available columns in table 'generalmatters':
 * @property integer $generalmattersid
 * @property integer $meetingid
 * @property string $name
 * @property string $ref
 * @property string $notes
 * @property string $milestonedate
 * @property string $milestonedescription
 * @property string $generalmatterscol
 *
 * The followings are the available model relations:
 * @property Minutesofmeeting $meeting
 */
class Generalmatters extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Generalmatters the static model class
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
		return 'generalmatters';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('generalmattersid, meetingid, name, ref', 'required'),
			array('generalmattersid, meetingid', 'numerical', 'integerOnly'=>true),
			array('name, ref, notes, milestonedate, milestonedescription, generalmatterscol', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('generalmattersid, meetingid, name, ref, notes, milestonedate, milestonedescription, generalmatterscol', 'safe', 'on'=>'search'),
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
			'generalmattersid' => 'General matters id',
			'meetingid' => 'Meeting id',
			'name' => 'Name',
			'ref' => 'Ref',
			'notes' => 'Notes',
			'milestonedate' => 'Milestone date',
			'milestonedescription' => 'Milestone description',
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

		$criteria->compare('generalmattersid',$this->generalmattersid);
		$criteria->compare('meetingid',$this->meetingid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('ref',$this->ref,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('milestonedate',$this->milestonedate,true);
		$criteria->compare('milestonedescription',$this->milestonedescription,true);
		$criteria->compare('generalmatterscol',$this->generalmatterscol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}