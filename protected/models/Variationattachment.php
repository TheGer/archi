<?php

/**
 * This is the model class for table "variationattachment".
 *
 * The followings are the available columns in table 'variationattachment':
 * @property integer $variationattachmentid
 * @property integer $variationorderid
 * @property string $attachmentpath
 * @property string $attachmentdescription
 *
 * The followings are the available model relations:
 * @property Variationorder $variationorder
 */
class Variationattachment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Variationattachment the static model class
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
		return 'variationattachment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('variationattachmentid, variationorderid', 'required'),
			array('variationattachmentid, variationorderid', 'numerical', 'integerOnly'=>true),
			array('attachmentpath', 'length', 'max'=>45),
			array('attachmentdescription', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('variationattachmentid, variationorderid, attachmentpath, attachmentdescription', 'safe', 'on'=>'search'),
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
			'variationorder' => array(self::BELONGS_TO, 'Variationorder', 'variationorderid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'variationattachmentid' => 'Variationattachmentid',
			'variationorderid' => 'Variationorderid',
			'attachmentpath' => 'Attachmentpath',
			'attachmentdescription' => 'Attachmentdescription',
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

		$criteria->compare('variationattachmentid',$this->variationattachmentid);
		$criteria->compare('variationorderid',$this->variationorderid);
		$criteria->compare('attachmentpath',$this->attachmentpath,true);
		$criteria->compare('attachmentdescription',$this->attachmentdescription,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}