<?php
/* @var $this KuesionerController */
/* @var $model Kuesioner */

$this->breadcrumbs=array(
	'Kuesioners'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Kuesioner';
?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kuesioner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
	'columns'=>array(

		array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
				'style' => 'text-align: center;')),

		'tanggal_kuesioner',
		array('name'=>'user_id','value'=>'$data->Pengguna->Nama'),
		'keterangan',

		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			),
		),
		)); ?>


