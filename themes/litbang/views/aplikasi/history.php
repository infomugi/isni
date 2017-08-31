<?php
/* @var $this KuesionerController */
/* @var $model Kuesioner */

$this->pageTitle='Riwayat Konsultasi';
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'konsultasi-grid',
	'dataProvider'=>$dataProvider,
	'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
	'columns'=>array(

		array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
				'style' => 'text-align: center;')),

		'tanggal_konsultasi',
		array('name'=>'topik','value'=>'Konsultasi::model()->type($data->topik)'),
		'judul',
'jawaban'

		),
		)); ?>


