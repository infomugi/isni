<?php

/**
 * This is the model class for table "m_standar_new".
 *
 * The followings are the available columns in table 'm_standar_new':
 * @property integer $id_standar
 * @property string $no_nspm
 * @property integer $kd_bidang
 * @property integer $kd_subbidang
 * @property integer $kd_jenisstandar
 * @property string $tahun
 * @property string $judul
 * @property string $ruanglingkup
 * @property integer $jumlah_hal
 * @property integer $kd_ics
 * @property integer $kd_padanan
 * @property integer $kd_pemrakarsa
 * @property integer $kd_konseptor
 * @property string $file_isi
 * @property string $file_ringkasan
 * @property integer $image
 * @property integer $views
 * @property integer $download
 * @property string $no_ics
 * @property string $padanan
 * @property string $pemrakarsa
 * @property string $konseptor
 * @property integer $status
 * @property integer $user_id
 * @property string $tanggal_buat
 * @property string $tanggal_update
 * @property string $tanggal_lihat
 * @property string $no_sk
 * @property string $kd_statusstandar
 * @property integer $status_isi
 * @property integer $status_ringkasan 
 */
class Sni extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_standar_new';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_nspm', 'unique'),
			array('no_nspm, kd_bidang, kd_subbidang, kd_jenisstandar, tahun, judul, ruanglingkup, jumlah_hal, kd_ics, kd_padanan, kd_pemrakarsa, kd_konseptor, kd_statusstandar', 'required','on'=>'create'),
			array('file_isi', 'required','on'=>'uploadisi'),
			array('file_ringkasan', 'required','on'=>'uploadringkasan'),
			array('image', 'required','on'=>'uploadcover'),
			array('jumlah_hal, kd_ics, kd_padanan, kd_pemrakarsa, kd_konseptor, views, download, status_isi, status_ringkasan', 'numerical', 'integerOnly'=>true),
			array('no_nspm, pemrakarsa, no_sk', 'length', 'max'=>100),
			array('tahun, kd_bidang, kd_subbidang, kd_jenisstandar,', 'length', 'max'=>5),
			array('judul, file_isi, file_ringkasan, konseptor, image', 'length', 'max'=>255),
			array('no_ics, padanan', 'length', 'max'=>50),
			array('image', 'file', 'types'=>'jpg, gif, png','allowEmpty'=> false,'safe'=>true,'on'=>'uploadcover'),
			array('file_isi', 'file', 'types'=>'doc, docx, pdf','allowEmpty'=> false,'safe'=>true,'on'=>'uploadisi', 'maxSize'=>1024 * 1024 * 50, 'tooLarge'=>'Maksimal Ukuran File tidak Lebih dari 50 MB'),
			array('file_ringkasan', 'file', 'types'=>'doc, docx, pdf','allowEmpty'=> false,'safe'=>true,'on'=>'uploadringkasan', 'maxSize'=>1024 * 1024 * 50, 'tooLarge'=>'Maksimal Ukuran File tidak Lebih dari 50 MB'),
			array('tanggal_buat, tanggal_update, tanggal_lihat', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_standar, no_nspm, kd_bidang, kd_subbidang, kd_jenisstandar, tahun, judul, ruanglingkup, jumlah_hal, kd_ics, kd_padanan, kd_pemrakarsa, kd_konseptor, file_isi, file_ringkasan, image, views, download, no_ics, padanan, pemrakarsa, konseptor, tanggal_buat, tanggal_update, tanggal_lihat, kd_statusstandar, no_sk, status_isi, status_ringkasan', 'safe', 'on'=>'search'),
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
			'Bidang'=>array(self::BELONGS_TO,'Bidang','kd_bidang'),
			'SubBidang'=>array(self::BELONGS_TO,'Subbidang','kd_subbidang'),
			'JenisStandar'=>array(self::BELONGS_TO,'Jenisstandar','kd_jenisstandar'),			
			'StatusStandar'=>array(self::BELONGS_TO,'Statusstandar','kd_statusstandar'),			
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_standar' => 'Id Standar',
			'no_nspm' => 'No NSPM',
			'kd_bidang' => 'Bidang',
			'kd_subbidang' => 'Sub Bidang',
			'kd_jenisstandar' => 'Jenis Standar',
			'tahun' => 'Tahun',
			'judul' => 'Judul',
			'ruanglingkup' => 'Ruang Lingkup',
			'jumlah_hal' => 'Jumlah Hal',
			'kd_ics' => 'Kd ICS',
			'kd_padanan' => 'Kd Padanan',
			'kd_pemrakarsa' => 'Kd Pemrakarsa',
			'kd_konseptor' => 'Kd Konseptor',
			'file_isi' => 'File Isi',
			'file_ringkasan' => 'File Ringkasan',
			'image' => 'Image',
			'views' => 'Views',
			'download' => 'Download',
			'no_ics' => 'No Ics',
			'padanan' => 'Padanan',
			'pemrakarsa' => 'Pemrakarsa',
			'konseptor' => 'Konseptor',
			'no_sk' => 'NO SK Menteri',
			'kd_statusstandar' => 'Status Standar',
			'status_isi' => 'Status File Isi',
			'status_ringkasan' => 'Status File Ringkasan',
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

		$criteria->compare('id_standar',$this->id_standar);
		$criteria->compare('no_nspm',$this->no_nspm,true);
		$criteria->compare('kd_bidang',$this->kd_bidang);
		$criteria->compare('kd_subbidang',$this->kd_subbidang);
		$criteria->compare('kd_jenisstandar',$this->kd_jenisstandar);
		$criteria->compare('tahun',$this->tahun,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('ruanglingkup',$this->ruanglingkup,true);
		$criteria->compare('jumlah_hal',$this->jumlah_hal);
		$criteria->compare('kd_ics',$this->kd_ics);
		$criteria->compare('kd_padanan',$this->kd_padanan);
		$criteria->compare('kd_pemrakarsa',$this->kd_pemrakarsa);
		$criteria->compare('kd_konseptor',$this->kd_konseptor);
		$criteria->compare('file_isi',$this->file_isi,true);
		$criteria->compare('file_ringkasan',$this->file_ringkasan,true);
		$criteria->compare('image',$this->image);
		$criteria->compare('views',$this->views);
		$criteria->compare('download',$this->download);
		$criteria->compare('no_ics',$this->no_ics,true);
		$criteria->compare('padanan',$this->padanan,true);
		$criteria->compare('pemrakarsa',$this->pemrakarsa,true);
		$criteria->compare('konseptor',$this->konseptor,true);
		$criteria->compare('no_sk',$this->no_sk,true);
		$criteria->compare('kd_statusstandar',$this->kd_statusstandar,true);
		$criteria->compare('status_isi',$this->status_isi,true);
		$criteria->compare('status_ringkasan',$this->status_ringkasan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function status($data){
	    if($data==1){
	        return "Fix";
	    }else{
	        return "-";
	    }
	}

	public function getYearsList() {
		$currentYear = date('Y');
		$yearFrom = 1970;
		$yearsRange = range($yearFrom, $currentYear);
		return array_combine($yearsRange, $yearsRange);
	}

	public static function getPopular(){
		$sql = "SELECT * FROM m_standar_new ORDER BY views DESC LIMIT 4";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}	

	public static function get_count_Status($id,$start,$end){
		$sql = "
		select count(id_standar) FROM m_standar_new WHERE kd_statusstandar=".$id." AND tahun between ".$start." and ".$end."
		"; $command = YII::app()->db->createCommand($sql);
		return $command->queryScalar();
	} 

	public static function get_count_Jenis($id,$start,$end){
		$sql = "
		select count(id_standar) FROM m_standar_new WHERE kd_jenisstandar=".$id." AND tahun between ".$start." and ".$end."
		"; $command = YII::app()->db->createCommand($sql);
		return $command->queryScalar();
	} 	
	
	public function Remove($data) {
		$HapusTitikDua = str_replace(':', '-', $data);
		$HapusSpasi = str_replace(' ', '', $HapusTitikDua);
		return $HapusSpasi;
	}	

}
