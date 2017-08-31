<?php
/* @var $this StandarController */
/* @var $model Standar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NO_ID'); ?>
		<?php echo $form->textField($model,'NO_ID',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_NSPM'); ?>
		<?php echo $form->textField($model,'NO_NSPM',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUDUL1'); ?>
		<?php echo $form->textField($model,'JUDUL1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TH_PENYUSUNAN'); ?>
		<?php echo $form->textField($model,'TH_PENYUSUNAN',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_GUGUS'); ?>
		<?php echo $form->textField($model,'KD_GUGUS',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_DANA'); ?>
		<?php echo $form->textField($model,'KD_DANA',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_BIDANG'); ?>
		<?php echo $form->textField($model,'KD_BIDANG',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_LIST_KATEGORI'); ?>
		<?php echo $form->textField($model,'KD_LIST_KATEGORI',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_JENIS_STANDAR'); ?>
		<?php echo $form->textField($model,'KD_JENIS_STANDAR',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_PADANAN'); ?>
		<?php echo $form->textField($model,'KD_PADANAN',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_USUL'); ?>
		<?php echo $form->textField($model,'TGL_USUL',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_RSNI1'); ?>
		<?php echo $form->textField($model,'TGL_RSNI1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_RSNI2'); ?>
		<?php echo $form->textField($model,'TGL_RSNI2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_RSNI3'); ?>
		<?php echo $form->textField($model,'TGL_RSNI3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_RSNI4'); ?>
		<?php echo $form->textField($model,'TGL_RSNI4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_KEPBSN'); ?>
		<?php echo $form->textField($model,'NO_KEPBSN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TG_KEPBSN'); ?>
		<?php echo $form->textField($model,'TG_KEPBSN',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_STATUS_STANDAR'); ?>
		<?php echo $form->textField($model,'KD_STATUS_STANDAR',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_jenisstatus'); ?>
		<?php echo $form->textField($model,'kd_jenisstatus',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_STATUS_NSPM'); ?>
		<?php echo $form->textField($model,'KD_STATUS_NSPM',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUANG1'); ?>
		<?php echo $form->textField($model,'RUANG1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_RSNI'); ?>
		<?php echo $form->textField($model,'NO_RSNI',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_NSPM_REV'); ?>
		<?php echo $form->textField($model,'NO_NSPM_REV',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BERLAKU'); ?>
		<?php echo $form->textField($model,'BERLAKU',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_PANTEK'); ?>
		<?php echo $form->textField($model,'TGL_PANTEK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LOG_REVISI'); ?>
		<?php echo $form->textField($model,'LOG_REVISI',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_SAVE'); ?>
		<?php echo $form->textField($model,'TGL_SAVE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_UPDATE'); ?>
		<?php echo $form->textField($model,'TGL_UPDATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_SUBPATEK'); ?>
		<?php echo $form->textField($model,'KD_SUBPATEK',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_PATEK'); ?>
		<?php echo $form->textField($model,'KD_PATEK',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_UNIT'); ?>
		<?php echo $form->textField($model,'KD_UNIT',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LP_perencanAan'); ?>
		<?php echo $form->textField($model,'LP_perencanAan',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LP_desain'); ?>
		<?php echo $form->textField($model,'LP_desain',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LP_kontruksi'); ?>
		<?php echo $form->textField($model,'LP_kontruksi',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lp_om'); ?>
		<?php echo $form->textField($model,'lp_om',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_bsn'); ?>
		<?php echo $form->textField($model,'tgl_bsn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_usulbsn'); ?>
		<?php echo $form->textField($model,'tgl_usulbsn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jmlhal'); ?>
		<?php echo $form->textField($model,'jmlhal',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_input'); ?>
		<?php echo $form->textField($model,'tgl_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_revisi'); ?>
		<?php echo $form->textField($model,'no_revisi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_rev'); ?>
		<?php echo $form->textField($model,'status_rev',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_ICS'); ?>
		<?php echo $form->textField($model,'NO_ICS',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusws'); ?>
		<?php echo $form->textField($model,'statusws',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statustek'); ?>
		<?php echo $form->textField($model,'statustek',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_acuan'); ?>
		<?php echo $form->textField($model,'d_acuan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_pendamping'); ?>
		<?php echo $form->textField($model,'d_pendamping',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_terkait'); ?>
		<?php echo $form->textField($model,'d_terkait',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_statuspaten'); ?>
		<?php echo $form->textField($model,'kd_statuspaten',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_paten'); ?>
		<?php echo $form->textField($model,'no_paten',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_pengajuan'); ?>
		<?php echo $form->textField($model,'tgl_pengajuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jangka_waktu'); ?>
		<?php echo $form->textField($model,'jangka_waktu',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_usulan'); ?>
		<?php echo $form->textField($model,'tahap_usulan',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_pnps'); ?>
		<?php echo $form->textField($model,'status_pnps',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_konsep'); ?>
		<?php echo $form->textField($model,'tahap_konsep',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_rpt_teknis1'); ?>
		<?php echo $form->textField($model,'tahap_rpt_teknis1',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_rpt_teknis2'); ?>
		<?php echo $form->textField($model,'tahap_rpt_teknis2',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_rpt_konsensus'); ?>
		<?php echo $form->textField($model,'tahap_rpt_konsensus',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_rpt_pantek'); ?>
		<?php echo $form->textField($model,'tahap_rpt_pantek',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_usulan_menteri'); ?>
		<?php echo $form->textField($model,'tahap_usulan_menteri',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_usulan_bsn'); ?>
		<?php echo $form->textField($model,'tahap_usulan_bsn',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_jajak_pendapat'); ?>
		<?php echo $form->textField($model,'tahap_jajak_pendapat',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahap_ebaloting'); ?>
		<?php echo $form->textField($model,'tahap_ebaloting',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'revisi_dari_spm'); ?>
		<?php echo $form->textField($model,'revisi_dari_spm',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_konsep'); ?>
		<?php echo $form->textField($model,'tgl_konsep',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_rpt_teknis1'); ?>
		<?php echo $form->textField($model,'tgl_rpt_teknis1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_rpt_teknis2'); ?>
		<?php echo $form->textField($model,'tgl_rpt_teknis2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_rpt_konsensus'); ?>
		<?php echo $form->textField($model,'tgl_rpt_konsensus',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_rpt_pantek'); ?>
		<?php echo $form->textField($model,'tgl_rpt_pantek',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_usulan_thp_menteri'); ?>
		<?php echo $form->textField($model,'tgl_usulan_thp_menteri',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_usulan_thp_bsn'); ?>
		<?php echo $form->textField($model,'tgl_usulan_thp_bsn',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_jajak_pendapat'); ?>
		<?php echo $form->textField($model,'tgl_jajak_pendapat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_ebaloting'); ?>
		<?php echo $form->textField($model,'tgl_ebaloting',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thn_penetapan_rsni'); ?>
		<?php echo $form->textField($model,'thn_penetapan_rsni',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_kepmen_rsni'); ?>
		<?php echo $form->textField($model,'no_kepmen_rsni',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_kat_standar_konsep'); ?>
		<?php echo $form->textField($model,'kd_kat_standar_konsep',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_nspm_konsep'); ?>
		<?php echo $form->textField($model,'no_nspm_konsep',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ket_jajak_pendapat'); ?>
		<?php echo $form->textField($model,'ket_jajak_pendapat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_sk_abolisi'); ?>
		<?php echo $form->textField($model,'no_sk_abolisi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'konseptor'); ?>
		<?php echo $form->textField($model,'konseptor',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regulasi'); ?>
		<?php echo $form->textField($model,'regulasi',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kesepakatan_regional'); ?>
		<?php echo $form->textField($model,'kesepakatan_regional',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kebutuhan_pasar'); ?>
		<?php echo $form->textField($model,'kebutuhan_pasar',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pertimbangan_lain'); ?>
		<?php echo $form->textField($model,'pertimbangan_lain',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'strata_penggunaan_sni'); ?>
		<?php echo $form->textField($model,'strata_penggunaan_sni'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penelitian'); ?>
		<?php echo $form->textField($model,'penelitian',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'std_non_internasional'); ?>
		<?php echo $form->textField($model,'std_non_internasional',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_usulan_menteri'); ?>
		<?php echo $form->textField($model,'tgl_usulan_menteri',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ket_ebaloting'); ?>
		<?php echo $form->textField($model,'ket_ebaloting',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_ics'); ?>
		<?php echo $form->textField($model,'d_ics',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_sni_revisi'); ?>
		<?php echo $form->textField($model,'d_sni_revisi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_stdacuan'); ?>
		<?php echo $form->textField($model,'d_stdacuan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_bibliografi'); ?>
		<?php echo $form->textField($model,'d_bibliografi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_isi'); ?>
		<?php echo $form->textField($model,'file_isi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_ringkasan'); ?>
		<?php echo $form->textField($model,'file_ringkasan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->