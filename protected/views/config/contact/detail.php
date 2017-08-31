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
	<div class="lead"><i class="fa fa-circle pd-r-xs text-warning"></i> <?php echo $model->title; ?></div>
	<span class="no-margin center-block"><?php echo $model->fullname; ?> (<i><?php echo $model->email; ?></i>)
		<small class="pull-right">
			<i class="fa fa-eye mg-r-xs"></i>
			<i class="fa fa-star toggle-active mg-r-xs"></i><?php echo $model->created_date; ?></small>
		</span>
		<HR>
			<p><?php echo $model->description; ?></p>
			<HR>
				<?php if($model->view==1){ ?>
					<?php if($model->status==1){ ?>
						<?php echo CHtml::link('<i class="fa fa-star"/></i>',
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

							</section>

