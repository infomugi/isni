<?php
/* @var $this Penerapan SNIController */
/* @var $model Penerapan SNI */
/* @var $form CActiveForm */
?>


<?php 
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
 //Nama selector/id
	'id'=>'mydialog',
    // additional javascript options for the dialog plugin
	'options'=>array(
		'title'=>'Klik tanda + untuk memilih NSPM!',
		'autoOpen'=>false,
  		//Fokus atau modal diaktifkan
		'modal' => true,
		'show'=>array(
			'effect'=>'blind',
			'duration'=>300,
			),
		'hide'=>array(
			'effect'=>'blind',
			'duration'=>300,
			),
		'width' => 640, 
		'height' => 480
		),
		));?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pacjenci-grid',
	'dataProvider'=>$model2->search(),
	'filter'=>$model2,
	'itemsCssClass' => 'table-responsive table table-hover',
	'selectionChanged'=>'function(id){onSelectionChange()}',
	'columns'=>array(


		array(
			'name'=>'no_nspm',
			'filter'=> CHtml::activeTextField($model2, 'no_nspm', array('placeholder'=>'Cari NO NSPM')),
			),

		array(
			'name'=>'judul',
			'filter'=> CHtml::activeTextField($model2, 'judul', array('placeholder'=>'Cari Judul')),
			),		

		array(
			'header'=>'PILIH',
			'type'=>'raw',
			'value'=>'CHtml::Button("+", 
			array(
			"class" => "btn btn-info", 
			"id" => "$data->id_standar", 
			"onClick" => "
			$(\"#Penerapan_no_nspm\").val(\"". $data->id_standar."\");
			$(\"#Penerapan_nspm\").val(\"". $data->no_nspm."\");
			$(\"#Penerapan_judul\").val(\"". $data->judul."\");
			$(\"#Penerapan_ruanglingkup\").val(\"". $data->ruanglingkup."\");
			$(\"#Penerapan_bidang\").val(\"". $data->Bidang->nm_bidang."\");
			$(\"#Penerapan_subbidang\").val(\"". $data->SubBidang->NM_LIST_KATEGORI1."\");
			$(\"#mydialog\").dialog(\"close\");
			notie.alert({ type: \'success\', text: \'". $data->judul."\', time: 10 , position: \'top\'});
			"))',

			),
		),
		)); ?>


		<?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>

		<script type="text/javascript">
			notie.confirm({
				text: 'Leave the page?',
				submitCallback: () => this.location.href = 'https://google.com'
			})
			function onSelectionChange()
			{
				var keys = $("#pacjenci-grid > div.keys > span");
				$("#pacjenci-grid > table > tbody > tr").each(function(i)
				{
					if($(this).hasClass("selected"))
					{
						$("#get_link").click();
						$("#mydialog").dialog("close");
					}
				});
			}
		</script>

		<div class="form-normal form-horizontal clearfix">
			<div class="col-lg-10 col-md-11"> 

				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'penerapan-sni-form',
					'enableAjaxValidation'=>false,
					'enableClientValidation' => true,
					'clientOptions' => array(
						'validateOnSubmit' => true,
						),
					'errorMessageCssClass' => 'label label-danger',
					'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
					)); ?>

					<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'no_nspm'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'no_nspm'); ?>
							<?php echo $form->textField($model, 'no_nspm', array('readOnly'=>true, 'class'=>'form-control')); ?>
							<i class="text-info" id="nidn">Klik <a href="#" onclick=$("#mydialog").dialog("open"); return false;><code>ubah</code></a> untuk memilih NSPM.</i>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							NSPM
						</div>   

						<div class="col-sm-8">
							<textarea type="text" class="form-control" id="Penerapan_nspm" readonly="true">
							</textarea>
						</div>

					</div>  					


					<div class="form-group">

						<div class="col-sm-4 control-label">
							Judul
						</div>   

						<div class="col-sm-8">
							<textarea type="text" class="form-control" id="Penerapan_judul" readonly="true">
							</textarea>
						</div>

					</div>  

					<div class="form-group">

						<div class="col-sm-4 control-label">
							Ruang Lingkup
						</div>   

						<div class="col-sm-8">
							<textarea type="text" class="form-control" id="Penerapan_ruanglingkup" readonly="true">
							</textarea>
						</div>

					</div>  

 			<div class="form-group">

				<div class="col-sm-4 control-label">
					Bidang
				</div>   

				<div class="col-sm-8">
					<textarea type="text" class="form-control" id="Penerapan_bidang" readonly="true">
					</textarea>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					Sub Bidang
				</div>   

				<div class="col-sm-8">
					<textarea type="text" class="form-control" id="Penerapan_subbidang" readonly="true">
					</textarea>
				</div>

			</div> 															


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'id_inspeksi_teknis'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'id_inspeksi_teknis'); ?>
					<?php 
					echo $form->dropDownList($model, "id_inspeksi_teknis",
						CHtml::listData(Inspeksiteknis::model()->findAll(),
							'id', 'nm_inspeksi_teknis'
							),
						array("empty"=>"-- Pilih Inspeksi Teknis --", 'class'=>'select2 form-control')
						); 
						?> 
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'id_regulasi_teknis'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'id_regulasi_teknis'); ?>
						<?php 
						echo $form->dropDownList($model, "id_regulasi_teknis",
							CHtml::listData(Regulasiteknis::model()->findAll(),
								'id', 'nm_regulasi_teknis'
								),
							array("empty"=>"-- Pilih Regulasi Teknis --", 'class'=>'select2 form-control')
							); 
							?> 
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'advis_teknis'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'advis_teknis'); ?>
							<?php echo $form->textField($model,'advis_teknis',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'spesifikasi_produk'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'spesifikasi_produk'); ?>
							<?php echo $form->textField($model,'spesifikasi_produk',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'id_provinsi'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'id_provinsi'); ?>
							<?php 
							echo $form->dropDownList($model, "id_provinsi",
								CHtml::listData(Provinsi::model()->findAll(),
									'kode', 'nama'
									),
								array("empty"=>"-- Pilih Provinsi --", 'class'=>'select2 form-control')
								); 
								?> 
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'id_lab'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'id_lab'); ?>
								<?php 
								echo $form->dropDownList($model, "id_lab",
									CHtml::listData(LabPenerapan::model()->findAll(),
										'id', 'nm_lab_penerapan'
										),
									array("empty"=>"-- Pilih Lab Penerapan --", 'class'=>'select2 form-control')
									); 
									?> 
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'instansi_pengguna'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'instansi_pengguna'); ?>
									<?php echo $form->textField($model,'instansi_pengguna',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'konsultan'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'konsultan'); ?>
									<?php echo $form->textField($model,'konsultan',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'lokasi_proyek'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'lokasi_proyek'); ?>
									<?php echo $form->textField($model,'lokasi_proyek',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'nama_proyek'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'nama_proyek'); ?>
									<?php echo $form->textField($model,'nama_proyek',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'ruas_jalan'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'ruas_jalan'); ?>
									<?php echo $form->textField($model,'ruas_jalan',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'kab_kota'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'kab_kota'); ?>
									<?php echo $form->textField($model,'kab_kota',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'biaya_perencanaan'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'biaya_perencanaan'); ?>
									<?php echo $form->textField($model,'biaya_perencanaan',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'tahun_anggaran'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'tahun_anggaran'); ?>
									<?php echo $form->textField($model,'tahun_anggaran',array('class'=>'form-control')); ?>
								</div>

							</div>  

							<div class="form-group">
								<div class="col-md-12">  
								</br></br>
								<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
							</div>
						</div>

						<?php $this->endWidget(); ?>

</div></div><!-- form -->