<?php
/* @var $this KonsultasiController */
/* @var $model Konsultasi */

$this->breadcrumbs=array(
	'Konsultasis'=>array('index'),
	$model->id_konsultasi,
	);

$this->pageTitle='Detail Konsultasi';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
		array('index'),
		array('class' => 'btn btn-primary btn-flat', 'title'=>'List Konsultasi'));
		?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
			array('admin'),
			array('class' => 'btn btn-primary btn-flat','title'=>'Manage Konsultasi'));
			?>
			<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
				array('delete', 'id'=>$model->id_konsultasi,
					),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Konsultasi'));
					?>

				</span> 

				<span class="hidden-xs">

					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-primary btn-flat', 'title'=>'List Konsultasi'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-primary btn-flat','title'=>'Manage Konsultasi'));
							?>
							<?php echo CHtml::link('Delete', 
								array('delete', 'id'=>$model->id_konsultasi,
									),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Konsultasi'));
									?>

								</span>

								<HR>
									<div class="col-md-6"> 
										<?php $this->widget('zii.widgets.CDetailView', array(
											'data'=>$model,
											'htmlOptions'=>array("class"=>"table"),
											'attributes'=>array(
												'tanggal_konsultasi',
												array('name'=>'pengguna_id','value'=>$model->Pengguna->Nama),
												array('name'=>'topik','value'=>Konsultasi::model()->type($model->topik)),
												'judul',
												'deskripsi',

												),
												)); ?>
											</div>
											<div class="col-md-6"> 
												<?php $this->widget('zii.widgets.CDetailView', array(
													'data'=>$model,
													'htmlOptions'=>array("class"=>"table"),
													'attributes'=>array(
														'tanggal_jawab',
														'jawaban',
														array('name'=>'admin_id','value'=>$model->admin_id == 0 ? "-" : $model->Admin->fullname),

														),
														)); ?>
													</div>

													<?php echo $this->renderPartial('_form_jawab', array('jawaban'=>$jawaban)); ?>

													<STYLE>
														th{width:150px;}
													</STYLE>

