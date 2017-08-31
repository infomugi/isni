<?php

/**
 * This is the model class for table "tm_penerapan_sni".
 *
 * The followings are the available columns in table 'tm_penerapan_sni':
 * @property integer $id
 * @property string $no_nspm
 * @property integer $id_inspeksi_teknis
 * @property integer $id_regulasi_teknis
 * @property string $advis_teknis
 * @property string $spesifikasi_produk
 * @property integer $id_provinsi
 * @property integer $id_lab
 * @property string $instansi_pengguna
 * @property string $konsultan
 * @property string $lokasi_proyek
 * @property string $nama_proyek
 * @property string $ruas_jalan
 * @property string $kab_kota
 * @property double $biaya_perencanaan
 * @property integer $tahun_anggaran
 */
class Penerapan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tm_penerapan_sni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_nspm, id_inspeksi_teknis, id_regulasi_teknis, id_provinsi, id_lab', 'required'),
			array('id_inspeksi_teknis, id_regulasi_teknis, id_provinsi, id_lab, tahun_anggaran', 'numerical', 'integerOnly'=>true),
			array('biaya_perencanaan', 'numerical'),
			array('no_nspm', 'length', 'max'=>6),
			array('advis_teknis, spesifikasi_produk, lokasi_proyek, nama_proyek, ruas_jalan', 'length', 'max'=>500),
			array('instansi_pengguna, konsultan', 'length', 'max'=>250),
			array('kab_kota', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, no_nspm, id_inspeksi_teknis, id_regulasi_teknis, advis_teknis, spesifikasi_produk, id_provinsi, id_lab, instansi_pengguna, konsultan, lokasi_proyek, nama_proyek, ruas_jalan, kab_kota, biaya_perencanaan, tahun_anggaran', 'safe', 'on'=>'search'),
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
			'Standar'=>array(self::BELONGS_TO,'Standar','no_nspm'),
			'InspeksiTeknis'=>array(self::BELONGS_TO,'Inspeksiteknis','id_inspeksi_teknis'),
			'RegulasiTeknis'=>array(self::BELONGS_TO,'Regulasiteknis','id_regulasi_teknis'),
			'Provinsi'=>array(self::BELONGS_TO,'Provinsi','id_provinsi'),
			'LabPenerapan'=>array(self::BELONGS_TO,'LabPenerapan','id_lab'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'no_nspm' => 'No Nspm',
			'id_inspeksi_teknis' => 'Inspeksi Teknis',
			'id_regulasi_teknis' => 'Regulasi Teknis',
			'advis_teknis' => 'Advis Teknis',
			'spesifikasi_produk' => 'Spesifikasi Produk',
			'id_provinsi' => 'Provinsi',
			'id_lab' => 'Lab',
			'instansi_pengguna' => 'Instansi Pengguna',
			'konsultan' => 'Konsultan',
			'lokasi_proyek' => 'Lokasi Proyek',
			'nama_proyek' => 'Nama Proyek',
			'ruas_jalan' => 'Ruas Jalan',
			'kab_kota' => 'Kab Kota',
			'biaya_perencanaan' => 'Biaya Perencanaan',
			'tahun_anggaran' => 'Tahun Anggaran',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('no_nspm',$this->no_nspm,true);
		$criteria->compare('id_inspeksi_teknis',$this->id_inspeksi_teknis);
		$criteria->compare('id_regulasi_teknis',$this->id_regulasi_teknis);
		$criteria->compare('advis_teknis',$this->advis_teknis,true);
		$criteria->compare('spesifikasi_produk',$this->spesifikasi_produk,true);
		$criteria->compare('id_provinsi',$this->id_provinsi);
		$criteria->compare('id_lab',$this->id_lab);
		$criteria->compare('instansi_pengguna',$this->instansi_pengguna,true);
		$criteria->compare('konsultan',$this->konsultan,true);
		$criteria->compare('lokasi_proyek',$this->lokasi_proyek,true);
		$criteria->compare('nama_proyek',$this->nama_proyek,true);
		$criteria->compare('ruas_jalan',$this->ruas_jalan,true);
		$criteria->compare('kab_kota',$this->kab_kota,true);
		$criteria->compare('biaya_perencanaan',$this->biaya_perencanaan);
		$criteria->compare('tahun_anggaran',$this->tahun_anggaran);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PenerapanSni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
