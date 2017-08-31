<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	SearchData::model()->type($type)=>array($type),
	);

$this->pageTitle= "Kode Standard - ".SearchData::model()->type($type);
?>

<!--BANNER START-->
<div class="kode-inner-banner">
	<div class="kode-page-heading">
		<h2><?php echo $this->pageTitle; ?></h2>
	</div>
	<div class="container">
		<div class="banner-search">
			<div class="row">
				<div class="col-md-9">
					<h2>Cari <?php echo SearchData::model()->type($type); ?></h2>
				</div>

				<div class="col-md-3">
					<button class="btn btn-sm" id="show">Pencarian Lanjut</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!--BANNER END-->
<div class="kode-content padding-tb-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div id="advance_search">
					<table class="table" cellpadding="3" cellspacing="0" border="0">
						<thead>
							<tr>
								<th>Kriteria</th>
								<th>Pencarian Kata Kunci</th>
							</tr>
						</thead>
						<tbody>
							<div id="externaly_triggered_wrapper" class="">
								<tr id="filter_col1" data-column="0">
									<td>No SNI</td>
									<td>
										<span id="external_filter_container_1"></span>
									</td>
								</tr>
								<tr id="filter_col2" data-column="1">
									<td>Judul <?php echo SearchData::model()->type($type); ?></td>
									<td><span id="external_filter_container_2"></span></td>
								</tr>
								<tr id="filter_col3" data-column="2">
									<td>Ruang Lingkup</td>
									<td><span id="external_filter_container_3"></span></td>
								</tr>
								<tr id="filter_col4" data-column="3">
									<td>Bidang</td>
									<td><span id="external_filter_container_4"></span></td>
								</tr>	
								<tr id="filter_col5" data-column="4">
									<td>Tahun</td>
									<td><span id="external_filter_container_0"></span></td>
								</tr>	
							</div>

						</tbody>
					</table>
				</div>

				<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>No SNI</th>
							<th>Judul <?php echo SearchData::model()->type($type); ?></th>
							<th class="hidden-xs">Ruang Lingkup</th>
							<th>Bidang</th>
							<th class="hidden-xs">Tahun</th>
							<th><i class="fa fa-eye"></i></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No SNI</th>
							<th>Judul <?php echo SearchData::model()->type($type); ?></th>
							<th class="hidden-xs">Ruang Lingkup</th>
							<th>Bidang</th>
							<th class="hidden-xs">Tahun</th>
							<th><i class="fa fa-eye"></i></th>
						</tr>
					</tfoot>
					<tbody>

						<?php foreach (SearchData::getSNI($type) as $data) { ?> 
							<tr>
								<td><?php echo $data['no_nspm']; ?></td>
								<td><?php echo $data['judul']; ?></td>
								<td class="hidden-xs"><?php echo $data['ruang_lingkup']; ?></td>
								<td><?php echo $data['nama_bidang']; ?></td>
								<td class="hidden-xs"><?php echo $data['tahun']; ?></td>
								<td><a href="<?php echo YII::app()->baseUrl; ?>/site/detailsni/type/<?php echo $type; ?>/id/<?php echo $data['id']; ?>"/><?php echo "<i title='Detail ".$data['no_nspm']."' class='btn btn-warning btn-sm fa fa-file-o'></i>"; ?></a></td>
							</tr>
							<?php } ?>


						</tbody>
					</table>	

				</div>
			</div>
		</div>
	</div>									
	<BR>
		<script type="text/javascript">
			$("#advance_search").hide();
			$(document).ready(function(){
				$("#show").click(function(){
					$("#advance_search").toggle();
				});
			});

			$(document).ready(function() {
				$('#example').DataTable({
					"stateSave": true,
					"responsive": true,
					"fixedColumns": true,
					"language": {
						"sProcessing":   "Sedang memproses...",
						"sLengthMenu":   "Tampilkan _MENU_ entri",
						"sZeroRecords":  "Tidak ditemukan data yang sesuai",
						"sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
						"sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
						"sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
						"sInfoPostFix":  "",
						"sSearch":       "Cari:",
						"sUrl":          "",
						"oPaginate": {
							"sFirst":    "Pertama",
							"sPrevious": "Sebelumnya",
							"sNext":     "Selanjutnya",
							"sLast":     "Terakhir"
						}
					}

				}).yadcf([
				{
					column_number : 0, 
					text_data_delimiter: ",", 
					filter_type: "text",
					filter_container_id: "external_filter_container_1"
				},
				{
					column_number : 1, 
					text_data_delimiter: ",", 
					filter_type: "text",
					filter_container_id: "external_filter_container_2"
				},
				{
					column_number : 2, 
					text_data_delimiter: ",", 
					filter_type: "text",
					filter_container_id: "external_filter_container_3"
				},
				{
					column_number : 3, text_data_delimiter: ",", 
					filter_type: "auto_complete", 
					// select_type: 'select2',
					// select_type_options: {
					// 	width: '100%',
					// 	minimumResultsForSearch: -1 
					// }
					filter_container_id: "external_filter_container_4",
				},
				{
					column_number : 4,  
					filter_type: "range_number_slider", 
					filter_container_id: "external_filter_container_0"
				},
				]);

				$('input.global_filter').on( 'keyup click', function () {
					filterGlobal();
				} );

			} );
		</script>
