<?php
/* @var $this KonsultasiController */
/* @var $data Konsultasi */

if(isset($_POST['Konsultasi']))
{
	$data->attributes=$_POST['Konsultasi'];
	if($data->save())
		$this->redirect(array('view','id'=>$data->id_konsultasi));
}
?>

<div class="col-md-6 col-sm-6 col-xs-12">
	<section class="panel position-relative">
		<div class="ribbon ribbon-danger">
			<div class="banner">
				<div class="text"><?php echo Konsultasi::model()->type($data->topik); ?></div>
			</div>
		</div>
		<div class="panel-body">
			<div><?php echo $data->Pengguna->Nama; ?></div>
			<small><?php echo $data->Pengguna->Email; ?></small>
			<p class="mg-t-xs">
				<span class="label label-primary"><?php echo Konsultasi::model()->type($data->topik); ?></span>
				<span class="label label-success"><?php echo $data->tanggal_konsultasi; ?></span>
			</p>
			<small>
				<i class="fa fa-circle text-primary mg-r-xs"></i>
				<?php echo CHtml::link(CHtml::encode($data->judul), array('view', 'id'=>$data->id_konsultasi)); ?>	
			</small>
			<p class="mg-xs"></p>
		</div>
	</section>
</div>

