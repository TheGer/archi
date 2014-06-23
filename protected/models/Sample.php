<?php

/**
 * This is the model class for table "sample".
 *
 * The followings are the available columns in table 'sample':
 * @property integer $sampleid
 * @property integer $sarid
 * @property string $drawingnumber
 * @property string $specificationsection
 * @property string $certificate
 * @property string $specifications
 * @property string $sample
 *
 * The followings are the available model relations:
 * @property Approvalrequest $sar
 */
class Sample extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sample the static model class
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
		return 'sample';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sampleid, sarid', 'required'),
			array('sampleid, sarid', 'numerical', 'integerOnly'=>true),
			array('drawingnumber, sample', 'length', 'max'=>45),
			array('specificationsection, certificate, specifications', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sampleid, sarid, drawingnumber, specificationsection, certificate, specifications, sample', 'safe', 'on'=>'search'),
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
			'sar' => array(self::BELONGS_TO, 'Approvalrequest', 'sarid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sampleid' => 'Sampleid',
			'sarid' => 'Sarid',
			'drawingnumber' => 'Drawingnumber',
			'specificationsection' => 'Specificationsection',
			'certificate' => 'Certificate',
			'specifications' => 'Specifications',
			'sample' => 'Sample',
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

		$criteria->compare('sampleid',$this->sampleid);
		$criteria->compare('sarid',$this->sarid);
		$criteria->compare('drawingnumber',$this->drawingnumber,true);
		$criteria->compare('specificationsection',$this->specificationsection,true);
		$criteria->compare('certificate',$this->certificate,true);
		$criteria->compare('specifications',$this->specifications,true);
		$criteria->compare('sample',$this->sample,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}