<?php

/**
 * This is the model class for table "bidang".
 *
 * The followings are the available columns in table 'bidang':
 * @property string $kd_bidang
 * @property string $nm_bidang
 */
class Bidang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mst_bidang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_bidang, nm_bidang', 'required'),
			array('kd_bidang', 'unique'),
			array('kd_bidang', 'length', 'max'=>2),
			array('nm_bidang', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kd_bidang, nm_bidang', 'safe', 'on'=>'search'),
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
			'kd_bidang' => 'Kode Bidang',
			'nm_bidang' => 'Nama Bidang',
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

		$criteria->compare('kd_bidang',$this->kd_bidang,true);
		$criteria->compare('nm_bidang',$this->nm_bidang,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MstBidang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getBidang(){
		$sql = "SELECT * FROM mst_bidang";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}	

	public static function getTotalBidang($id){
		$data = Yii::app()->db->createCommand('
			SELECT
			COUNT(tb_list_kategori.kd_bidang)
			FROM
			m_standar
			LEFT JOIN tb_list_kategori ON m_standar.KD_LIST_KATEGORI = tb_list_kategori.KD_LIST_KATEGORI
			WHERE
			tb_list_kategori.kd_bidang='.$id);            
		return $result = $data->queryScalar();            
	}		

	public static function getTotal($id){
		$data = Yii::app()->db->createCommand('SELECT COUNT(KD_LIST_KATEGORI) FROM m_standar WHERE KD_LIST_KATEGORI='.$id);            
		return $result = $data->queryScalar();            
	}	


	public static function getReportBidang($id){
		$sql = "SELECT
		COUNT(tb_list_kategori.kd_bidang) AS Total_SNI,
		(
		SELECT
		COUNT(m_standar.KD_LIST_KATEGORI)
		FROM
		m_standar
		LEFT JOIN tb_list_kategori ON m_standar.KD_LIST_KATEGORI = tb_list_kategori.KD_LIST_KATEGORI
		WHERE
		tb_list_kategori.kd_bidang = ".$id."
		AND m_standar.KD_LIST_KATEGORI = 01
		) AS Total_Metode,
		(
		SELECT
		COUNT(m_standar.KD_LIST_KATEGORI)
		FROM
		m_standar
		LEFT JOIN tb_list_kategori ON m_standar.KD_LIST_KATEGORI = tb_list_kategori.KD_LIST_KATEGORI
		WHERE
		tb_list_kategori.kd_bidang = ".$id."
		AND m_standar.KD_LIST_KATEGORI = 02
		) AS Total_Spesifikasi,
		(
		SELECT
		COUNT(m_standar.KD_LIST_KATEGORI)
		FROM
		m_standar
		LEFT JOIN tb_list_kategori ON m_standar.KD_LIST_KATEGORI = tb_list_kategori.KD_LIST_KATEGORI
		WHERE
		tb_list_kategori.kd_bidang = ".$id."
		AND m_standar.KD_LIST_KATEGORI = 03
		) AS Total_Tata_Cara
		FROM
		m_standar
		LEFT JOIN tb_list_kategori ON m_standar.KD_LIST_KATEGORI = tb_list_kategori.KD_LIST_KATEGORI
		WHERE
		tb_list_kategori.kd_bidang = ".$id."";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}

	public static function getReportBidangDetail($bidang){
		$sql = "SELECT
		nm_bidang AS bidang,
		no_nspm,
		judul1,
		nm_list_kategori1 AS kategori,
		nm_jenis_standar1 AS jenis_standar,
		nm_jenisstatus AS jenis_status,
		nm_kategori1 AS jenis_sni,
		nm_patek as panitia_teknis,
		nm_subpatek as sub_panitia_teknis,
		nm_dana as dana
		FROM
		(
		SELECT DISTINCT
		m_standar.no_id,
		m_standar.no_nspm,
		m_standar.judul1,
		m_standar.ruang1,
		m_standar.kd_gugus,
		tbgugus.nm_gugus,
		m_standar.kd_patek,
		tbpatek.nm_patek,
		m_standar.kd_subpatek,
		tbsubpatek.nm_subpatek,
		m_standar.kd_unit,
		tbunit.nm_unit,
		m_standar.kd_dana,
		tbdana.nm_dana,
		m_standar.kd_list_kategori,
		tb_list_kategori.nm_list_kategori1,
		m_standar.kd_jenis_standar,
		tbjenis_standar.nm_jenis_standar1,
		m_standar.kd_padanan,
		tb_padanan.no_padanan,
		m_standar.tgl_usul,
		m_standar.tgl_rsni1,
		m_standar.tgl_rsni2,
		m_standar.tgl_rsni3,
		m_standar.tgl_rsni4,
		m_standar.no_kepbsn,
		m_standar.tg_kepbsn,
		m_standar.kd_status_standar,
		tb_status_standar1.nm_kategori1,
		m_standar.kd_status_nspm,
		tbstatus.nm_status,
		m_standar.kd_jenisstatus,
		tbjenisstatus.nm_jenisstatus,
		m_standar.berlaku,
		m_standar.tgl_pantek,
		m_standar.log_revisi,
		m_standar.tgl_save,
		m_standar.tgl_update,
		m_standar.user_id,
		m_standar.judul1 + ' - ' + m_standar.ruang1 AS textcari,
		m_standar.lp_perencanaan,
		m_standar.lp_desain,
		m_standar.lp_kontruksi,
		m_standar.lp_om,
		m_standar.tgl_usulbsn,
		m_standar.tgl_bsn,
		m_standar.jmlhal,
		m_standar.no_nspm_rev,
		m_standar.no_revisi,
		m_standar.status_rev,
		m_standar.no_ics,
		v_ics_tampil.nama_subsubics,
		m_standar.statusws,
		m_standar.statustek,
		m_standar.d_acuan,
		m_standar.d_pendamping,
		tb_padanan.deskripsi AS deskripsi_padanan,
		m_standar.d_terkait,
		m_standar.tahap_usulan,
		m_standar.tahap_konsep,
		m_standar.tahap_rpt_teknis1,
		m_standar.tahap_rpt_teknis2,
		m_standar.tahap_rpt_konsensus,
		m_standar.tahap_rpt_pantek,
		m_standar.tahap_usulan_menteri,
		m_standar.tahap_usulan_bsn,
		m_standar.tahap_jajak_pendapat,
		m_standar.tahap_ebaloting,
		m_standar.jangka_waktu,
		m_standar.tgl_konsep,
		m_standar.tgl_rpt_teknis1,
		m_standar.tgl_rpt_teknis2,
		m_standar.tgl_rpt_konsensus,
		m_standar.tgl_rpt_pantek,
		m_standar.tgl_usulan_thp_menteri,
		m_standar.tgl_usulan_thp_bsn,
		m_standar.tgl_jajak_pendapat,
		m_standar.tgl_ebaloting,
		m_standar.revisi_dari_spm,
		tb_list_kategori.kd_bidang,
		mst_bidang.nm_bidang,
		m_standar.thn_penetapan_rsni,
		m_standar.no_kepmen_rsni,
		m_standar.kd_kat_standar_konsep,
		m_standar.no_nspm_konsep,
		v_ics_tampil.kd_ics,
		v_ics_tampil.kd_subics,
		tb_status_standar_2.nm_kategori1 AS nm_kat_status_standar,
		CASE
		WHEN (
		m_standar.no_nspm IS NOT NULL
		AND m_standar.no_nspm <> ''
		) THEN
		m_standar.no_nspm
		ELSE
		m_standar.no_nspm_konsep
		END AS no_nspm_gab,
		CASE
		WHEN (
		m_standar.kd_status_standar IS NOT NULL
		AND m_standar.kd_status_standar <> ''
		) THEN
		m_standar.kd_status_standar
		ELSE
		CASE
		WHEN m_standar.thn_penetapan_rsni IS NOT NULL
		AND m_standar.thn_penetapan_rsni <> '' THEN
		m_standar.kd_kat_standar_konsep
		ELSE
		'10'
		END
		END AS kd_status_standar_gab,
		CASE
		WHEN (
		tb_status_standar1.nm_kategori1 IS NOT NULL
		AND tb_status_standar1.nm_kategori1 <> ''
		) THEN
		tb_status_standar1.nm_kategori1
		ELSE
		tb_status_standar_2.nm_kategori1
		END AS nm_status_standar_gab,
		m_standar_1.judul1 AS judul_spm_revisi,
		m_standar.d_ics,
		m_standar.d_sni_revisi,
		m_standar.d_stdacuan,
		m_standar.d_bibliografi,
		m_standar.regulasi,
		m_standar.konseptor,
		m_standar.kesepakatan_regional,
		m_standar.kebutuhan_pasar,
		m_standar.pertimbangan_lain,
		m_standar.penelitian,
		m_standar.tgl_usulan_menteri,
		m_standar.ket_jajak_pendapat,
		m_standar.ket_ebaloting,
		m_standar.no_sk_abolisi,
		m_standar.strata_penggunaan_sni,
		m_standar.std_non_internasional,
		m_standar.file_isi,
		m_standar.file_ringkasan
		FROM
		m_standar AS m_standar
		LEFT OUTER JOIN (
		SELECT
		revisi_dari_spm,
		judul1,
		no_nspm
		FROM
		m_standar AS m_standar_2
		WHERE
		(no_nspm <> '')
		) AS m_standar_1 ON m_standar.revisi_dari_spm = m_standar_1.no_nspm
		LEFT OUTER JOIN (
		SELECT
		kd_kategori,
		nm_kategori1
		FROM
		tb_status_standar
		) AS tb_status_standar_2 ON m_standar.kd_kat_standar_konsep = tb_status_standar_2.kd_kategori
		LEFT OUTER JOIN (
		SELECT
		kd_subsub_ics,
		nama_subsubics,
		kd_ics,
		kd_subics
		FROM
		v_ics_tampil
		) AS v_ics_tampil ON m_standar.no_ics = v_ics_tampil.kd_subsub_ics
		LEFT OUTER JOIN (
		SELECT
		kd_gugus,
		nm_gugus
		FROM
		tbgugus
		) AS tbgugus ON m_standar.kd_gugus = tbgugus.kd_gugus
		LEFT OUTER JOIN (
		SELECT
		kd_patek,
		nm_patek
		FROM
		tbpatek
		) AS tbpatek ON m_standar.kd_patek = tbpatek.kd_patek
		LEFT OUTER JOIN (
		SELECT
		kd_subpatek,
		nm_subpatek
		FROM
		tbsubpatek
		) AS tbsubpatek ON m_standar.kd_subpatek = tbsubpatek.kd_subpatek
		LEFT OUTER JOIN (
		SELECT
		kd_unit,
		nm_unit
		FROM
		tbunit
		) AS tbunit ON m_standar.kd_unit = tbunit.kd_unit
		LEFT OUTER JOIN (
		SELECT
		kd_dana,
		nm_dana
		FROM
		tbdana
		) AS tbdana ON m_standar.kd_dana = tbdana.kd_dana
		LEFT OUTER JOIN (
		SELECT
		kd_jenis_standar,
		nm_jenis_standar1
		FROM
		tbjenis_standar
		) AS tbjenis_standar ON m_standar.kd_jenis_standar = tbjenis_standar.kd_jenis_standar
		LEFT OUTER JOIN (
		SELECT
		kd_padanan,
		no_padanan,
		deskripsi
		FROM
		tb_padanan
		) AS tb_padanan ON m_standar.kd_padanan = tb_padanan.kd_padanan
		LEFT OUTER JOIN (
		SELECT
		kd_kategori,
		nm_kategori1
		FROM
		tb_status_standar
		) AS tb_status_standar1 ON tb_status_standar1.kd_kategori = m_standar.kd_status_standar
		LEFT OUTER JOIN (
		SELECT
		kd_status,
		nm_status
		FROM
		tbstatus
		) AS tbstatus ON m_standar.kd_status_nspm = tbstatus.kd_status
		LEFT OUTER JOIN (
		SELECT
		kd_jenisstatus,
		nm_jenisstatus
		FROM
		tbjenisstatus
	) AS tbjenisstatus ON m_standar.kd_jenisstatus = tbjenisstatus.kd_jenisstatus
	LEFT OUTER JOIN (
	SELECT
	kd_bidang,
	nm_bidang
	FROM
	mst_bidang
) AS mst_bidang
INNER JOIN (
SELECT
kd_list_kategori,
nm_list_kategori1,
kd_bidang
FROM
tb_list_kategori
) AS tb_list_kategori ON mst_bidang.kd_bidang = tb_list_kategori.kd_bidang ON m_standar.kd_list_kategori = tb_list_kategori.kd_list_kategori
) AS v_standar
WHERE
kd_status_standar_gab IN ('01', '02', '03')
AND kd_bidang = ".$bidang."";
$command = YII::app()->db->createCommand($sql);
return $command->queryAll();
}


}
