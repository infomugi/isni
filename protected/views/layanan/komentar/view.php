<?php
/* @var $this KomentarController */
/* @var $model Komentar */

$this->breadcrumbs=array(
	'Komentars'=>array('index'),
	$model->id_komentar,
	);

$this->pageTitle='Detail Komentar';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-table"></i>',
		array('admin'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Manage Komentar'));
		?>
		<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
			array('delete', 'id'=>$model->id_komentar,
				),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Komentar'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('List',
					array('index'),
					array('class' => 'btn btn-primary btn-flat', 'title'=>'List Komentar'));
					?>
					<?php echo CHtml::link('Manage',
						array('admin'),
						array('class' => 'btn btn-primary btn-flat','title'=>'Manage Komentar'));
						?>
						<?php echo CHtml::link('Edit', 
							array('update', 'id'=>$model->id_komentar,
								), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Komentar'));
								?>
								<?php echo CHtml::link('Delete', 
									array('delete', 'id'=>$model->id_komentar,
										),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Komentar'));
										?>

									</span>

									<HR>

										<?php $this->widget('zii.widgets.CDetailView', array(
											'data'=>$model,
											'htmlOptions'=>array("class"=>"table"),
											'attributes'=>array(
												// 'id_komentar',
												'tanggal_komentar',
												array('name'=>'pengguna_id','value'=>$model->Pengguna->Nama),
												'standar_id',
												'deskripsi',
												// 'tanggal_jawab',
												// 'admin_id',
												// 'jawaban',
												// 'status',
												// 'like',
												// 'unlike',
												),
												)); ?>

										<STYLE>
											th{width:150px;}
										</STYLE>

