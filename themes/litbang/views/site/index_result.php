<?php
/* @var $this Penerapan SNIController */
/* @var $model Penerapan SNI */

$this->breadcrumbs=array(
	'Hasil Pencarian'=>array('index'),
	'Manage',
	);

$this->pageTitle='Hasil Pencarian "'.$q.'" ('.$dataProvider->totalItemCount.' Ditemukan)';
?>


<!--BANNER START-->
<div class="kode-inner-banner">
	<div class="kode-page-heading">
		<h2><?php echo $this->pageTitle; ?></h2>
	</div>
</div>
<!--BANNER END-->
<div class="kode-content padding-tb-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<script type="text/javascript">
					$("body").highlight("<?php echo $q; ?>");
				</script>
				<style type="text/css">
					.highlight{background-color:yellow}
				</style>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'penerapan-sni-grid',
					'dataProvider'=>$dataProvider,
					'itemsCssClass' => 'table-responsive table table-hover table-vcenter',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'no_nspm',

						array(
							'name' => 'judul',
							'type' => 'raw',
							'value' => function($data) {
								return CHtml::link($data->judul, array('/sni/new/sni/detail/', 'id' => $data->id_standar));
							}
							),

						// array(
						// 	'name'=>'tahun',
						// 	'value'=>'$data->tahun'
						// 	),							

						array(
							'name'=>'kd_jenisstandar',
							'value'=>'$data->JenisStandar->NM_JENIS_STANDAR1'
							),	

						array(
							'name'=>'kd_bidang',
							'value'=>'$data->Bidang->nm_bidang'
							),	

						),
						)); ?>


					</div>
				</div>
			</div>
		</div>
