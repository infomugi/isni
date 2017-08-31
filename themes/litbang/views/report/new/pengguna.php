<?php
/* @var $this BukutamuController */
/* @var $model Bukutamu */

$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	'Laporan',
	);

$this->pageTitle='Laporan Pengguna - '.$jenis;
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
				echo CHtml::beginForm(array('newlistpengguna'));
				?>
				<div class="col-md-8 col-sm-3 col-xs-12">
					<select class="form-control input-lg" name="jenispekerjaan">
						<?php foreach (Jenispekerjaan::getJenisPekerjaan() as $data) { ?> 
							<option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<?php
						echo CHtml::submitButton('Export Excel',array('class'=>'btn btn-lg btn-success btn-block'));
						echo CHtml::endForm();
						?>
					</div>
				</div>
			</section>
		</div>

	</div>
	
	
	<section class="col-xs-12">
    <div class="alert alert-success"><i class="fa fa-file-excel-o"></i> Export Dokumen Pengguna ( <b><?php echo $jenis; ?></b> ) SNI ke Excel, Berhasil <a href="/sni/Rekapitulasi Pengguna SIMSTAN.xls">Download</a> </div>
    </section>
    
