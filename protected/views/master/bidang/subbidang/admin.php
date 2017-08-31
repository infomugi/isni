<?php
/* @var $this Sub BidangController */
/* @var $model Sub Bidang */

$this->breadcrumbs=array(
	'Tb List Kategoris'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Sub Bidang';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-md'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-md'));
			?>

		</span> 

		<span class="hidden-xs">

			<?php echo CHtml::link('Add Sub Bidang',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Sub Bidang',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'tb-list-kategori-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							// 'KD_LIST_KATEGORI',
							'NM_LIST_KATEGORI1',
							array(
								'name'=>'kd_bidang',
								'filter' => CHtml::listData(Bidang::model()->findAll(), 'kd_bidang', 'nm_bidang'),
								'value'=>'$data->Bidang->nm_bidang'),

							array(
								'header'=>'Total Dokumen',
								'value'=>'Bidang::model()->getTotal($data->KD_LIST_KATEGORI)'),

							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}',
								),
							),
							)); ?>


