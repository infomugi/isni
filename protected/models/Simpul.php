<?php

/**
 * This is the model class for table "tr_simpul".
 *
 * The followings are the available columns in table 'tr_simpul':
 * @property integer $Id
 * @property string $Nama
 * @property string $Alamat
 * @property string $Email
 * @property string $Website
 * @property string $kd_simpul
 */
class Simpul extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tr_simpul';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_simpul, Nama, Alamat, Email', 'required'),
			array('Nama, Alamat', 'length', 'max'=>200),
			array('Email, kd_simpul', 'length', 'max'=>50),
			array('Website', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Nama, Alamat, Email, Website, kd_simpul', 'safe', 'on'=>'search'),
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
			'Id' => 'ID',
			'Nama' => 'Nama',
			'Alamat' => 'Alamat',
			'Email' => 'Email',
			'Website' => 'Website',
			'kd_simpul' => 'Kd Simpul',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Nama',$this->Nama,true);
		$criteria->compare('Alamat',$this->Alamat,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Website',$this->Website,true);
		$criteria->compare('kd_simpul',$this->kd_simpul,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Simpul the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
