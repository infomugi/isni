<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	$model->title,
	);

$this->pageTitle='Detail Contact';
?>


<section class="col-xs-12">
	<?php if($model->view==1){ ?>
		<?php if($model->status==1){ ?>
			<?php echo CHtml::link('<i class="fa fa-star"/></i> Set Important',
				array('important','id'=>$model->id_contact),
				array('class' => 'btn btn-warning','title'=>'Set Important'));
			?>		
			<?php }else{ ?>
				<button class="btn btn-warning" disabled><i class="fa fa-star"/></i> Important</button>
				<?php } ?>
				<?php }else{ ?>
					<?php echo CHtml::link('<i class="fa fa-eye"/></i> Read',
						array('read'),
						array('class' => 'btn btn-success','title'=>'Message Read'));
					?>
					<?php } ?>
					<HR>
						<?php $this->widget('zii.widgets.CDetailView', array(
							'data'=>$model,
							'htmlOptions'=>array("class"=>"table"),
							'attributes'=>array(
								'created_date',
								'fullname',
								'email',
								'title',
								'description',
								array('name'=>'view','value'=>Contact::model()->view($model->view)),
								array('name'=>'status','value'=>Contact::model()->status($model->status)),
								),
								)); ?>

							</section>

							<STYLE>
								th{width:150px;}
							</STYLE>

