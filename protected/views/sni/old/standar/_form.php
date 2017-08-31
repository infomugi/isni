<?php
/* @var $this StandarController */
/* @var $model Standar */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">




	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'standar-form',
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
			<div class="panel-heading">Tahap Perumusan
				<small class="pull-right">
					<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
				</small>
			</div>
			<div class="panel-body">


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'tahap_usulan'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'tahap_usulan'); ?>
						<?php
						echo $form->radioButtonList($model,'tahap_usulan',
							array('Y'=>'Ya','T'=>'Tidak'),
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

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'tahap_konsep'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'tahap_konsep'); ?>
							<?php
							echo $form->radioButtonList($model,'tahap_konsep',
								array('Y'=>'Ya','T'=>'Tidak'),
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

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'tgl_konsep'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'tgl_konsep'); ?>
								<?php echo $form->textField($model,'tgl_konsep',array('class'=>'form-control')); ?>
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'tahap_rpt_teknis1'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'tahap_rpt_teknis1'); ?>
								<?php
								echo $form->radioButtonList($model,'tahap_rpt_teknis1',
									array('Y'=>'Ya','T'=>'Tidak'),
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

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'tgl_rpt_teknis1'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'tgl_rpt_teknis1'); ?>
									<?php echo $form->textField($model,'tgl_rpt_teknis1',array('class'=>'form-control')); ?>
								</div>

							</div>  



							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'tahap_rpt_teknis2'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'tahap_rpt_teknis2'); ?>
									<?php
									echo $form->radioButtonList($model,'tahap_rpt_teknis2',
										array('Y'=>'Ya','T'=>'Tidak'),
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

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'tgl_rpt_teknis2'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'tgl_rpt_teknis2'); ?>
										<?php echo $form->textField($model,'tgl_rpt_teknis2',array('class'=>'form-control')); ?>
									</div>

								</div>  


								<div class="form-group">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'tahap_rpt_konsensus'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'tahap_rpt_konsensus'); ?>
										<?php
										echo $form->radioButtonList($model,'tahap_rpt_konsensus',
											array('Y'=>'Ya','T'=>'Tidak'),
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

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'tgl_rpt_konsensus'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'tgl_rpt_konsensus'); ?>
											<?php echo $form->textField($model,'tgl_rpt_konsensus',array('class'=>'form-control')); ?>
										</div>

									</div>  


									
									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'tahap_rpt_pantek'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'tahap_rpt_pantek'); ?>
											<?php
											echo $form->radioButtonList($model,'tahap_rpt_pantek',
												array('Y'=>'Ya','T'=>'Tidak'),
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

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'TGL_PANTEK'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'TGL_PANTEK'); ?>
												<?php echo $form->textField($model,'TGL_PANTEK',array('class'=>'form-control')); ?>
											</div>

										</div>  



									</div>
								</section>
								<!-- START: Program yang Diusulkan -->



								<section class="panel panel-color">
									<div class="panel-heading">Program yang Diusulkan
										<small class="pull-right">
											<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
										</small>
									</div>
									<div class="panel-body">


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'JUDUL1'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'JUDUL1'); ?>
												<?php echo $form->textField($model,'JUDUL1',array('class'=>'form-control')); ?>
											</div>

										</div>  



										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'TGL_USUL'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'TGL_USUL'); ?>
												<?php echo $form->dropDownList($model, 'TGL_USUL', $model->getYearsList(), array('class'=>'form-control select2')); ?>
											</div>

										</div>  




										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'jangka_waktu'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'jangka_waktu'); ?>
												<?php echo $form->textField($model,'jangka_waktu',array('class'=>'form-control')); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'RUANG1'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'RUANG1'); ?>
												<?php echo $form->textArea($model,'RUANG1',array('class'=>'form-control','placeHolder'=>'Ruang Lingkup')); ?>
											</div>

										</div>  				

										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'kd_jenisstatus'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'kd_jenisstatus'); ?>
												<?php 
												echo $form->dropDownList($model, "kd_jenisstatus",
													CHtml::listData(JenisStatus::model()->findAll(),
														'KD_JENISSTATUS', 'NM_JENISSTATUS'
														),
													array("empty"=>"-- Pilih Status Standar --", 'class'=>'select2 form-control')
													); 
													?> 
												</div>

											</div>  						


										</div>
									</section>
									<!-- START: Program yang Diusulkan -->


									<!-- START: ICS -->
									<section class="panel panel-color">
										<div class="panel-heading">ICS
											<small class="pull-right">
												<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
											</small>
										</div>
										<div class="panel-body">		


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'KD_BIDANG'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'KD_BIDANG'); ?>
													<?php 
													echo $form->dropDownList($model, "KD_BIDANG",
														CHtml::listData(Bidang::model()->findAll(),
															'kd_bidang', 'nm_bidang'
															),
														array("empty"=>"-- Pilih Bidang --", 'class'=>'select2 form-control')
														); 
														?> 
													</div>

												</div>  


												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'KD_LIST_KATEGORI'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'KD_LIST_KATEGORI'); ?>
														<?php 
														echo $form->dropDownList($model, "KD_LIST_KATEGORI",
															CHtml::listData(SubBidang::model()->findAll(),
																'KD_LIST_KATEGORI', 'NM_LIST_KATEGORI1'
																),
															array("empty"=>"-- Pilih Sub Bidang --", 'class'=>'select2 form-control')
															); 
															?> 
														</div>

													</div>  	


													<div class="form-group">

														<div class="col-sm-4 control-label">
															<?php echo $form->labelEx($model,'KD_JENIS_STANDAR'); ?>
														</div>   

														<div class="col-sm-8">
															<?php echo $form->error($model,'KD_JENIS_STANDAR'); ?>
															<?php 
															echo $form->dropDownList($model, "KD_JENIS_STANDAR",
																CHtml::listData(JenisStandar::model()->findAll(),
																	'KD_JENIS_STANDAR', 'NM_JENIS_STANDAR1'
																	),
																array("empty"=>"-- Pilih Sub Bidang --", 'class'=>'select2 form-control')
																); 
																?> 
															</div>

														</div>  


														<div class="form-group">

															<div class="col-sm-4 control-label">
																<?php echo $form->labelEx($model,'strata_penggunaan_sni'); ?>
															</div>   

															<div class="col-sm-8">
																<?php echo $form->error($model,'strata_penggunaan_sni'); ?>
																<?php 
																echo $form->dropDownList($model, "strata_penggunaan_sni",
																	CHtml::listData(Starta::model()->findAll(),
																		'id', 'starta'
																		),
																	array("empty"=>"-- Pilih Strata --", 'class'=>'select2 form-control')
																	); 
																	?> 
																</div>

															</div>  


															<div class="form-group">

																<div class="col-sm-4 control-label">
																	<?php echo $form->labelEx($model,'LP_perencanAan'); ?>
																</div>   

																<div class="col-sm-8">
																	<?php echo $form->error($model,'LP_perencanAan'); ?>
																	<?php
																	echo $form->radioButtonList($model,'LP_perencanAan',
																		array('Y'=>'Ya','T'=>'Tidak'),
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

																	<div class="col-sm-4 control-label">
																		<?php echo $form->labelEx($model,'LP_desain'); ?>
																	</div>   

																	<div class="col-sm-8">
																		<?php echo $form->error($model,'LP_desain'); ?>
																		<?php
																		echo $form->radioButtonList($model,'LP_desain',
																			array('Y'=>'Ya','T'=>'Tidak'),
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

																		<div class="col-sm-4 control-label">
																			<?php echo $form->labelEx($model,'LP_kontruksi'); ?>
																		</div>   

																		<div class="col-sm-8">
																			<?php echo $form->error($model,'LP_kontruksi'); ?>
																			<?php
																			echo $form->radioButtonList($model,'LP_kontruksi',
																				array('Y'=>'Ya','T'=>'Tidak'),
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

																			<div class="col-sm-4 control-label">
																				<?php echo $form->labelEx($model,'lp_om'); ?>
																			</div>   

																			<div class="col-sm-8">
																				<?php echo $form->error($model,'lp_om'); ?>
																				<?php
																				echo $form->radioButtonList($model,'lp_om',
																					array('Y'=>'Ya','T'=>'Tidak'),
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


																		</div>
																	</section>	
																	<!-- END: ICS -->

																	<!-- START: Status Usulan -->
																	<section class="panel panel-color">
																		<div class="panel-heading">Status Usulan
																			<small class="pull-right">
																				<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
																			</small>
																		</div>
																		<div class="panel-body">	


																			<div class="form-group">

																				<div class="col-sm-4 control-label">
																					<?php echo $form->labelEx($model,'kd_kat_standar_konsep'); ?>
																				</div>   

																				<div class="col-sm-8">
																					<?php echo $form->error($model,'kd_kat_standar_konsep'); ?>
																					<?php 
																					echo $form->dropDownList($model, "kd_kat_standar_konsep",
																						CHtml::listData(Statusstandar::model()->findAll(),
																							'KD_KATEGORI', 'NM_KATEGORI1'
																							),
																						array("empty"=>"-- Pilih Status Standar Konsep --", 'class'=>'select2 form-control')
																						); 
																						?> 
																					</div>

																				</div>  


																				<div class="form-group">

																					<div class="col-sm-4 control-label">
																						<?php echo $form->labelEx($model,'no_nspm_konsep'); ?>
																					</div>   

																					<div class="col-sm-8">
																						<?php echo $form->error($model,'no_nspm_konsep'); ?>
																						<?php echo $form->textField($model,'no_nspm_konsep',array('class'=>'form-control')); ?>
																					</div>

																				</div>  

																			</div>
																		</section>	
																		<!-- END: Status Usulan -->


																		<!-- START: Sub Panitia Teknis -->
																		<section class="panel panel-color">
																			<div class="panel-heading">Sub Panitia Teknis
																				<small class="pull-right">
																					<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
																				</small>
																			</div>
																			<div class="panel-body">


																				<div class="form-group">

																					<div class="col-sm-4 control-label">
																						<?php echo $form->labelEx($model,'KD_SUBPATEK'); ?>
																					</div>   

																					<div class="col-sm-8">
																						<?php echo $form->error($model,'KD_SUBPATEK'); ?>
																						<?php 
																						echo $form->dropDownList($model, "KD_SUBPATEK",
																							CHtml::listData(Subpatek::model()->findAll(),
																								'KD_SUBPATEK', 'NM_SUBPATEK'
																								),
																							array("empty"=>"-- Pilih Sub Panitia Teknis --", 'class'=>'select2 form-control')
																							); 
																							?> 
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'KD_PATEK'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'KD_PATEK'); ?>
																							<?php 
																							echo $form->dropDownList($model, "KD_PATEK",
																								CHtml::listData(Patek::model()->findAll(),
																									'KD_PATEK', 'NM_PATEK'
																									),
																								array("empty"=>"-- Pilih Panitia Teknis --", 'class'=>'select2 form-control')
																								); 
																								?> 
																							</div>

																						</div>  


																						<div class="form-group">

																							<div class="col-sm-4 control-label">
																								<?php echo $form->labelEx($model,'KD_DANA'); ?>
																							</div>   

																							<div class="col-sm-8">
																								<?php echo $form->error($model,'KD_DANA'); ?>
																								<?php 
																								echo $form->dropDownList($model, "KD_DANA",
																									CHtml::listData(Dana::model()->findAll(),
																										'KD_DANA', 'NM_DANA'
																										),
																									array("empty"=>"-- Pilih Dana --", 'class'=>'select2 form-control')
																									); 
																									?> 
																								</div>

																							</div>  



																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'konseptor'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'konseptor'); ?>
																									<?php echo $form->textArea($model,'konseptor',array('class'=>'form-control','placeHolder'=>'Konseptor')); ?>
																								</div>

																							</div>  



																						</div>
																					</section>	
																					<!-- END: Sub Panitia Teknis -->	


																					<!-- START: Sub Panitia Teknis -->
																					<section class="panel panel-color">
																						<div class="panel-heading">Justifikasi
																							<small class="pull-right">
																								<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
																							</small>
																						</div>
																						<div class="panel-body">




																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'regulasi'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'regulasi'); ?>
																									<?php echo $form->textField($model,'regulasi',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'kesepakatan_regional'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'kesepakatan_regional'); ?>
																									<?php echo $form->textField($model,'kesepakatan_regional',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'kebutuhan_pasar'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'kebutuhan_pasar'); ?>
																									<?php echo $form->textField($model,'kebutuhan_pasar',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'pertimbangan_lain'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'pertimbangan_lain'); ?>
																									<?php echo $form->textField($model,'pertimbangan_lain',array('class'=>'form-control')); ?>
																								</div>

																							</div>  

																						</div>
																					</section>	
																					<!-- END: Sub Panitia Teknis -->	

																					<!-- START: Standar yang Diadopsi -->
																					<section class="panel panel-color">
																						<div class="panel-heading">Standar yang Diadopsi
																							<small class="pull-right">
																								<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
																							</small>
																						</div>
																						<div class="panel-body">

																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'KD_PADANAN'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'KD_PADANAN'); ?>
																									<?php 
																									echo $form->dropDownList($model, "KD_PADANAN",
																										CHtml::listData(Padanan::model()->findAll(),
																											'KD_PADANAN', 'NO_PADANAN'
																											),
																										array("empty"=>"-- Pilih Padanan --", 'class'=>'select2 form-control')
																										); 
																										?> 

																									</div> 
																								</div> 



																								<div class="form-group">

																									<div class="col-sm-4 control-label">
																										<?php echo $form->labelEx($model,'std_non_internasional'); ?>
																									</div>   

																									<div class="col-sm-8">
																										<?php echo $form->error($model,'std_non_internasional'); ?>
																										<?php echo $form->textField($model,'std_non_internasional',array('class'=>'form-control')); ?>
																									</div>

																								</div>  


																								<div class="form-group">

																									<div class="col-sm-4 control-label">
																										<?php echo $form->labelEx($model,'d_acuan'); ?>
																									</div>   

																									<div class="col-sm-8">
																										<?php echo $form->error($model,'d_acuan'); ?>
																										<?php echo $form->textArea($model,'d_acuan',array('class'=>'form-control','placeHolder'=>'Acuan Normatif','id'=>'tags')); ?>
																										<table id="test" class="table table-condensed">

																										</table>
																									</div>


																								</div>  


																								<script type="text/javascript">
																			// jQuery(document).ready(function($)
																			// {
																			// 	var lines = $('#tags').val().split('<br>-');
																			// 	jQuery.each(lines, function() {
																			// 		alert(this);
																			// 	});
																			// });

																			$($('#tags').val().split('<br>-')).each(function(){
																				$('#test').append('<tr><td>'+this+'</td></tr>')
																			})
																		</script>



																	</div>
																</section>	
																<!-- END: Standar yang Diadopsi -->	

																<!-- START: Standar yang tidak diadposi -->
																<section class="panel panel-color">
																	<div class="panel-heading">Standar yang tidak diadposi
																		<small class="pull-right">
																			<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
																		</small>
																	</div>
																	<div class="panel-body">


																		<div class="form-group">

																			<div class="col-sm-4 control-label">
																				<?php echo $form->labelEx($model,'penelitian'); ?>
																			</div>   

																			<div class="col-sm-8">
																				<?php echo $form->error($model,'penelitian'); ?>
																				<?php echo $form->textField($model,'penelitian',array('class'=>'form-control')); ?>
																			</div>

																		</div>  


																		<div class="form-group">

																			<div class="col-sm-4 control-label">
																				<?php echo $form->labelEx($model,'d_stdacuan'); ?>
																			</div>   

																			<div class="col-sm-8">
																				<?php echo $form->error($model,'d_stdacuan'); ?>
																				<?php echo $form->textArea($model,'d_stdacuan',array('class'=>'form-control','placeHolder'=>'Standar Acuan','id'=>'tags')); ?>
																			</div>

																		</div>  

																	</div>
																</section>	
																<!-- END: Standar yang tidak diadposi -->	


																<!-- START: Penetapan RSNI -->
																<section class="panel panel-color">
																	<div class="panel-heading">Penetapan RSNI
																		<small class="pull-right">
																			<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
																		</small>
																	</div>
																	<div class="panel-body">



																		<div class="form-group">

																			<div class="col-sm-4 control-label">
																				<?php echo $form->labelEx($model,'tahap_usulan_menteri'); ?>
																			</div>   

																			<div class="col-sm-8">
																				<?php echo $form->error($model,'tahap_usulan_menteri'); ?>
																				<?php
																				echo $form->radioButtonList($model,'tahap_usulan_menteri',
																					array('Y'=>'Ya','T'=>'Tidak'),
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

																				<div class="col-sm-4 control-label">
																					<?php echo $form->labelEx($model,'tgl_usulan_thp_menteri'); ?>
																				</div>   

																				<div class="col-sm-8">
																					<?php echo $form->error($model,'tgl_usulan_thp_menteri'); ?>
																					<?php echo $form->textField($model,'tgl_usulan_thp_menteri',array('class'=>'form-control')); ?>
																				</div>

																			</div>  


																			<div class="form-group">

																				<div class="col-sm-4 control-label">
																					<?php echo $form->labelEx($model,'thn_penetapan_rsni'); ?>
																				</div>   

																				<div class="col-sm-8">
																					<?php echo $form->error($model,'thn_penetapan_rsni'); ?>
																					<?php echo $form->textField($model,'thn_penetapan_rsni',array('class'=>'form-control')); ?>
																				</div>

																			</div>  



																			<div class="form-group">

																				<div class="col-sm-4 control-label">
																					<?php echo $form->labelEx($model,'NO_RSNI'); ?>
																				</div>   

																				<div class="col-sm-8">
																					<?php echo $form->error($model,'NO_RSNI'); ?>
																					<?php echo $form->textField($model,'NO_RSNI',array('class'=>'form-control')); ?>
																				</div>

																			</div>  


																		</div>
																	</section>	
																	<!-- END: Penetapan RSNI -->	




																	<!-- START: Penetapan RSNI -->
																	<section class="panel panel-color">
																		<div class="panel-heading">Penetapan SNI/Pedoman
																			<small class="pull-right">
																				<a class="fa panel-collapsible pd-r-xs fa-chevron-down" href="javascript:;"></a>
																			</small>
																		</div>
																		<div class="panel-body">


																			<div class="form-group">

																				<div class="col-sm-4 control-label">
																					<?php echo $form->labelEx($model,'tahap_usulan_bsn'); ?>
																				</div>   

																				<div class="col-sm-8">
																					<?php echo $form->error($model,'tahap_usulan_bsn'); ?>
																					<?php
																					echo $form->radioButtonList($model,'tahap_usulan_bsn',
																						array('Y'=>'Ya','T'=>'Tidak'),
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

																					<div class="col-sm-4 control-label">
																						<?php echo $form->labelEx($model,'tgl_usulan_thp_bsn'); ?>
																					</div>   

																					<div class="col-sm-8">
																						<?php echo $form->error($model,'tgl_usulan_thp_bsn'); ?>
																						<?php echo $form->textField($model,'tgl_usulan_thp_bsn',array('class'=>'form-control')); ?>
																					</div>

																				</div>  



																				<div class="form-group">

																					<div class="col-sm-4 control-label">
																						<?php echo $form->labelEx($model,'tahap_jajak_pendapat'); ?>
																					</div>   

																					<div class="col-sm-8">
																						<?php echo $form->error($model,'tahap_jajak_pendapat'); ?>
																						<?php
																						echo $form->radioButtonList($model,'tahap_jajak_pendapat',
																							array('Y'=>'Ya','T'=>'Tidak'),
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

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'tgl_jajak_pendapat'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'tgl_jajak_pendapat'); ?>
																							<?php echo $form->textField($model,'tgl_jajak_pendapat',array('class'=>'form-control')); ?>
																						</div>

																					</div>  




																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'ket_jajak_pendapat'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'ket_jajak_pendapat'); ?>
																							<?php echo $form->textField($model,'ket_jajak_pendapat',array('class'=>'form-control')); ?>
																						</div>

																					</div>  



																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'tahap_ebaloting'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'tahap_ebaloting'); ?>
																							<?php
																							echo $form->radioButtonList($model,'tahap_ebaloting',
																								array('Y'=>'Ya','T'=>'Tidak'),
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

																							<div class="col-sm-4 control-label">
																								<?php echo $form->labelEx($model,'tgl_ebaloting'); ?>
																							</div>   

																							<div class="col-sm-8">
																								<?php echo $form->error($model,'tgl_ebaloting'); ?>
																								<?php echo $form->textField($model,'tgl_ebaloting',array('class'=>'form-control')); ?>
																							</div>

																						</div>  




																						<div class="form-group">

																							<div class="col-sm-4 control-label">
																								<?php echo $form->labelEx($model,'ket_ebaloting'); ?>
																							</div>   

																							<div class="col-sm-8">
																								<?php echo $form->error($model,'ket_ebaloting'); ?>
																								<?php echo $form->textField($model,'ket_ebaloting',array('class'=>'form-control')); ?>
																							</div>

																						</div>  


																						<div class="form-group">

																							<div class="col-sm-4 control-label">
																								<?php echo $form->labelEx($model,'KD_STATUS_STANDAR'); ?>
																							</div>   

																							<div class="col-sm-8">
																								<?php echo $form->error($model,'KD_STATUS_STANDAR'); ?>
																								<?php 
																								echo $form->dropDownList($model, "KD_STATUS_STANDAR",
																									CHtml::listData(Statusstandar::model()->findAll(),
																										'KD_KATEGORI', 'NM_KATEGORI1'
																										),
																									array("empty"=>"-- Pilih Status Standar --", 'class'=>'select2 form-control')
																									); 
																									?> 
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'NO_NSPM'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'NO_NSPM'); ?>
																									<?php echo $form->textField($model,'NO_NSPM',array('class'=>'form-control')); ?>
																								</div>

																							</div> 



																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'jmlhal'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'jmlhal'); ?>
																									<?php echo $form->textField($model,'jmlhal',array('class'=>'form-control')); ?>
																								</div>

																							</div>



																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'statusws'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'statusws'); ?>
																									<?php echo $form->dropDownList($model, 'statusws', $model->getStatusHukum(), array('class'=>'form-control select2')); ?>
																								</div>

																							</div>   




																						</div>
																					</section>	
																					<!-- END: Penetapan RSNI -->	

																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'NO_ID'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'NO_ID'); ?>
																							<?php echo $form->textField($model,'NO_ID',array('class'=>'form-control')); ?>
																						</div>

																					</div>  







																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'TH_PENYUSUNAN'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'TH_PENYUSUNAN'); ?>
																							<?php echo $form->textField($model,'TH_PENYUSUNAN',array('class'=>'form-control')); ?>
																						</div>

																					</div>  












																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'TGL_RSNI1'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'TGL_RSNI1'); ?>
																							<?php echo $form->textField($model,'TGL_RSNI1',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'TGL_RSNI2'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'TGL_RSNI2'); ?>
																							<?php echo $form->textField($model,'TGL_RSNI2',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'TGL_RSNI3'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'TGL_RSNI3'); ?>
																							<?php echo $form->textField($model,'TGL_RSNI3',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'TGL_RSNI4'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'TGL_RSNI4'); ?>
																							<?php echo $form->textField($model,'TGL_RSNI4',array('class'=>'form-control')); ?>
																						</div>

																					</div>  





																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'KD_STATUS_NSPM'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'KD_STATUS_NSPM'); ?>
																							<?php echo $form->textField($model,'KD_STATUS_NSPM',array('class'=>'form-control')); ?>
																						</div>

																					</div>  






																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'NO_NSPM_REV'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'NO_NSPM_REV'); ?>
																							<?php echo $form->textField($model,'NO_NSPM_REV',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'BERLAKU'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'BERLAKU'); ?>
																							<?php
																							echo $form->radioButtonList($model,'BERLAKU',
																								array('B'=>'Belaku','TB'=>'Tidak Berlaku'),
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

																							<div class="col-sm-4 control-label">
																								<?php echo $form->labelEx($model,'LOG_REVISI'); ?>
																							</div>   

																							<div class="col-sm-8">
																								<?php echo $form->error($model,'LOG_REVISI'); ?>
																								<?php echo $form->textField($model,'LOG_REVISI',array('class'=>'form-control')); ?>
																							</div>

																						</div>  





																						<div class="form-group">

																							<div class="col-sm-4 control-label">
																								<?php echo $form->labelEx($model,'KD_UNIT'); ?>
																							</div>   

																							<div class="col-sm-8">
																								<?php echo $form->error($model,'KD_UNIT'); ?>
																								<?php 
																								echo $form->dropDownList($model, "KD_UNIT",
																									CHtml::listData(Unit::model()->findAll(),
																										'KD_UNIT', 'NM_UNIT'
																										),
																									array("empty"=>"-- Pilih Unit --", 'class'=>'select2 form-control')
																									); 
																									?> 
																								</div>

																							</div>  





																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'tgl_bsn'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'tgl_bsn'); ?>
																									<?php echo $form->textField($model,'tgl_bsn',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'tgl_usulbsn'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'tgl_usulbsn'); ?>
																									<?php echo $form->textField($model,'tgl_usulbsn',array('class'=>'form-control')); ?>
																								</div>

																							</div>  




																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'no_revisi'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'no_revisi'); ?>
																									<?php echo $form->textField($model,'no_revisi',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'status_rev'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'status_rev'); ?>
																									<?php echo $form->textField($model,'status_rev',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'NO_ICS'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'NO_ICS'); ?>
																									<?php echo $form->textField($model,'NO_ICS',array('class'=>'form-control')); ?>
																								</div>

																							</div>  




																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'statustek'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'statustek'); ?>
																									<?php echo $form->textField($model,'statustek',array('class'=>'form-control')); ?>
																								</div>

																							</div>  



																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'d_pendamping'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'d_pendamping'); ?>
																									<?php echo $form->textField($model,'d_pendamping',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'d_terkait'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'d_terkait'); ?>
																									<?php echo $form->textField($model,'d_terkait',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'kd_statuspaten'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'kd_statuspaten'); ?>
																									<?php echo $form->textField($model,'kd_statuspaten',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'no_paten'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'no_paten'); ?>
																									<?php echo $form->textField($model,'no_paten',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'tgl_pengajuan'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'tgl_pengajuan'); ?>
																									<?php echo $form->textField($model,'tgl_pengajuan',array('class'=>'form-control')); ?>
																								</div>

																							</div>  





																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'status_pnps'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'status_pnps'); ?>
																									<?php echo $form->textField($model,'status_pnps',array('class'=>'form-control')); ?>
																								</div>

																							</div>  






																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'revisi_dari_spm'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'revisi_dari_spm'); ?>
																									<?php echo $form->textField($model,'revisi_dari_spm',array('class'=>'form-control')); ?>
																								</div>

																							</div>  





																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'tgl_rpt_pantek'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'tgl_rpt_pantek'); ?>
																									<?php echo $form->textField($model,'tgl_rpt_pantek',array('class'=>'form-control')); ?>
																								</div>

																							</div>  





																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'no_kepmen_rsni'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'no_kepmen_rsni'); ?>
																									<?php echo $form->textField($model,'no_kepmen_rsni',array('class'=>'form-control')); ?>
																								</div>

																							</div>  




																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'no_sk_abolisi'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'no_sk_abolisi'); ?>
																									<?php echo $form->textField($model,'no_sk_abolisi',array('class'=>'form-control')); ?>
																								</div>

																							</div>  







																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'tgl_usulan_menteri'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'tgl_usulan_menteri'); ?>
																									<?php echo $form->textField($model,'tgl_usulan_menteri',array('class'=>'form-control')); ?>
																								</div>

																							</div>  





																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'d_ics'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'d_ics'); ?>
																									<?php echo $form->textField($model,'d_ics',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'d_sni_revisi'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'d_sni_revisi'); ?>
																									<?php echo $form->textField($model,'d_sni_revisi',array('class'=>'form-control')); ?>
																								</div>

																							</div>  





																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'d_bibliografi'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'d_bibliografi'); ?>
																									<?php echo $form->textField($model,'d_bibliografi',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'NO_KEPBSN'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'NO_KEPBSN'); ?>
																									<?php echo $form->textField($model,'NO_KEPBSN',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'TG_KEPBSN'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'TG_KEPBSN'); ?>
																									<?php echo $form->dropDownList($model, 'TG_KEPBSN', $model->getYearsList(), array('class'=>'form-control select2')); ?>
																								</div>

																							</div> 
																							
																							
																																	<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'KD_GUGUS'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'KD_GUGUS'); ?>
												<?php 
												echo $form->dropDownList($model, "KD_GUGUS",
													CHtml::listData(Gugus::model()->findAll(),
														'KD_GUGUS', 'NM_GUGUS'
														),
													array("empty"=>"-- Pilih Gugus --", 'class'=>'select2 form-control')
													); 
													?> 
												</div>

											</div>  


																							<div class="form-group">
																								<div class="col-md-12">  
																								</br></br>
																								<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
																							</div>
																						</div>

																						<?php $this->endWidget(); ?>

																					</div>
