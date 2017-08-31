<?php

/**
 * This is the model class for table "tbf_webadmin_baru".
 *
 * The followings are the available columns in table 'tbf_webadmin_baru':
 * @property integer $id_user
 * @property string $user_name
 * @property string $pass
 * @property string $email
 * @property string $nama
 * @property string $alamat
 * @property string $no_telp
 * @property double $status
 */
class Administrator extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbf_webadmin_baru';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status', 'numerical'),
			array('user_name, no_telp', 'length', 'max'=>50),
			array('pass, email, nama', 'length', 'max'=>60),
			array('alamat', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, user_name, pass, email, nama, alamat, no_telp, status', 'safe', 'on'=>'search'),
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
			'id_user' => 'Id User',
			'user_name' => 'User Name',
			'pass' => 'Pass',
			'email' => 'Email',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'no_telp' => 'No Telp',
			'status' => 'Status',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_telp',$this->no_telp,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Administrator the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
