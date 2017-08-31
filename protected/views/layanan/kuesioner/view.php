<?php
/* @var $this KuesionerController */
/* @var $model Kuesioner */

$this->breadcrumbs=array(
	'Kuesioners'=>array('index'),
	$model->id_kuesioner,
	);

$this->pageTitle='Detail Kuesioner';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-table"></i>',
		array('admin'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Manage Kuesioner'));
		?>
		<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
			array('delete', 'id'=>$model->id_kuesioner,
				),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Kuesioner'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('Manage',
					array('admin'),
					array('class' => 'btn btn-primary btn-flat','title'=>'Manage Kuesioner'));
					?>
					<?php echo CHtml::link('Delete', 
						array('delete', 'id'=>$model->id_kuesioner,
							),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Kuesioner'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
																	// 'id_kuesioner',
									'tanggal_kuesioner',
									array('name'=>'user_id','value'=>$model->Pengguna->Nama),
									array('name'=>'soal_1','value'=>Kuesioner::model()->grade($model->soal_1)),
									array('name'=>'soal_2','value'=>Kuesioner::model()->grade($model->soal_2)),
									array('name'=>'soal_3','value'=>Kuesioner::model()->grade($model->soal_3)),
									array('name'=>'soal_4','value'=>Kuesioner::model()->grade($model->soal_4)),
									array('name'=>'soal_5','value'=>Kuesioner::model()->grade($model->soal_5)),
											// array('name'=>'soal_6','value'=>Kuesioner::model()->grade($model->soal_6)),
											// array('name'=>'soal_7','value'=>Kuesioner::model()->grade($model->soal_7)),
											// array('name'=>'soal_8','value'=>Kuesioner::model()->grade($model->soal_8)),
											// array('name'=>'soal_9','value'=>Kuesioner::model()->grade($model->soal_9)),
											// array('name'=>'soal_10','value'=>Kuesioner::model()->grade($model->soal_10)),
											// array('name'=>'soal_11','value'=>Kuesioner::model()->grade($model->soal_11)),
											// array('name'=>'soal_12','value'=>Kuesioner::model()->grade($model->soal_12)),
											// array('name'=>'soal_13','value'=>Kuesioner::model()->grade($model->soal_13)),
											// array('name'=>'soal_14','value'=>Kuesioner::model()->grade($model->soal_14)),
											// array('name'=>'soal_15','value'=>Kuesioner::model()->grade($model->soal_15)),
									'keterangan',
									),
									)); ?>

							<STYLE>
								th{width:450px;}
							</STYLE>

