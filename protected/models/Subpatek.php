<?php

/**
 * This is the model class for table "tbsubpatek".
 *
 * The followings are the available columns in table 'tbsubpatek':
 * @property string $KD_SUBPATEK
 * @property string $KD_PATEK
 * @property string $NM_SUBPATEK
 * @property string $JAWAB
 * @property string $KODE_SUBPATEK
 */
class Subpatek extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbsubpatek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_SUBPATEK, KD_PATEK', 'required'),
			array('KD_SUBPATEK, KD_PATEK', 'unique'),
			array('KD_SUBPATEK, KD_PATEK', 'length', 'max'=>5),
			array('NM_SUBPATEK, JAWAB', 'length', 'max'=>75),
			array('KODE_SUBPATEK', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_SUBPATEK, KD_PATEK, NM_SUBPATEK, JAWAB, KODE_SUBPATEK', 'safe', 'on'=>'search'),
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
			'Gugus'=>array(self::HAS_MANY,'Gugus','KD_SUBPATEK'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KD_SUBPATEK' => 'Kode Sub Panitia Teknis',
			'KD_PATEK' => 'Kode Panitia Teknis',
			'NM_SUBPATEK' => 'Nama Sub Panitia Teknis',
			'JAWAB' => 'Jawab',
			'KODE_SUBPATEK' => 'Kode Sub Panitia Teknis',
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

		$criteria->compare('KD_SUBPATEK',$this->KD_SUBPATEK,true);
		$criteria->compare('KD_PATEK',$this->KD_PATEK,true);
		$criteria->compare('NM_SUBPATEK',$this->NM_SUBPATEK,true);
		$criteria->compare('JAWAB',$this->JAWAB,true);
		$criteria->compare('KODE_SUBPATEK',$this->KODE_SUBPATEK,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tbsubpatek the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
