<?php

/**
 * This is the model class for table "tm_multimedia".
 *
 * The followings are the available columns in table 'tm_multimedia':
 * @property integer $MULTIMEDIA_ID
 * @property string $TITLE
 * @property string $DESCRIPTION
 * @property string $FILE_DATE
 * @property string $FILE_TYPE
 * @property string $FILE_NAME
 * @property string $STATUS
 * @property string $C_DATE
 * @property string $C_UID
 * @property string $M_DATE
 * @property string $M_UID
 */
class Multimedia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tm_multimedia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TITLE, FILE_NAME', 'length', 'max'=>255),
			array('FILE_TYPE', 'length', 'max'=>30),
			array('STATUS', 'length', 'max'=>1),
			array('C_UID, M_UID', 'length', 'max'=>100),
			array('DESCRIPTION, FILE_DATE, C_DATE, M_DATE', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MULTIMEDIA_ID, TITLE, DESCRIPTION, FILE_DATE, FILE_TYPE, FILE_NAME, STATUS, C_DATE, C_UID, M_DATE, M_UID', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MULTIMEDIA_ID' => 'Multimedia',
			'TITLE' => 'Title',
			'DESCRIPTION' => 'Description',
			'FILE_DATE' => 'File Date',
			'FILE_TYPE' => 'File Type',
			'FILE_NAME' => 'File Name',
			'STATUS' => 'Status',
			'C_DATE' => 'C Date',
			'C_UID' => 'C Uid',
			'M_DATE' => 'M Date',
			'M_UID' => 'M Uid',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('MULTIMEDIA_ID',$this->MULTIMEDIA_ID);
		$criteria->compare('TITLE',$this->TITLE,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('FILE_DATE',$this->FILE_DATE,true);
		$criteria->compare('FILE_TYPE',$this->FILE_TYPE,true);
		$criteria->compare('FILE_NAME',$this->FILE_NAME,true);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('C_DATE',$this->C_DATE,true);
		$criteria->compare('C_UID',$this->C_UID,true);
		$criteria->compare('M_DATE',$this->M_DATE,true);
		$criteria->compare('M_UID',$this->M_UID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Multimedia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
