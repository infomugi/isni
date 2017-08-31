<?php

/**
 * This is the model class for table "m_standar".
 *
 * The followings are the available columns in table 'm_standar':
 * @property string $NO_ID
 * @property string $NO_NSPM
 * @property string $JUDUL1
 * @property string $TH_PENYUSUNAN
 * @property string $KD_GUGUS
 * @property string $KD_DANA
 * @property string $KD_BIDANG
 * @property string $KD_LIST_KATEGORI
 * @property string $KD_JENIS_STANDAR
 * @property string $KD_PADANAN
 * @property string $TGL_USUL
 * @property string $TGL_RSNI1
 * @property string $TGL_RSNI2
 * @property string $TGL_RSNI3
 * @property string $TGL_RSNI4
 * @property string $NO_KEPBSN
 * @property string $TG_KEPBSN
 * @property string $KD_STATUS_STANDAR
 * @property string $kd_jenisstatus
 * @property string $KD_STATUS_NSPM
 * @property string $RUANG1
 * @property string $NO_RSNI
 * @property string $NO_NSPM_REV
 * @property string $BERLAKU
 * @property string $TGL_PANTEK
 * @property string $LOG_REVISI
 * @property string $TGL_SAVE
 * @property string $TGL_UPDATE
 * @property string $USER_ID
 * @property string $KD_SUBPATEK
 * @property string $KD_PATEK
 * @property string $KD_UNIT
 * @property string $LP_perencanAan
 * @property string $LP_desain
 * @property string $LP_kontruksi
 * @property string $lp_om
 * @property string $tgl_bsn
 * @property string $tgl_usulbsn
 * @property string $jmlhal
 * @property string $tgl_input
 * @property string $no_revisi
 * @property string $status_rev
 * @property string $NO_ICS
 * @property string $statusws
 * @property string $statustek
 * @property string $d_acuan
 * @property string $d_pendamping
 * @property string $d_terkait
 * @property string $kd_statuspaten
 * @property string $no_paten
 * @property string $tgl_pengajuan
 * @property string $jangka_waktu
 * @property string $tahap_usulan
 * @property string $status_pnps
 * @property string $tahap_konsep
 * @property string $tahap_rpt_teknis1
 * @property string $tahap_rpt_teknis2
 * @property string $tahap_rpt_konsensus
 * @property string $tahap_rpt_pantek
 * @property string $tahap_usulan_menteri
 * @property string $tahap_usulan_bsn
 * @property string $tahap_jajak_pendapat
 * @property string $tahap_ebaloting
 * @property string $revisi_dari_spm
 * @property string $tgl_konsep
 * @property string $tgl_rpt_teknis1
 * @property string $tgl_rpt_teknis2
 * @property string $tgl_rpt_konsensus
 * @property string $tgl_rpt_pantek
 * @property string $tgl_usulan_thp_menteri
 * @property string $tgl_usulan_thp_bsn
 * @property string $tgl_jajak_pendapat
 * @property string $tgl_ebaloting
 * @property string $thn_penetapan_rsni
 * @property string $no_kepmen_rsni
 * @property string $kd_kat_standar_konsep
 * @property string $no_nspm_konsep
 * @property string $ket_jajak_pendapat
 * @property string $no_sk_abolisi
 * @property string $konseptor
 * @property string $regulasi
 * @property string $kesepakatan_regional
 * @property string $kebutuhan_pasar
 * @property string $pertimbangan_lain
 * @property integer $strata_penggunaan_sni
 * @property string $penelitian
 * @property string $std_non_internasional
 * @property string $tgl_usulan_menteri
 * @property string $ket_ebaloting
 * @property string $d_ics
 * @property string $d_sni_revisi
 * @property string $d_stdacuan
 * @property string $d_bibliografi
 * @property string $file_isi
 * @property string $file_ringkasan
 */
class Standar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_standar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//Validation Image
			array('file_isi', 'required', 'on'=>'uploadisi'),
			array('file_ringkasan', 'required', 'on'=>'uploadringkasan'),

			array('NO_ID, NO_NSPM','unique'),
			array('NO_ID, NO_NSPM, JUDUL1, KD_DANA','required'),
			array('strata_penggunaan_sni', 'numerical', 'integerOnly'=>true),
			array('NO_ID', 'length', 'max'=>6),
			array('NO_NSPM, NO_RSNI, NO_NSPM_REV, USER_ID', 'length', 'max'=>25),
			array('JUDUL1, RUANG1, d_acuan, d_pendamping, d_terkait, ket_jajak_pendapat, ket_ebaloting, d_ics, d_sni_revisi, d_stdacuan, d_bibliografi', 'length', 'max'=>255),
			array('TH_PENYUSUNAN, TGL_USUL, TG_KEPBSN, thn_penetapan_rsni', 'length', 'max'=>4),
			array('KD_GUGUS, KD_DANA, KD_BIDANG, KD_LIST_KATEGORI, KD_JENIS_STANDAR, KD_PADANAN, KD_STATUS_STANDAR, kd_jenisstatus, KD_STATUS_NSPM, KD_SUBPATEK, KD_PATEK, KD_UNIT, std_non_internasional', 'length', 'max'=>5),
			array('NO_KEPBSN, LOG_REVISI, no_revisi, NO_ICS, no_paten, status_pnps, tahap_rpt_pantek, tahap_usulan_menteri, revisi_dari_spm, tgl_konsep, tgl_rpt_teknis1, tgl_rpt_teknis2, tgl_rpt_konsensus, tgl_rpt_pantek, tgl_usulan_thp_menteri, tgl_usulan_thp_bsn, tgl_jajak_pendapat, tgl_ebaloting, no_kepmen_rsni, kd_kat_standar_konsep, no_nspm_konsep, no_sk_abolisi, pertimbangan_lain, file_isi, file_ringkasan', 'length', 'max'=>50),
			array('BERLAKU, kd_statuspaten', 'length', 'max'=>2),
			array('LP_perencanAan, LP_desain, LP_kontruksi, lp_om, status_rev, statusws, jangka_waktu, tahap_usulan, tahap_konsep, tahap_rpt_teknis1, tahap_rpt_teknis2, tahap_rpt_konsensus, tahap_usulan_bsn, tahap_jajak_pendapat, tahap_ebaloting', 'length', 'max'=>1),
			array('jmlhal', 'length', 'max'=>10),
			array('statustek, konseptor, regulasi, kesepakatan_regional, kebutuhan_pasar, tgl_usulan_menteri', 'length', 'max'=>100),
			array('penelitian', 'length', 'max'=>200),
			array('TGL_RSNI1, TGL_RSNI2, TGL_RSNI3, TGL_RSNI4, TGL_PANTEK, TGL_SAVE, TGL_UPDATE, tgl_bsn, tgl_usulbsn, tgl_input, tgl_pengajuan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NO_ID, NO_NSPM, JUDUL1, TH_PENYUSUNAN, KD_GUGUS, KD_DANA, KD_BIDANG, KD_LIST_KATEGORI, KD_JENIS_STANDAR, KD_PADANAN, TGL_USUL, TGL_RSNI1, TGL_RSNI2, TGL_RSNI3, TGL_RSNI4, NO_KEPBSN, TG_KEPBSN, KD_STATUS_STANDAR, kd_jenisstatus, KD_STATUS_NSPM, RUANG1, NO_RSNI, NO_NSPM_REV, BERLAKU, TGL_PANTEK, LOG_REVISI, TGL_SAVE, TGL_UPDATE, USER_ID, KD_SUBPATEK, KD_PATEK, KD_UNIT, LP_perencanAan, LP_desain, LP_kontruksi, lp_om, tgl_bsn, tgl_usulbsn, jmlhal, tgl_input, no_revisi, status_rev, NO_ICS, statusws, statustek, d_acuan, d_pendamping, d_terkait, kd_statuspaten, no_paten, tgl_pengajuan, jangka_waktu, tahap_usulan, status_pnps, tahap_konsep, tahap_rpt_teknis1, tahap_rpt_teknis2, tahap_rpt_konsensus, tahap_rpt_pantek, tahap_usulan_menteri, tahap_usulan_bsn, tahap_jajak_pendapat, tahap_ebaloting, revisi_dari_spm, tgl_konsep, tgl_rpt_teknis1, tgl_rpt_teknis2, tgl_rpt_konsensus, tgl_rpt_pantek, tgl_usulan_thp_menteri, tgl_usulan_thp_bsn, tgl_jajak_pendapat, tgl_ebaloting, thn_penetapan_rsni, no_kepmen_rsni, kd_kat_standar_konsep, no_nspm_konsep, ket_jajak_pendapat, no_sk_abolisi, konseptor, regulasi, kesepakatan_regional, kebutuhan_pasar, pertimbangan_lain, strata_penggunaan_sni, penelitian, std_non_internasional, tgl_usulan_menteri, ket_ebaloting, d_ics, d_sni_revisi, d_stdacuan, d_bibliografi, file_isi, file_ringkasan', 'safe', 'on'=>'search'),
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
			'Gugus'=>array(self::BELONGS_TO,'Gugus','KD_GUGUS'),
			'Dana'=>array(self::BELONGS_TO,'Dana','KD_DANA'),
			'Bidang'=>array(self::BELONGS_TO,'Bidang','KD_BIDANG'),
			'SubBidang'=>array(self::BELONGS_TO,'SubBidang','KD_LIST_KATEGORI'),
			'JenisStandar'=>array(self::BELONGS_TO,'JenisStandar','KD_JENIS_STANDAR'),
			'Padanan'=>array(self::BELONGS_TO,'Padanan','KD_PADANAN'),
			'StatusStandar'=>array(self::BELONGS_TO,'Statusstandar','KD_STATUS_STANDAR'),
			'JenisStatus'=>array(self::BELONGS_TO,'JenisStatus','kd_jenisstatus'),
			'JenisStandarKonsep'=>array(self::BELONGS_TO,'StatusStandar','kd_kat_standar_konsep'),
			'SubPatek'=>array(self::BELONGS_TO,'Subpatek','KD_SUBPATEK'),
			'Patek'=>array(self::BELONGS_TO,'Patek','KD_PATEK'),
			'Unit'=>array(self::BELONGS_TO,'Unit','KD_UNIT'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NO_ID' => 'No',
			'NO_NSPM' => 'No NSPM',
			'JUDUL1' => 'Judul',
			'TH_PENYUSUNAN' => 'Th Penyusunan',
			'KD_GUGUS' => 'Kode Gugus',
			'KD_DANA' => 'Kode Dana',
			'KD_BIDANG' => 'Kode Bidang',
			'KD_LIST_KATEGORI' => 'Kode List Kategori',
			'KD_JENIS_STANDAR' => 'Kode Jenis Standar',
			'KD_PADANAN' => 'Kode Padanan',
			'TGL_USUL' => 'Tanggal Usul',
			'TGL_RSNI1' => 'Tanggal RSNI 1',
			'TGL_RSNI2' => 'Tanggal RSNI 2',
			'TGL_RSNI3' => 'Tanggal RSNI 3',
			'TGL_RSNI4' => 'Tanggal RSNI 4',
			'NO_KEPBSN' => 'No KEPBSN',
			'TG_KEPBSN' => 'Tanggal KEPBSN',
			'KD_STATUS_STANDAR' => 'Kode Status Standar',
			'kd_jenisstatus' => 'Kode Jenis Status',
			'KD_STATUS_NSPM' => 'Kode Status NSPM',
			'RUANG1' => 'Ruang',
			'NO_RSNI' => 'No RSNI',
			'NO_NSPM_REV' => 'No NSPM Rev',
			'BERLAKU' => 'Berlaku',
			'TGL_PANTEK' => 'Tanggal Pantek',
			'LOG_REVISI' => 'Log Revisi',
			'TGL_SAVE' => 'Tanggal Save',
			'TGL_UPDATE' => 'Tanggal Update',
			'USER_ID' => 'User',
			'KD_SUBPATEK' => 'Kode Subpatek',
			'KD_PATEK' => 'Kode Patek',
			'KD_UNIT' => 'Kode Unit',
			'LP_perencanAan' => 'Lingkup Penerapan Perencanaan',
			'LP_desain' => 'Lingkup Penerapan Desain',
			'LP_kontruksi' => 'Lingkup Penerapan Kontruksi',
			'lp_om' => 'Lingkup Penerapan Om',
			'tgl_bsn' => 'Tanggal BSN',
			'tgl_usulbsn' => 'Tanggal Usul BSN',
			'jmlhal' => 'Jumlah Halaman',
			'tgl_input' => 'Tanggal Input',
			'no_revisi' => 'No Revisi',
			'status_rev' => 'Status Rev',
			'NO_ICS' => 'No ICS',
			'statusws' => 'Status Hukum',
			'statustek' => 'Statustek',
			'd_acuan' => 'Acuan Normatif',
			'd_pendamping' => 'D Pendamping',
			'd_terkait' => 'D Terkait',
			'kd_statuspaten' => 'Kode Statuspaten',
			'no_paten' => 'No Paten',
			'tgl_pengajuan' => 'Tanggal Pengajuan',
			'jangka_waktu' => 'Jangka Waktu',
			'tahap_usulan' => 'Tahap Usulan',
			'status_pnps' => 'Status Pnps',
			'tahap_konsep' => 'Tahap Konsep',
			'tahap_rpt_teknis1' => 'Tahap Rapat Teknis 1',
			'tahap_rpt_teknis2' => 'Tahap Rapat Teknis 2',
			'tahap_rpt_konsensus' => 'Tahap Rapat Konsensus',
			'tahap_rpt_pantek' => 'Tahap Rapat Pantek',
			'tahap_usulan_menteri' => 'Tahap Usulan Menteri',
			'tahap_usulan_bsn' => 'Tahap Usulan BSN',
			'tahap_jajak_pendapat' => 'Tahap Jajak Pendapat',
			'tahap_ebaloting' => 'Tahap Ebaloting',
			'revisi_dari_spm' => 'Revisi Dari SPM',
			'tgl_konsep' => 'Tanggal Konsep',
			'tgl_rpt_teknis1' => 'Tanggal Rapat Teknis1',
			'tgl_rpt_teknis2' => 'Tanggal Rapat Teknis2',
			'tgl_rpt_konsensus' => 'Tanggal Rapat Konsensus',
			'tgl_rpt_pantek' => 'Tanggal Rapat Pantek',
			'tgl_usulan_thp_menteri' => 'Tanggal Usulan Tahapan Menteri',
			'tgl_usulan_thp_bsn' => 'Tanggal Usulan Tahapan BSN',
			'tgl_jajak_pendapat' => 'Tanggal Jajak Pendapat',
			'tgl_ebaloting' => 'Tanggal Ebaloting',
			'thn_penetapan_rsni' => 'Tahun Penetapan RSNI',
			'no_kepmen_rsni' => 'No Kepmen RSNI',
			'kd_kat_standar_konsep' => 'Kode Kat Standar Konsep',
			'no_nspm_konsep' => 'No Nspm Konsep',
			'ket_jajak_pendapat' => 'Ket Jajak Pendapat',
			'no_sk_abolisi' => 'No SK Abolisi',
			'konseptor' => 'Konseptor',
			'regulasi' => 'Regulasi',
			'kesepakatan_regional' => 'Kesepakatan Regional',
			'kebutuhan_pasar' => 'Kebutuhan Pasar',
			'pertimbangan_lain' => 'Pertimbangan Lain',
			'strata_penggunaan_sni' => 'Strata Penggunaan SNI',
			'penelitian' => 'Penelitian',
			'std_non_internasional' => 'Std Non Internasional',
			'tgl_usulan_menteri' => 'Tanggal Usulan Menteri',
			'ket_ebaloting' => 'Ket Ebaloting',
			'd_ics' => 'D ICS',
			'd_sni_revisi' => 'D SNI Revisi',
			'd_stdacuan' => 'D Stdacuan',
			'd_bibliografi' => 'D Bibliografi',
			'file_isi' => 'File Isi',
			'file_ringkasan' => 'File Ringkasan',
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

		$criteria->compare('NO_ID',$this->NO_ID,true);
		$criteria->compare('NO_NSPM',$this->NO_NSPM,true);
		$criteria->compare('JUDUL1',$this->JUDUL1,true);
		$criteria->compare('TH_PENYUSUNAN',$this->TH_PENYUSUNAN,true);
		$criteria->compare('KD_GUGUS',$this->KD_GUGUS,true);
		$criteria->compare('KD_DANA',$this->KD_DANA,true);
		$criteria->compare('KD_BIDANG',$this->KD_BIDANG,true);
		$criteria->compare('KD_LIST_KATEGORI',$this->KD_LIST_KATEGORI,true);
		$criteria->compare('KD_JENIS_STANDAR',$this->KD_JENIS_STANDAR,true);
		$criteria->compare('KD_PADANAN',$this->KD_PADANAN,true);
		$criteria->compare('TGL_USUL',$this->TGL_USUL,true);
		$criteria->compare('TGL_RSNI1',$this->TGL_RSNI1,true);
		$criteria->compare('TGL_RSNI2',$this->TGL_RSNI2,true);
		$criteria->compare('TGL_RSNI3',$this->TGL_RSNI3,true);
		$criteria->compare('TGL_RSNI4',$this->TGL_RSNI4,true);
		$criteria->compare('NO_KEPBSN',$this->NO_KEPBSN,true);
		$criteria->compare('TG_KEPBSN',$this->TG_KEPBSN,true);
		$criteria->compare('KD_STATUS_STANDAR',$this->KD_STATUS_STANDAR,true);
		$criteria->compare('kd_jenisstatus',$this->kd_jenisstatus,true);
		$criteria->compare('KD_STATUS_NSPM',$this->KD_STATUS_NSPM,true);
		$criteria->compare('RUANG1',$this->RUANG1,true);
		$criteria->compare('NO_RSNI',$this->NO_RSNI,true);
		$criteria->compare('NO_NSPM_REV',$this->NO_NSPM_REV,true);
		$criteria->compare('BERLAKU',$this->BERLAKU,true);
		$criteria->compare('TGL_PANTEK',$this->TGL_PANTEK,true);
		$criteria->compare('LOG_REVISI',$this->LOG_REVISI,true);
		$criteria->compare('TGL_SAVE',$this->TGL_SAVE,true);
		$criteria->compare('TGL_UPDATE',$this->TGL_UPDATE,true);
		$criteria->compare('USER_ID',$this->USER_ID,true);
		$criteria->compare('KD_SUBPATEK',$this->KD_SUBPATEK,true);
		$criteria->compare('KD_PATEK',$this->KD_PATEK,true);
		$criteria->compare('KD_UNIT',$this->KD_UNIT,true);
		$criteria->compare('LP_perencanAan',$this->LP_perencanAan,true);
		$criteria->compare('LP_desain',$this->LP_desain,true);
		$criteria->compare('LP_kontruksi',$this->LP_kontruksi,true);
		$criteria->compare('lp_om',$this->lp_om,true);
		$criteria->compare('tgl_bsn',$this->tgl_bsn,true);
		$criteria->compare('tgl_usulbsn',$this->tgl_usulbsn,true);
		$criteria->compare('jmlhal',$this->jmlhal,true);
		$criteria->compare('tgl_input',$this->tgl_input,true);
		$criteria->compare('no_revisi',$this->no_revisi,true);
		$criteria->compare('status_rev',$this->status_rev,true);
		$criteria->compare('NO_ICS',$this->NO_ICS,true);
		$criteria->compare('statusws',$this->statusws,true);
		$criteria->compare('statustek',$this->statustek,true);
		$criteria->compare('d_acuan',$this->d_acuan,true);
		$criteria->compare('d_pendamping',$this->d_pendamping,true);
		$criteria->compare('d_terkait',$this->d_terkait,true);
		$criteria->compare('kd_statuspaten',$this->kd_statuspaten,true);
		$criteria->compare('no_paten',$this->no_paten,true);
		$criteria->compare('tgl_pengajuan',$this->tgl_pengajuan,true);
		$criteria->compare('jangka_waktu',$this->jangka_waktu,true);
		$criteria->compare('tahap_usulan',$this->tahap_usulan,true);
		$criteria->compare('status_pnps',$this->status_pnps,true);
		$criteria->compare('tahap_konsep',$this->tahap_konsep,true);
		$criteria->compare('tahap_rpt_teknis1',$this->tahap_rpt_teknis1,true);
		$criteria->compare('tahap_rpt_teknis2',$this->tahap_rpt_teknis2,true);
		$criteria->compare('tahap_rpt_konsensus',$this->tahap_rpt_konsensus,true);
		$criteria->compare('tahap_rpt_pantek',$this->tahap_rpt_pantek,true);
		$criteria->compare('tahap_usulan_menteri',$this->tahap_usulan_menteri,true);
		$criteria->compare('tahap_usulan_bsn',$this->tahap_usulan_bsn,true);
		$criteria->compare('tahap_jajak_pendapat',$this->tahap_jajak_pendapat,true);
		$criteria->compare('tahap_ebaloting',$this->tahap_ebaloting,true);
		$criteria->compare('revisi_dari_spm',$this->revisi_dari_spm,true);
		$criteria->compare('tgl_konsep',$this->tgl_konsep,true);
		$criteria->compare('tgl_rpt_teknis1',$this->tgl_rpt_teknis1,true);
		$criteria->compare('tgl_rpt_teknis2',$this->tgl_rpt_teknis2,true);
		$criteria->compare('tgl_rpt_konsensus',$this->tgl_rpt_konsensus,true);
		$criteria->compare('tgl_rpt_pantek',$this->tgl_rpt_pantek,true);
		$criteria->compare('tgl_usulan_thp_menteri',$this->tgl_usulan_thp_menteri,true);
		$criteria->compare('tgl_usulan_thp_bsn',$this->tgl_usulan_thp_bsn,true);
		$criteria->compare('tgl_jajak_pendapat',$this->tgl_jajak_pendapat,true);
		$criteria->compare('tgl_ebaloting',$this->tgl_ebaloting,true);
		$criteria->compare('thn_penetapan_rsni',$this->thn_penetapan_rsni,true);
		$criteria->compare('no_kepmen_rsni',$this->no_kepmen_rsni,true);
		$criteria->compare('kd_kat_standar_konsep',$this->kd_kat_standar_konsep,true);
		$criteria->compare('no_nspm_konsep',$this->no_nspm_konsep,true);
		$criteria->compare('ket_jajak_pendapat',$this->ket_jajak_pendapat,true);
		$criteria->compare('no_sk_abolisi',$this->no_sk_abolisi,true);
		$criteria->compare('konseptor',$this->konseptor,true);
		$criteria->compare('regulasi',$this->regulasi,true);
		$criteria->compare('kesepakatan_regional',$this->kesepakatan_regional,true);
		$criteria->compare('kebutuhan_pasar',$this->kebutuhan_pasar,true);
		$criteria->compare('pertimbangan_lain',$this->pertimbangan_lain,true);
		$criteria->compare('strata_penggunaan_sni',$this->strata_penggunaan_sni);
		$criteria->compare('penelitian',$this->penelitian,true);
		$criteria->compare('std_non_internasional',$this->std_non_internasional,true);
		$criteria->compare('tgl_usulan_menteri',$this->tgl_usulan_menteri,true);
		$criteria->compare('ket_ebaloting',$this->ket_ebaloting,true);
		$criteria->compare('d_ics',$this->d_ics,true);
		$criteria->compare('d_sni_revisi',$this->d_sni_revisi,true);
		$criteria->compare('d_stdacuan',$this->d_stdacuan,true);
		$criteria->compare('d_bibliografi',$this->d_bibliografi,true);
		$criteria->compare('file_isi',$this->file_isi,true);
		$criteria->compare('file_ringkasan',$this->file_ringkasan,true);
		$criteria->order = "NO_ID ASC";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Standar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getRandom(){
		$sql = "SELECT NO_ID, JUDUL1 as judul, NO_NSPM as no_nspm  FROM m_standar ORDER BY RAND() DESC LIMIT 4";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}	

	public static function getSNI(){
		$sql = "select * from (select distinct m_standar.no_id, m_standar.no_nspm, m_standar.judul1, m_standar.ruang1, m_standar.kd_gugus, tbgugus.nm_gugus, m_standar.kd_patek, tbpatek.nm_patek, m_standar.kd_subpatek, tbsubpatek.nm_subpatek, m_standar.kd_unit, tbunit.nm_unit, m_standar.kd_dana, tbdana.nm_dana, m_standar.kd_list_kategori, tb_list_kategori.nm_list_kategori1, m_standar.kd_jenis_standar, tbjenis_standar.nm_jenis_standar1, m_standar.kd_padanan, tb_padanan.no_padanan, m_standar.tgl_usul, m_standar.tgl_rsni1, m_standar.tgl_rsni2, m_standar.tgl_rsni3, m_standar.tgl_rsni4, m_standar.no_kepbsn, m_standar.tg_kepbsn, m_standar.kd_status_standar, tb_status_standar1.nm_kategori1, m_standar.kd_status_nspm, tbstatus.nm_status, m_standar.kd_jenisstatus, tbjenisstatus.nm_jenisstatus, m_standar.berlaku, m_standar.tgl_pantek, m_standar.log_revisi, m_standar.tgl_save, m_standar.tgl_update, m_standar.user_id, m_standar.judul1 + ' - ' + m_standar.ruang1 as textcari, m_standar.lp_perencanaan, m_standar.lp_desain, m_standar.lp_kontruksi, m_standar.lp_om, m_standar.tgl_usulbsn, m_standar.tgl_bsn, m_standar.jmlhal, m_standar.no_nspm_rev, m_standar.no_revisi, m_standar.status_rev, m_standar.no_ics, v_ics_tampil.nama_subsubics, m_standar.statusws, m_standar.statustek, m_standar.d_acuan, m_standar.d_pendamping, tb_padanan.deskripsi as deskripsi_padanan, m_standar.d_terkait, m_standar.tahap_usulan, m_standar.tahap_konsep, m_standar.tahap_rpt_teknis1, m_standar.tahap_rpt_teknis2, m_standar.tahap_rpt_konsensus, m_standar.tahap_rpt_pantek, m_standar.tahap_usulan_menteri, m_standar.tahap_usulan_bsn, m_standar.tahap_jajak_pendapat, m_standar.tahap_ebaloting, m_standar.jangka_waktu, m_standar.tgl_konsep, m_standar.tgl_rpt_teknis1, m_standar.tgl_rpt_teknis2, m_standar.tgl_rpt_konsensus, m_standar.tgl_rpt_pantek, m_standar.tgl_usulan_thp_menteri, m_standar.tgl_usulan_thp_bsn, m_standar.tgl_jajak_pendapat, m_standar.tgl_ebaloting, m_standar.revisi_dari_spm, tb_list_kategori.kd_bidang, mst_bidang.nm_bidang, m_standar.thn_penetapan_rsni, m_standar.no_kepmen_rsni, m_standar.kd_kat_standar_konsep, m_standar.no_nspm_konsep, v_ics_tampil.kd_ics, v_ics_tampil.kd_subics, tb_status_standar_2.nm_kategori1 as nm_kat_status_standar, case when (m_standar.no_nspm is not null and m_standar.no_nspm <> '') then m_standar.no_nspm else m_standar.no_nspm_konsep end as no_nspm_gab, case when (m_standar.kd_status_standar is not null and m_standar.kd_status_standar <> '') then m_standar.kd_status_standar else case when m_standar.thn_penetapan_rsni is not null and m_standar.thn_penetapan_rsni <> '' then m_standar.kd_kat_standar_konsep else '10'end end as kd_status_standar_gab, case when (tb_status_standar1.nm_kategori1 is not null and tb_status_standar1.nm_kategori1 <> '') then tb_status_standar1.nm_kategori1 else tb_status_standar_2.nm_kategori1 end as nm_status_standar_gab, m_standar_1.judul1 as judul_spm_revisi, m_standar.d_ics, m_standar.d_sni_revisi, m_standar.d_stdacuan, m_standar.d_bibliografi, m_standar.regulasi, m_standar.konseptor, m_standar.kesepakatan_regional, m_standar.kebutuhan_pasar, m_standar.pertimbangan_lain, m_standar.penelitian, m_standar.tgl_usulan_menteri, m_standar.ket_jajak_pendapat, m_standar.ket_ebaloting, m_standar.no_sk_abolisi, m_standar.strata_penggunaan_sni, m_standar.std_non_internasional, m_standar.file_isi, m_standar.file_ringkasan from m_standar as m_standar left outer join (select revisi_dari_spm, judul1, no_nspm from m_standar as m_standar_2 where (no_nspm <> '') ) as m_standar_1 on m_standar.revisi_dari_spm = m_standar_1.no_nspm left outer join (select kd_kategori, nm_kategori1 from tb_status_standar ) as tb_status_standar_2 on m_standar.kd_kat_standar_konsep = tb_status_standar_2.kd_kategori left outer join (select kd_subsub_ics, nama_subsubics, kd_ics, kd_subics from v_ics_tampil ) as v_ics_tampil on m_standar.no_ics = v_ics_tampil.kd_subsub_ics left outer join (select kd_gugus, nm_gugus from tbgugus ) as tbgugus on m_standar.kd_gugus = tbgugus.kd_gugus left outer join (select kd_patek, nm_patek from tbpatek ) as tbpatek on m_standar.kd_patek = tbpatek.kd_patek left outer join (select kd_subpatek, nm_subpatek from tbsubpatek ) as tbsubpatek on m_standar.kd_subpatek = tbsubpatek.kd_subpatek left outer join (select kd_unit, nm_unit from tbunit ) as tbunit on m_standar.kd_unit = tbunit.kd_unit left outer join (select kd_dana, nm_dana from tbdana ) as tbdana on m_standar.kd_dana = tbdana.kd_dana left outer join (select kd_jenis_standar, nm_jenis_standar1 from tbjenis_standar ) as tbjenis_standar on m_standar.kd_jenis_standar = tbjenis_standar.kd_jenis_standar left outer join (select kd_padanan, no_padanan, deskripsi from tb_padanan ) as tb_padanan on m_standar.kd_padanan = tb_padanan.kd_padanan left outer join (select kd_kategori, nm_kategori1 from tb_status_standar ) as tb_status_standar1 on tb_status_standar1.kd_kategori = m_standar.kd_status_standar left outer join (select kd_status, nm_status from tbstatus ) as tbstatus on m_standar.kd_status_nspm = tbstatus.kd_status left outer join (select kd_jenisstatus, nm_jenisstatus from tbjenisstatus ) as tbjenisstatus on m_standar.kd_jenisstatus = tbjenisstatus.kd_jenisstatus left outer join (select kd_bidang, nm_bidang from mst_bidang ) as mst_bidang inner join (select kd_list_kategori, nm_list_kategori1, kd_bidang from tb_list_kategori ) as tb_list_kategori on mst_bidang.kd_bidang = tb_list_kategori.kd_bidang on m_standar.kd_list_kategori = tb_list_kategori.kd_list_kategori ) as v_standar where kd_status_standar_gab in ('01', '02', '03')";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}	


	public function getYearsList() {
		$currentYear = date('Y');
		$yearFrom = 1970;
		$yearsRange = range($yearFrom, $currentYear);
		return array_combine($yearsRange, $yearsRange);
	}


	public function getStatusHukum() {
		return array(
			''=>'-- Pilih Status Hukum',
			'W'=>'Wajib',
			'S'=>'Sukarela',
			);
	}		


}
