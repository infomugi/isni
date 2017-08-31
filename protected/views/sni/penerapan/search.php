<?php

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
	'columns'=>array(
		'NO_NSPM',
		'JUDUL1',
		array(
			'header'=>'Pilih',
			'type'=>'raw',
			'value'=>'CHtml::link("Pilih","",array(
			"onClick"=>CHtml::ajax(array(
			"url"=>Yii::app()->createUrl("penerapansni/view",array("id"=>$data->primaryKey)),
			"dataType"=>"json",
			"success"=>"function(data){
				$(\"#NO_NSPM\").val(data.satu);
				$(\"#JUDUL1\").val(data.dua);
				$(\"#manageStandar\").remove();
			}")
			),"id"=>"child".$data->primaryKey,"style"=>"cursor:pointer;"))',
			),
		),
	));
	?>