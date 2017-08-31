<?php
/* @var $this KuesionerController */
/* @var $model Kuesioner */
/* @var $form CActiveForm */
?>

<div class="alert alert-info" > 
	<b>SS</b>: Sangat Setuju, <b>S</b>: Setuju, <b>TS</b>: Tidak Setuju, <b>STS</b>: Sangat Tidak Setuju,  
</div>

<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-11 col-md-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'kuesioner-form',
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

				<div class="col-sm-8">
					<?php echo $form->labelEx($model,'soal_1'); ?>
				</div>   

				<div class="col-sm-4">
					<?php echo $form->error($model,'soal_1'); ?>
					<?php
					echo $form->radioButtonList($model,'soal_1',
						array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=>'padding-right:20px;margin-left:15px'),

							)                              
						);
						?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-8">
						<?php echo $form->labelEx($model,'soal_2'); ?>
					</div>   

					<div class="col-sm-4">
						<?php echo $form->error($model,'soal_2'); ?>
						<?php
						echo $form->radioButtonList($model,'soal_2',
							array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
							array(
								'template'=>'{input}{label}',
								'separator'=>'',
								'labelOptions'=>array(
									'style'=>'padding-right:20px;margin-left:15px'),

								)                              
							);
							?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-8">
							<?php echo $form->labelEx($model,'soal_3'); ?>
						</div>   

						<div class="col-sm-4">
							<?php echo $form->error($model,'soal_3'); ?>
							<?php
							echo $form->radioButtonList($model,'soal_3',
								array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
								array(
									'template'=>'{input}{label}',
									'separator'=>'',
									'labelOptions'=>array(
										'style'=>'padding-right:20px;margin-left:15px'),

									)                              
								);
								?>
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-8">
								<?php echo $form->labelEx($model,'soal_4'); ?>
							</div>   

							<div class="col-sm-4">
								<?php echo $form->error($model,'soal_4'); ?>
								<?php
								echo $form->radioButtonList($model,'soal_4',
									array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
									array(
										'template'=>'{input}{label}',
										'separator'=>'',
										'labelOptions'=>array(
											'style'=>'padding-right:20px;margin-left:15px'),

										)                              
									);
									?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-8">
									<?php echo $form->labelEx($model,'soal_5'); ?>
								</div>   

								<div class="col-sm-4">
									<?php echo $form->error($model,'soal_5'); ?>
									<?php
									echo $form->radioButtonList($model,'soal_5',
										array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
										array(
											'template'=>'{input}{label}',
											'separator'=>'',
											'labelOptions'=>array(
												'style'=>'padding-right:20px;margin-left:15px'),

											)                              
										);
										?>
									</div>

								</div>  


								<div class="form-group">

									<div class="col-sm-8">
										<?php echo $form->labelEx($model,'soal_6'); ?>
									</div>   

									<div class="col-sm-4">
										<?php echo $form->error($model,'soal_6'); ?>
										<?php
										echo $form->radioButtonList($model,'soal_6',
											array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
											array(
												'template'=>'{input}{label}',
												'separator'=>'',
												'labelOptions'=>array(
													'style'=>'padding-right:20px;margin-left:15px'),

												)                              
											);
											?>
										</div>

									</div>  


									<div class="form-group">

										<div class="col-sm-8">
											<?php echo $form->labelEx($model,'soal_7'); ?>
										</div>   

										<div class="col-sm-4">
											<?php echo $form->error($model,'soal_7'); ?>
											<?php
											echo $form->radioButtonList($model,'soal_7',
												array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
												array(
													'template'=>'{input}{label}',
													'separator'=>'',
													'labelOptions'=>array(
														'style'=>'padding-right:20px;margin-left:15px'),

													)                              
												);
												?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-8">
												<?php echo $form->labelEx($model,'soal_8'); ?>
											</div>   

											<div class="col-sm-4">
												<?php echo $form->error($model,'soal_8'); ?>
												<?php
												echo $form->radioButtonList($model,'soal_8',
													array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
													array(
														'template'=>'{input}{label}',
														'separator'=>'',
														'labelOptions'=>array(
															'style'=>'padding-right:20px;margin-left:15px'),

														)                              
													);
													?>
												</div>

											</div>  


											<div class="form-group">

												<div class="col-sm-8">
													<?php echo $form->labelEx($model,'soal_9'); ?>
												</div>   

												<div class="col-sm-4">
													<?php echo $form->error($model,'soal_9'); ?>
													<?php
													echo $form->radioButtonList($model,'soal_9',
														array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
														array(
															'template'=>'{input}{label}',
															'separator'=>'',
															'labelOptions'=>array(
																'style'=>'padding-right:20px;margin-left:15px'),

															)                              
														);
														?>
													</div>

												</div>  


												<div class="form-group">

													<div class="col-sm-8">
														<?php echo $form->labelEx($model,'soal_10'); ?>
													</div>   

													<div class="col-sm-4">
														<?php echo $form->error($model,'soal_10'); ?>
														<?php
														echo $form->radioButtonList($model,'soal_10',
															array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
															array(
																'template'=>'{input}{label}',
																'separator'=>'',
																'labelOptions'=>array(
																	'style'=>'padding-right:20px;margin-left:15px'),

																)                              
															);
															?>
														</div>

													</div>  


													<div class="form-group">

														<div class="col-sm-8">
															<?php echo $form->labelEx($model,'soal_11'); ?>
														</div>   

														<div class="col-sm-4">
															<?php echo $form->error($model,'soal_11'); ?>
															<?php
															echo $form->radioButtonList($model,'soal_11',
																array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
																array(
																	'template'=>'{input}{label}',
																	'separator'=>'',
																	'labelOptions'=>array(
																		'style'=>'padding-right:20px;margin-left:15px'),

																	)                              
																);
																?>
															</div>

														</div>  


														<div class="form-group">

															<div class="col-sm-8">
																<?php echo $form->labelEx($model,'soal_12'); ?>
															</div>   

															<div class="col-sm-4">
																<?php echo $form->error($model,'soal_12'); ?>
																<?php
																echo $form->radioButtonList($model,'soal_12',
																	array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
																	array(
																		'template'=>'{input}{label}',
																		'separator'=>'',
																		'labelOptions'=>array(
																			'style'=>'padding-right:20px;margin-left:15px'),

																		)                              
																	);
																	?>
																</div>

															</div>  


															<div class="form-group">

																<div class="col-sm-8">
																	<?php echo $form->labelEx($model,'soal_13'); ?>
																</div>   

																<div class="col-sm-4">
																	<?php echo $form->error($model,'soal_13'); ?>
																	<?php
																	echo $form->radioButtonList($model,'soal_13',
																		array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
																		array(
																			'template'=>'{input}{label}',
																			'separator'=>'',
																			'labelOptions'=>array(
																				'style'=>'padding-right:20px;margin-left:15px'),

																			)                              
																		);
																		?>
																	</div>

																</div>  


																<div class="form-group">

																	<div class="col-sm-8">
																		<?php echo $form->labelEx($model,'soal_14'); ?>
																	</div>   

																	<div class="col-sm-4">
																		<?php echo $form->error($model,'soal_14'); ?>
																		<?php
																		echo $form->radioButtonList($model,'soal_14',
																			array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
																			array(
																				'template'=>'{input}{label}',
																				'separator'=>'',
																				'labelOptions'=>array(
																					'style'=>'padding-right:20px;margin-left:15px'),

																				)                              
																			);
																			?>
																		</div>

																	</div>  


																	<div class="form-group">

																		<div class="col-sm-8">
																			<?php echo $form->labelEx($model,'soal_15'); ?>
																		</div>   

																		<div class="col-sm-4">
																			<?php echo $form->error($model,'soal_15'); ?>
																			<?php
																			echo $form->radioButtonList($model,'soal_15',
																				array('3'=>'SS','2'=>'S','1'=>'TS','0'=>'STS'),
																				array(
																					'template'=>'{input}{label}',
																					'separator'=>'',
																					'labelOptions'=>array(
																						'style'=>'padding-right:20px;margin-left:15px'),

																					)                              
																				);
																				?>
																			</div>

																		</div>  


																		<div class="form-group">

																			<div class="col-sm-12">
																				<?php echo $form->error($model,'keterangan'); ?>
																				<?php echo $form->textArea($model,'keterangan',array('class'=>'form-control')); ?>
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