<?php
/* @var $this ContactController */
/* @var $data Contact */
?>

<div class="col-md-6 col-sm-6 col-xs-12">
<section class="panel no-border bg-success">
	<div class="panel-heading no-border">
		<small class="pull-right text-white">
			<a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="javascript:;"></a>
		</small>
		<h5 class="text-white pd">
			<b><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id_contact)); ?></b>
		</h5>
	</div>
	<div class="panel-body bg-white">
		<div><?php echo CHtml::encode($data->fullname); ?>
			<small class="pull-right"><?php echo CHtml::encode($data->created_date); ?></small>
		</div>
		<small><?php echo CHtml::encode($data->email); ?></small>
		<p class="mg-t-sm">
			<?php echo CHtml::encode($data->description); ?>
		</p>
		<div class="text-muted">
			<a href="javascript:;" class="muted mg-r-md">
				<i class="fa fa-eye mg-r-xs"></i> <?php echo Contact::model()->view($data->view); ?>
			</a>
			<?php if($data->status==2): ?>
			<a href="javascript:;" class="text-white">
				<i class="fa fa-star text-warning mg-r-xs"></i> Favorite
			</a>
			<?php endif; ?>
		</div>
	</div>
</section>
</div>
