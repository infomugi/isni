<?php
/* @var $this SiteController */
$this->pageTitle='Dashboard';
$baseUrl = Yii::app()->baseUrl; 

$start = $data['start'];
$end = $data['end'];

$data1 = Sni::model()->get_count_Jenis(01,$start,$end);
$data2 = Sni::model()->get_count_Jenis(02,$start,$end);
$data3 = Sni::model()->get_count_Jenis(03,$start,$end);
?>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<section class="panel">
			<div class="panel-body">

				<div class="col-md-1 col-sm-3 col-xs-12 hidden-xs">
					<div class="circle-icon bg-warning">
						<i class="fa fa-search"></i>
					</div>
				</div>

				<?php
				echo CHtml::beginForm(array('search'));
				?>
				<div class="col-md-4 col-sm-3 col-xs-12">
					<?php
					echo CHtml::telField('start','',array('class'=>'form-control input-lg','placeholder'=>'Dari Tahun','required'=>true));
					?>
				</div>
				<div class="col-md-4 col-sm-3 col-xs-12">
					<?php
					echo CHtml::telField('end','',array('class'=>'form-control input-lg','placeholder'=>'Sampai Tahun','required'=>true));
					?>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<?php
					echo CHtml::submitButton('Search',array('class'=>'btn btn-lg btn-warning btn-block'));
					echo CHtml::endForm();
					?>
				</div>
			</div>
		</section>
	</div>

</div>

<div class="row">
	<div class="col-md-4 col-sm-6 col-xs-12">
		<section class="panel">
			<div class="panel-body">
				<div class="circle-icon bg-info">
					<i class="fa fa-file-o"></i>
				</div>
				<div>
					<h3 class="no-margin"><?php echo $data1; ?></h3>
					Metode
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<section class="panel">
			<div class="panel-body">
				<div class="circle-icon bg-danger">
					<i class="fa fa-archive"></i>
				</div>
				<div>
					<h3 class="no-margin"><?php echo $data2; ?></h3>
					Spesifikasi
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<section class="panel">
			<div class="panel-body">
				<div class="circle-icon bg-warning">
					<i class="fa fa-tasks"></i>
				</div>
				<div>
					<h3 class="no-margin"><?php echo $data3; ?></h3>
					Tata Cara
				</div>
			</div>
		</section>
	</div>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<div class="row">
	<div class="clearfix"></div>
	<div class="col-md-12">
		<div id="chart_div1" class="chart"></div>
	</div>
</div>

<style type="text/css">
	.chart {
		width: 100%; 
		min-height: 450px;
	}
</style>

<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart1);
	function drawChart1() {
		var data = google.visualization.arrayToDataTable([
			['Dokumen', 'Metode', 'Spesifikasi', 'Tata Cara'],
			['Dokumen', <?php echo $data1; ?>, <?php echo $data2; ?>, <?php echo $data3; ?>],
			]);

		var options = {
			title: 'Norma Standard Pedoman Manual',
			hAxis: {title: 'Jenis Standard', titleTextStyle: {color: 'green'}}
		};

		var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
		chart.draw(data, options);
	}

	$(window).resize(function(){
		drawChart1();
	});
</script>