<?php

/**
 * This is the model class for table "gugus".
 *
 * The followings are the available columns in table 'gugus':
 * @property string $KD_GUGUS
 * @property string $KD_SUBPATEK
 * @property string $NM_GUGUS
 */
class Gugus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbgugus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_GUGUS', 'required'),
			array('KD_GUGUS', 'unique'),
			array('KD_GUGUS, KD_SUBPATEK', 'length', 'max'=>5),
			array('NM_GUGUS', 'length', 'max'=>75),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_GUGUS, KD_SUBPATEK, NM_GUGUS', 'safe', 'on'=>'search'),
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
			'Sub'=>array(self::BELONGS_TO,'Subpatek','KD_SUBPATEK'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KD_GUGUS' => 'Kode Gugus',
			'KD_SUBPATEK' => 'Kode Subpatek',
			'NM_GUGUS' => 'Gugus Kerja',
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

		$criteria->compare('KD_GUGUS',$this->KD_GUGUS,true);
		$criteria->compare('KD_SUBPATEK',$this->KD_SUBPATEK,true);
		$criteria->compare('NM_GUGUS',$this->NM_GUGUS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tbgugus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
