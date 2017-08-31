<?php
/* @var $this UserController */
/* @var $model User */
$this->breadcrumbs=array(
	SearchData::model()->type($type)=>array($type),
	);

foreach (SearchData::get_detail_SNI($id) as $data) {
	$no_nspm = $data['NO_NSPM'];
	$judul = $data['JUDUL1'];
	$tanggal = $data['TG_KEPBSN'];
	$kategori = $data['NM_KATEGORI1'];
	$jenis = $data['NM_JENIS_STANDAR1'];
	$ruang_lingkup = $data['RUANG1'];
	$bagian = $data['NM_LIST_KATEGORI1'];
	$nama_gugus = $data['NM_GUGUS'];
	$nama_patek = $data['NM_PATEK'];
	$nama_subpatek = $data['NM_SUBPATEK'];
	$nama_unit = $data['NM_UNIT'];
	$nama_dana = $data['NM_DANA'];
	$no_padanan = $data['NO_PADANAN'];
	$d_acuan = $data['d_acuan'];
	$no_ics = $data['NO_ICS'];
	$file_isi = $data['file_isi'];
	$file_ringkasan = $data['file_ringkasan'];
}							 

$this->pageTitle= "Detail ".SearchData::model()->type($type).' - '.$judul;
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

				<section class="kode-author-detail-2">
					<div class="container">

						<div class="kode-thumb">
							
							<div class="row">
								<div class="col-md-12">
									<table class="table">
										<tbody><tr>
											<td>Sub Pantek</td>
											<td><b><?php echo $nama_subpatek; ?></b></td>
										</tr>
										<tr>
											<td>Unit Penyusun</td>
											<td><b><?php echo $nama_unit; ?></b></td>
										</tr>
										<tr>
											<td>Padanan</td>
											<td><b><?php echo $no_padanan; ?></b></td>
										</tr>
										<tr>
											<td>Acuan</td>
											<td><b><?php echo $d_acuan; ?></b></td>
										</tr> 
										<tr>
											<td>No.ICS</td>
											<td><b><?php echo $no_ics; ?></b></td>
										</tr> 	
										<tr>
											<td>Pemrakarsa</td>
											<td><b><?php echo $nama_dana; ?></b></td>
										</tr> 																				                                 
									</tbody></table>

									<p style="text-align:justify;"><?php echo $ruang_lingkup; ?></p>	
								</div>

								<button class="btn btn-warning btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-download"></i> Download <?php echo $no_nspm; ?></button>

								<HR>

									<?php if(YII::app()->user->isGuest){ ?>
										<div class="alert alert-warning">
											Silahkan Login agar dapat mengomentari dokumen "<?php echo $judul; ?>" ini
										</div>
										<?php }else{ ?>
											<?php echo $this->renderPartial('_form_komentar', array('model'=>$model)); ?>
											<?php } ?>



										</div>

									</div>

									<div class="kode-text">
										<h2><?php echo $no_nspm; ?></h2>
										<h5><?php echo $judul; ?></h5>	
										<div class="contact-box">
											<div class="row">
												<div class="col-md-12">
													<table>
														<tbody><tr>
															<td><i class="fa fa-calendar"></i></td>
															<td>Tanggal Penetapan</td>
															<td><?php echo $tanggal; ?></td>
														</tr>
														<tr>
															<td><i class="fa fa-archive"></i></td>
															<td>Kategori Standar</td>
															<td><?php echo $kategori; ?></td>
														</tr>
														<tr>
															<td><i class="fa fa-file-o"></i></td>
															<td>Jenis Standar</td>
															<td><?php echo $jenis; ?></td>
														</tr>
														<tr>
															<td><i class="fa fa-tag"></i></td>
															<td>Bagian Standar</td>
															<td><?php echo $bagian; ?></td>
														</tr>                                  
													</tbody>
												</table>
											</div>
										</div>
									</div>

									<div class="signature">
										<HR>

											<div class="detailBox col-md-12">
												<div class="titleBox">
													<label>Komentar</label>
												</div>
												<div class="actionBox">
													<ul class="commentList">

														<?php $this->widget('zii.widgets.CListView', array(
															'dataProvider'=>$dataKomentar,
															'itemView'=>'_view_komentar',
															)); ?>

														</ul>

													</div>
												</div>

											</div>
										</div>

									</section>
								</div>
							</div>
						</div>
					</div>									


					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Download</h4>
								</div>
								<div class="modal-body">

									<?php if(YII::app()->user->isGuest){ ?>
										<div class="alert alert-warning">
											Silahkan Login agar dapat mendownload dokumen "<?php echo $judul; ?>" ini
										</div>
										<?php }else{ ?>
											<a class="btn btn-info btn-block"  href="<?php echo YII::app()->baseUrl; ?>/image/sni/isi/<?php echo $file_isi; ?>" class="btn btn-warning btn-block"><i class="fa fa-download"></i> Download File Isi</a>
											<a class="btn btn-success btn-block"  href="<?php echo YII::app()->baseUrl; ?>/image/sni/ringkasan/<?php echo $file_ringkasan; ?>" class="btn btn-warning btn-block"><i class="fa fa-download"></i> Download File Ringkasan</a>
											<?php } ?>

										</div>
										<div class="modal-footer">
											<?php if(YII::app()->user->isGuest){ ?>
												<?php echo CHtml::link('<i class="fa fa-user"></i> Registrasi',
													array('site/registrasi'),
													array('class' => 'btn btn-primary btn-flat','title'=>'Buat Akun'));
												?>
												<?php echo CHtml::link('<i class="fa fa-lock"></i> Login',
													array('site/masuk'),
													array('class' => 'btn btn-primary btn-flat','title'=>'Masuk'));
												?>
												<?php }else{ ?>
													<?php echo CHtml::link('<i class="fa fa-power-off"></i> Logout',
														array('site/logout'),
														array('class' => 'btn btn-primary btn-flat','title'=>'Keluar'));
													?>
													<?php } ?>

												</div>
											</div>

										</div>
									</div>

									<style type="text/css">
										.detailBox {border:1px solid #bbb; } .titleBox {padding:10px; } .titleBox label{color:#444; margin:0; display:inline-block; } .commentBox {padding:10px; border-top:1px dotted #bbb; } .commentBox .form-group:first-child, .actionBox .form-group:first-child {width:80%; } .commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {width:18%; } .actionBox .form-group * {width:100%; } .taskDescription {margin-top:10px 0; } .commentList {padding:0; list-style:none; max-height:200px; overflow:auto; } .commentList li {margin:0; margin-top:10px; } .commentList li > div {display:table-cell; } .commenterImage {width:50px; margin-right:5px; height:100%; float:left; } .commenterImage img {width:100%; } .commentText p {margin:0; } .sub-text {color:#aaa; font-family:verdana; font-size:11px; } .actionBox {border-top:1px dotted #bbb; padding:10px; } 
									</style>