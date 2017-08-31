<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Daftar SMM'=>array('smm'),
	);

$this->pageTitle='Daftar Sistem Manajemen Mutu (SMM) Balitbang PU';
?>

<!--BANNER START-->
<div class="kode-inner-banner">
	<div class="kode-page-heading">
		<h2><?php echo $this->pageTitle; ?></h2>
	</div>
	<div class="container">
		<div class="banner-search">
			<div class="row">
				<div class="col-md-2">
					<h2>Cari<br> SMM</h2>
				</div>
				<div class="col-md-7">
					<input type="text" id="global_filter" class="global_filter" placeholder="Apa yang anda cari ?">
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
							<tr id="filter_col1" data-column="0">
								<td>Judul</td>
								<td align="center"><span id="external_filter_container_1"></span></td>
							</tr>
							<tr class="hidden-xs" id="filter_col2" data-column="1">
								<td>Keterangan</td>
								<td align="center"><span id="external_filter_container_2"></span></td>
							</tr>
							<tr class="hidden-xs" id="filter_col3" data-column="2">
								<td>Nama File</td>
								<td align="center"><span id="external_filter_container_3"></span></td>
							</tr>
						</tbody>
					</table>
				</div>

				<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Judul</th>
							<th class="hidden-xs">Nama File</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Judul</th>
							<th class="hidden-xs">Nama File</th>
						</tr>
					</tfoot>
					<tbody>

						<?php foreach (SearchData::getSMM() as $data) { ?> 
							<tr>
								<td><?php echo $data['judul']; ?></td>
								<td class="hidden-xs" ><a href="<?php echo YII::app()->baseurl."/image/sni/smm/".$data['nm_file']; ?>"/><?php echo $data['nm_file']; ?></a></td>
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