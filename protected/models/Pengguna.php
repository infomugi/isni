<?php

/**
 * This is the model class for table "tm_user_register".
 *
 * The followings are the available columns in table 'tm_user_register':
 * @property integer $Id
 * @property string $Nama
 * @property string $Email
 * @property string $Alamat
 * @property integer $Id_kabupaten_kota
 * @property integer $Id_jenis_pekerjaan
 * @property integer $Id_bidang_pekerjaan
 * @property integer $Id_tujuan
 * @property string $Nama_instansi
 * @property string $User_name
 * @property string $Password
 * @property string $Flag_register
 * @property integer $Id_simpul
 * @property string $Tanggal_entry
 * @property string $User_entry
 */
class Pengguna extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tm_user_register';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nama, Email, Alamat, Id_kabupaten_kota, Id_jenis_pekerjaan, Id_bidang_pekerjaan, Id_tujuan, Nama_instansi, User_name, Password', 'required'),
			array('Id_kabupaten_kota, Id_jenis_pekerjaan, Id_bidang_pekerjaan, Id_tujuan, Id_simpul', 'numerical', 'integerOnly'=>true),
			array('Nama, Email, Alamat, Nama_instansi', 'length', 'max'=>100),
			array('User_name, Password, User_entry', 'length', 'max'=>50),
			array('Flag_register', 'length', 'max'=>1),
			array('Tanggal_entry', 'safe'),
			array('Email', 'email'),
			array('Email, User_name', 'unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Nama, Email, Alamat, Id_kabupaten_kota, Id_jenis_pekerjaan, Id_bidang_pekerjaan, Id_tujuan, Nama_instansi, User_name, Password, Flag_register, Id_simpul, Tanggal_entry, User_entry', 'safe', 'on'=>'search'),
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
			'Kota'=>array(self::BELONGS_TO,'Kota','Id_kabupaten_kota'),
			'Tujuan'=>array(self::BELONGS_TO,'Tujuanregister','Id_tujuan'),
			'Bidang'=>array(self::BELONGS_TO,'Bidangpekerjaan','Id_bidang_pekerjaan'),
			'Jenis'=>array(self::BELONGS_TO,'Jenispekerjaan','Id_jenis_pekerjaan'),
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
			'Email' => 'Email',
			'Alamat' => 'Alamat',
			'Id_kabupaten_kota' => 'Kabupaten / Kota',
			'Id_jenis_pekerjaan' => 'Jenis Pekerjaan',
			'Id_bidang_pekerjaan' => 'Bidang Pekerjaan',
			'Id_tujuan' => 'Tujuan Registrasi',
			'Nama_instansi' => 'Nama Instansi',
			'User_name' => 'Username',
			'Password' => 'Password',
			'Flag_register' => 'Flag Register',
			'Id_simpul' => 'Id Simpul',
			'Tanggal_entry' => 'Tanggal Entry',
			'User_entry' => 'User Entry',
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
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Alamat',$this->Alamat,true);
		$criteria->compare('Id_kabupaten_kota',$this->Id_kabupaten_kota);
		$criteria->compare('Id_jenis_pekerjaan',$this->Id_jenis_pekerjaan);
		$criteria->compare('Id_bidang_pekerjaan',$this->Id_bidang_pekerjaan);
		$criteria->compare('Id_tujuan',$this->Id_tujuan);
		$criteria->compare('Nama_instansi',$this->Nama_instansi,true);
		$criteria->compare('User_name',$this->User_name,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Flag_register',$this->Flag_register,true);
		$criteria->compare('Id_simpul',$this->Id_simpul);
		$criteria->compare('Tanggal_entry',$this->Tanggal_entry,true);
		$criteria->compare('User_entry',$this->User_entry,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pengguna the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
