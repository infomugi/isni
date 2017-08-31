<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user,
	);

$this->pageTitle='Profile - '.$model->fullname;
?>


<section class="col-xs-12">
<h3><i class="fa fa-info"></i> Akun</h3>
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
			'create_time',
			'update_time',
			'visit_time',
			'ipaddress',
			array('name'=>'active','value'=>User::model()->active($model->active)),
			array('name'=>'status','value'=>User::model()->status($model->status)),
			),
			)); ?>

<h3><i class="fa fa-user"></i> Akun</h3>
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
			'fullname',
			array('name'=>'gender','value'=>User::model()->gender($model->gender)),
			'birth',
			'email',
			'username',
			array('name'=>'level','value'=>User::model()->level($model->level)),
			array('name'=>'division','value'=>$model->Division->name),
							// 'image',
			),
			)); ?>

		</section>

		<STYLE>
			th{width:150px;}
		</STYLE>

