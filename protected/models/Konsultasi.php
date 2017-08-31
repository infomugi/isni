<?php

/**
 * This is the model class for table "konsultasi".
 *
 * The followings are the available columns in table 'konsultasi':
 * @property integer $id_konsultasi
 * @property string $tanggal_konsultasi
 * @property integer $pengguna_id
 * @property string $topik
 * @property string $judul
 * @property string $deskripsi
 * @property string $tanggal_jawab
 * @property integer $admin_id
 * @property string $jawaban
 * @property integer $status
 */
class Konsultasi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'konsultasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_konsultasi, pengguna_id, topik, judul, deskripsi, status', 'required'),
			array('pengguna_id, admin_id, status', 'numerical', 'integerOnly'=>true),
			array('topik', 'length', 'max'=>50),
			array('judul', 'length', 'max'=>150),
			array('jawaban', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_konsultasi, tanggal_konsultasi, pengguna_id, topik, judul, deskripsi, tanggal_jawab, admin_id, jawaban, status', 'safe', 'on'=>'search'),
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
			'Admin'=>array(self::BELONGS_TO,'User','admin_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_konsultasi' => 'Id Konsultasi',
			'tanggal_konsultasi' => 'Tanggal Konsultasi',
			'pengguna_id' => 'Pengguna',
			'topik' => 'Jenis Topik',
			'judul' => 'Topik Pertanyaan',
			'deskripsi' => 'Pertanyaan',
			'tanggal_jawab' => 'Tanggal Jawab',
			'admin_id' => 'Admin',
			'jawaban' => 'Jawaban',
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

		$criteria->compare('id_konsultasi',$this->id_konsultasi);
		$criteria->compare('tanggal_konsultasi',$this->tanggal_konsultasi,true);
		$criteria->compare('pengguna_id',$this->pengguna_id);
		$criteria->compare('topik',$this->topik,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('tanggal_jawab',$this->tanggal_jawab,true);
		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('jawaban',$this->jawaban,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Konsultasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function type($data){
		if($data==1){
			return "Standar SNI";
		}elseif($data==3){
			return "Pedoman Teknis";
		}else{
			return "Petunjuk Teknis";
		}
	}
}
