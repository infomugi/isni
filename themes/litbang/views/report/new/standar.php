<?php
/* @var $this BukutamuController */
/* @var $model Bukutamu */

$this->breadcrumbs=array(
	'Bukutamus'=>array('index'),
	'Isi',
	);

$this->pageTitle='Jenis '.$jenis;
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
				echo CHtml::beginForm(array('newliststandar'));
				?>
				<div class="col-md-8 col-sm-3 col-xs-12">
					<select class="form-control input-lg" name="standar">
						<?php foreach (Jenisstandar::getStandar() as $data) { ?> 
							<option value="<?php echo $data['KD_JENIS_STANDAR']; ?>"><?php echo $data['NM_JENIS_STANDAR1']; ?></option>
							<?php } ?>
						</select>
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

	<table id="example" width="100%" cellspacing="0" class="display">
		<THEAD>
			<TR>
				<TD>Judul</TD>
				<TD>NO NSPM</TD>
				<TD>Ringkasan</TD>
				<TD>Bidang</TD>
				<TD>Tahun</TD>
			</TR>
		</THEAD>
		<TBODY>
			<?php foreach($dataProvider->getData() as $data){ ?>
				<TR>
					<TD><?php echo $data->judul; ?></TD>
					<TD><?php echo $data->no_nspm; ?></TD>
					<TD><?php echo $data->Bidang->nm_bidang; ?></TD>
					<TD><?php echo $data->ruanglingkup; ?></TD>
					<TD><?php echo $data->tahun; ?></TD>
				</TR>
				<?php } ?>
			</TBODY>
		</table>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
		
		<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> 
		<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script> 
		<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script> 
		<script src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script> 
		<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script> 

		<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script> 
		<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script> 
		<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script> 
		<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script> 

		<script type="text/javascript">

			$(document).ready(function() {
				var table = $('#example').DataTable({
					dom: 'Bfrtip',
					buttons: [
					{
						extend: 'excel',
						text: '<i class="fa fa-excel-o"></i> Excel',
					},					
					{
						extend: 'pdfHtml5',
						text: '<i class="fa fa-pdf-o"></i> PDF',
						download: 'open'
					},
					{
						extend: 'print',
						text: '<i class="fa fa-print"></i> Print All',
						title: 'DAFTAR STANDAR/PEDOMAN',
						customize: function ( win ) {
							$(win.document.body)
							.css( 'font-size', '9pt' )
							$(win.document.body).find( 'table' )
							.addClass( 'compact' )
							.css( 'font-size', 'inherit' );
						},
						"columnDefs": [
						{ "visible": false, "targets": 2 }
						],
						"order": [[ 2, 'asc' ]],
						"displayLength": 25,
						"drawCallback": function ( settings ) {
							var api = this.api();
							var rows = api.rows( {page:'current'} ).nodes();
							var last=null;

							api.column(2, {page:'current'} ).data().each( function ( group, i ) {
								if ( last !== group ) {
									$(rows).eq( i ).before(
										'<tr class="group"><td colspan="5">'+group+'</td></tr>'
										);

									last = group;
								}
							} );
						}
					},
					{
						extend: 'print',
						text: '<i class="fa fa-print"></i> Selected',
						exportOptions: {
							modifier: {
								selected: true
							}
						},
						customize: function ( win ) {
							$(win.document.body)
							.css( 'font-size', '9pt' )
							$(win.document.body).find( 'table' )
							.addClass( 'compact' )
							.css( 'font-size', 'inherit' );
						}
					},

					],
					select: true,

					"columnDefs": [
					{ "visible": false, "targets": 2 }
					],
					"order": [[ 2, 'asc' ]],
					"displayLength": 25,
					"drawCallback": function ( settings ) {
						var api = this.api();
						var rows = api.rows( {page:'current'} ).nodes();
						var last=null;

						api.column(2, {page:'current'} ).data().each( function ( group, i ) {
							if ( last !== group ) {
								$(rows).eq( i ).before(
									'<tr class="group"><td colspan="5">'+group+'</td></tr>'
									);

								last = group;
							}
						} );
					}
				} );

				    // Order by the grouping
				    $('#example tbody').on( 'click', 'tr.group', function () {
				    	var currentOrder = table.order()[0];
				    	if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
				    		table.order( [ 2, 'desc' ] ).draw();
				    	}
				    	else {
				    		table.order( [ 2, 'asc' ] ).draw();
				    	}
				    } );
				} );
			</script>