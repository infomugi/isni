<?php

/**
 * This is the model class for table "komentar".
 *
 * The followings are the available columns in table 'komentar':
 * @property integer $id_komentar
 * @property string $tanggal_komentar
 * @property integer $pengguna_id
 * @property integer $standar_id
 * @property string $deskripsi
 * @property string $tanggal_jawab
 * @property integer $admin_id
 * @property string $jawaban
 * @property integer $status
 * @property integer $like
 * @property integer $unlike
 */
class Komentar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'komentar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_komentar, pengguna_id, standar_id, deskripsi', 'required'),
			array('pengguna_id, standar_id, admin_id, status, like, unlike', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_komentar, tanggal_komentar, pengguna_id, standar_id, deskripsi, tanggal_jawab, admin_id, jawaban, status, like, unlike', 'safe', 'on'=>'search'),
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
			'Pengguna'=>array(self::BELONGS_TO,'Pengguna','pengguna_id'),
			'Standar'=>array(self::BELONGS_TO,'Standar','standar_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_komentar' => 'Id Komentar',
			'tanggal_komentar' => 'Tanggal Komentar',
			'pengguna_id' => 'Pengguna',
			'standar_id' => 'Standar',
			'deskripsi' => 'Komentar',
			'tanggal_jawab' => 'Tanggal Jawab',
			'admin_id' => 'Admin',
			'jawaban' => 'Jawaban',
			'status' => 'Status',
			'like' => 'Like',
			'unlike' => 'Unlike',
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

		$criteria->compare('id_komentar',$this->id_komentar);
		$criteria->compare('tanggal_komentar',$this->tanggal_komentar,true);
		$criteria->compare('pengguna_id',$this->pengguna_id);
		$criteria->compare('standar_id',$this->standar_id);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('tanggal_jawab',$this->tanggal_jawab,true);
		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('jawaban',$this->jawaban,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('like',$this->like);
		$criteria->compare('unlike',$this->unlike);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Komentar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
