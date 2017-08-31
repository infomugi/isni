<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'pengguna-form',
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
					<?php echo $form->labelEx($model,'Nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'Nama'); ?>
					<?php echo $form->textField($model,'Nama',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'Email'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'Email'); ?>
					<?php echo $form->textField($model,'Email',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'Alamat'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'Alamat'); ?>
					<?php echo $form->textField($model,'Alamat',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'Id_kabupaten_kota'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'Id_kabupaten_kota'); ?>
					<?php 
					echo $form->dropDownList($model, "Id_kabupaten_kota",
						CHtml::listData(Kota::model()->findAll(),
							'kode_kota', 'nama'
							),
						array("empty"=>"-- Kota --", 'class'=>'select2 form-control')
						); 
						?> 
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'Id_jenis_pekerjaan'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'Id_jenis_pekerjaan'); ?>
						<?php 
						echo $form->dropDownList($model, "Id_jenis_pekerjaan",
							CHtml::listData(Jenispekerjaan::model()->findAll(),
								'Id', 'JenisPekerjaan'
								),
							array("empty"=>"-- Jenis Pekerjaan --", 'class'=>'select2 form-control')
							); 
							?> 
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'Id_bidang_pekerjaan'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'Id_bidang_pekerjaan'); ?>
							<?php 
							echo $form->dropDownList($model, "Id_bidang_pekerjaan",
								CHtml::listData(Bidangpekerjaan::model()->findAll(),
									'Id', 'BidangPekerjaan'
									),
								array("empty"=>"-- Bidang Pekerjaan --", 'class'=>'select2 form-control')
								); 
								?> 
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'Id_tujuan'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'Id_tujuan'); ?>
								<?php 
								echo $form->dropDownList($model, "Id_tujuan",
									CHtml::listData(Tujuanregister::model()->findAll(),
										'Id', 'Tujuan'
										),
									array("empty"=>"-- Bidang Pekerjaan --", 'class'=>'select2 form-control')
									); 
									?> 
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'Nama_instansi'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'Nama_instansi'); ?>
									<?php echo $form->textField($model,'Nama_instansi',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'User_name'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'User_name'); ?>
									<?php echo $form->textField($model,'User_name',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'Password'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'Password'); ?>
									<?php echo $form->passwordField($model,'Password',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'Flag_register'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'Flag_register'); ?>
									<?php echo $form->textField($model,'Flag_register',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'Id_simpul'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'Id_simpul'); ?>
									<?php echo $form->textField($model,'Id_simpul',array('class'=>'form-control')); ?>
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