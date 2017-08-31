<?php

/**
 * This is the model class for table "tbf_bukutamu".
 *
 * The followings are the available columns in table 'tbf_bukutamu':
 * @property string $NAMA
 * @property string $KOTA
 * @property string $EMAIL
 * @property string $HOMEPAGE
 * @property string $KOMENTAR
 * @property string $IP
 * @property string $TGLPOST
 * @property string $status
 * @property string $balasan
 * @property integer $no_message
 */
class Bukutamu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbf_bukutamu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAMA, KOTA, EMAIL, KOMENTAR, TGLPOST, status', 'required'),
			array('EMAIL', 'email'),
			array('NAMA', 'length', 'max'=>60),
			array('KOTA, EMAIL, HOMEPAGE', 'length', 'max'=>50),
			array('KOMENTAR', 'length', 'max'=>255),
			array('IP', 'length', 'max'=>20),
			array('status', 'length', 'max'=>1),
			array('TGLPOST, balasan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NAMA, KOTA, EMAIL, HOMEPAGE, KOMENTAR, IP, TGLPOST, status, balasan, no_message', 'safe', 'on'=>'search'),
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
			'NAMA' => 'Nama',
			'KOTA' => 'Kota',
			'EMAIL' => 'Email',
			'HOMEPAGE' => 'Homepage',
			'KOMENTAR' => 'Komentar',
			'IP' => 'Ip',
			'TGLPOST' => 'Tglpost',
			'status' => 'Status',
			'balasan' => 'Balasan',
			'no_message' => 'No Message',
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

		$criteria->compare('NAMA',$this->NAMA,true);
		$criteria->compare('KOTA',$this->KOTA,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('HOMEPAGE',$this->HOMEPAGE,true);
		$criteria->compare('KOMENTAR',$this->KOMENTAR,true);
		$criteria->compare('IP',$this->IP,true);
		$criteria->compare('TGLPOST',$this->TGLPOST,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('balasan',$this->balasan,true);
		$criteria->compare('no_message',$this->no_message);
		$criteria->order = "TGLPOST DESC";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bukutamu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
