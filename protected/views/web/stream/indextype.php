<?php
/* @var $this StreamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Streams',
	);

$this->pageTitle='List Stream';
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stream-grid',
	'dataProvider'=>$dataProvider,
	'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
	'columns'=>array(

		array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
				'style' => 'text-align: center;')),

		'name',
		'description',

		array(	
			'name'=>'type',
			'filter'=>array('0'=>'Disable','1'=>'Enable'),
			'value'=>'Stream::model()->status($data->type)',
			),
		array(	
			'name'=>'status',
			'filter'=>array('0'=>'Disable','1'=>'Enable'),
			'value'=>'Post::model()->status($data->status)',
			),
		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>
				array(
					'url'=>'Yii::app()->createUrl("Stream/view", array("id"=>$data->id_stream))',
					'options'=>array(
						'ajax'=>array(
							'type'=>'POST',
							'url'=>"js:$(this).attr('href')",
							'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
							),
						),
					),
				),
			),
		),
		)); ?>



		<!-- Modal -->
		<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Popup Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><strong>View</strong> Stream</h4>
					</div>
					<!-- Popup Content -->
					<div class="modal-body">
						<p>Details</p>
					</div>
					<!-- Popup Footer -->
					<div class="modal-footer">
						<BR>
							<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>


