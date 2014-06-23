<?php

/**
 * This is the model class for table "financialmatters".
 *
 * The followings are the available columns in table 'financialmatters':
 * @property integer $financialmattersid
 * @property integer $meetingid
 * @property string $note
 * @property string $actionby
 * @property string $duedate
 *
 * The followings are the available model relations:
 * @property Minutesofmeeting $meeting
 */
class Financialmatters extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Financialmatters the static model class
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
		return 'financialmatters';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('financialmattersid, meetingid, note, actionby', 'required'),
			array('financialmattersid, meetingid', 'numerical', 'integerOnly'=>true),
			array('note, actionby, duedate', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('financialmattersid, meetingid, note, actionby, duedate', 'safe', 'on'=>'search'),
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
			'financialmattersid' => 'Financialmatters id',
			'meetingid' => 'Meeting id',
			'note' => 'Note',
			'actionby' => 'Action by',
			'duedate' => 'Due date',
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

		$criteria->compare('financialmattersid',$this->financialmattersid);
		$criteria->compare('meetingid',$this->meetingid);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('actionby',$this->actionby,true);
		$criteria->compare('duedate',$this->duedate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}