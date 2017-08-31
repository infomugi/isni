<?php
/* @var $this SniController */
/* @var $model Sni */
/* @var $form CActiveForm */
?>

<div class="form-normal form-horizontal clearfix">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'sni-form',
		'enableAjaxValidation'=>false,
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit' => true,
			),
		'errorMessageCssClass' => 'label label-danger',
		'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
		)); ?>

		<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>


		<section class="panel panel-color">
			<div class="panel-heading">Data SPM
				<small class="pull-right">
					<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
				</small>
			</div>
			<div class="panel-body">


				<div class="form-group">
					<div class="col-lg-10 col-xs-12">  
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'no_nspm'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'no_nspm'); ?>
							<?php echo $form->textField($model,'no_nspm',array('class'=>'form-control')); ?>
						</div>
					</div>
				</div>  


				<div class="form-group">
					<div class="col-lg-10 col-xs-12">  
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'kd_bidang'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'kd_bidang'); ?>
							<?php 
							echo $form->dropDownList($model, "kd_bidang",
								CHtml::listData(Bidang::model()->findAll(),
									'kd_bidang', 'nm_bidang'
									),
								array("empty"=>"-- Pilih Bidang --", 'class'=>'select2 form-control')
								); 
								?> 
							</div>
						</div>
					</div>  


					<div class="form-group">
						<div class="col-lg-10 col-xs-12">  
							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'kd_subbidang'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'kd_subbidang'); ?>
								<?php 
								echo $form->dropDownList($model, "kd_subbidang",
									CHtml::listData(Subbidang::model()->findAll(),
										'KD_LIST_KATEGORI', 'NM_LIST_KATEGORI1'
										),
									array("empty"=>"-- Pilih Sub Bidang --", 'class'=>'select2 form-control')
									); 
									?> 
								</div>
							</div>
						</div>  


						<div class="form-group">
							<div class="col-lg-10 col-xs-12">  
								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'kd_jenisstandar'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'kd_jenisstandar'); ?>
									<?php 
									echo $form->dropDownList($model, "kd_jenisstandar",
										CHtml::listData(Jenisstandar::model()->findAll(),
											'KD_JENIS_STANDAR', 'NM_JENIS_STANDAR1'
											),
										array("empty"=>"-- Pilih Jenis Standar --", 'class'=>'select2 form-control')
										); 
										?> 
									</div>
								</div>
							</div>  


							<div class="form-group">
								<div class="col-lg-10 col-xs-12">  
									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'tahun'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'tahun'); ?>
										<?php echo $form->dropDownList($model, 'tahun', $model->getYearsList(), array('class'=>'form-control select2')); ?>
									</div>
								</div>
							</div>  


							<div class="form-group">
								<div class="col-lg-10 col-xs-12">  
									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'judul'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'judul'); ?>
										<?php echo $form->textField($model,'judul',array('class'=>'form-control')); ?>
									</div>
								</div>
							</div>  


							<div class="form-group">
								<div class="col-lg-10 col-xs-12">  
									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'ruanglingkup'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'ruanglingkup'); ?>
										<?php echo $form->textArea($model,'ruanglingkup',array('class'=>'form-control')); ?>
									</div>
								</div>
							</div>  


							<div class="form-group">
								<div class="col-lg-10 col-xs-12">  
									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'jumlah_hal'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'jumlah_hal'); ?>
										<?php echo $form->textField($model,'jumlah_hal',array('class'=>'form-control')); ?>
									</div>
								</div>
							</div>  

						</div>
					</section>

					<section class="panel panel-color">
						<div class="panel-heading">Detail Dokumen
							<small class="pull-right">
								<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
							</small>
						</div>
						<div class="panel-body">


							<div class="form-group">
								<div class="col-lg-10 col-xs-12">  
									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'kd_ics'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'kd_ics'); ?>
										<?php 
										echo $form->dropDownList($model, "kd_ics",
											CHtml::listData(Bidang::model()->findAll(),
												'kd_bidang', 'nm_bidang'
												),
											array("empty"=>"-- Pilih ICS --", 'class'=>'select2 form-control')
											); 
											?> 
										</div>
									</div>
								</div>  


								<div class="form-group">
									<div class="col-lg-10 col-xs-12">  
										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'kd_padanan'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'kd_padanan'); ?>
											<?php 
											echo $form->dropDownList($model, "kd_padanan",
												CHtml::listData(Padanan::model()->findAll(),
													'KD_PADANAN', 'NO_PADANAN'
													),
												array("empty"=>"-- Pilih Padanan --", 'class'=>'select2 form-control')
												); 
												?> 
											</div>
										</div>
									</div>  


									<div class="form-group">
										<div class="col-lg-10 col-xs-12">  
											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'kd_pemrakarsa'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'kd_pemrakarsa'); ?>
												<?php 
												echo $form->dropDownList($model, "kd_pemrakarsa",
													CHtml::listData(Pemrakarsa::model()->findAll(),
														'KD_DANA', 'NM_DANA'
														),
													array("empty"=>"-- Pilih Pemrakarsa --", 'class'=>'select2 form-control')
													); 
													?> 
												</div>
											</div>
										</div>  


										<div class="form-group">
											<div class="col-lg-10 col-xs-12">  
												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'kd_konseptor'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'kd_konseptor'); ?>
													<?php echo $form->textField($model,'kd_konseptor',array('class'=>'form-control')); ?>
												</div>
											</div>
										</div>  


										<div class="form-group">
											<div class="col-lg-10 col-xs-12">  
												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'no_ics'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'no_ics'); ?>
													<?php echo $form->textField($model,'no_ics',array('class'=>'form-control')); ?>
												</div>
											</div>
										</div>  


										<div class="form-group">
											<div class="col-lg-10 col-xs-12">  
												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'padanan'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'padanan'); ?>
													<?php echo $form->textField($model,'padanan',array('class'=>'form-control')); ?>
												</div>
											</div>
										</div>  


										<div class="form-group">
											<div class="col-lg-10 col-xs-12">  
												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'pemrakarsa'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'pemrakarsa'); ?>
													<?php echo $form->textField($model,'pemrakarsa',array('class'=>'form-control')); ?>
												</div>
											</div>
										</div>  


										<div class="form-group">
											<div class="col-lg-10 col-xs-12">  
												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'konseptor'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'konseptor'); ?>
													<?php echo $form->textField($model,'konseptor',array('class'=>'form-control')); ?>
												</div>
											</div>
										</div>  

									</div>
								</section>

								<div class="form-group">
									<div class="col-xs-12">  
										<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
									</div>
								</div>

								<?php $this->endWidget(); ?>

</div><!-- form -->