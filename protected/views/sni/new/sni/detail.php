<?php
/* @var $this SniController */
/* @var $model Sni */

$this->breadcrumbs=array(
	'Snis'=>array('index'),
	$model->id_standar,
	);

$this->pageTitle="Detail ". $model->judul;
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
									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'judul',
											'no_nspm',
											'tahun',
											'jumlah_hal',
											),
											)); ?>

											<p style="text-align:justify;"><?php echo $model->ruanglingkup; ?></p>	
										</div>

										<button class="btn btn-warning btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-download"></i> Download <?php echo $model->no_nspm; ?></button>

										<HR>

											<?php if(YII::app()->user->isGuest){ ?>
												<div class="alert alert-warning">
													Silahkan Login agar dapat mengomentari dokumen "<?php echo $model->judul; ?>" ini
												</div>
												<?php }else{ ?>
													<?php echo $this->renderPartial('_form_komentar', array('komentar'=>$komentar)); ?>
													<?php } ?>



												</div>

											</div>

											<div class="kode-text">
												<h2><?php echo $model->no_nspm; ?></h2>
												<div class="contact-box">
													<div class="row">
														<div class="col-md-12">
															<table>
																<tbody>
																	<tr>
																		<td><i class="fa fa-tag"></i></td>
																		<td>Bidang</td>
																		<td><?php echo $model->kd_bidang == NULL ? "-" : $model->Bidang->nm_bidang; ?></td>
																	</tr> 																
																	<tr>
																		<td><i class="fa fa-file-o"></i></td>
																		<td>Sub Bidang</td>
																		<td><?php echo $model->kd_subbidang == NULL ? "-" : $model->SubBidang->NM_LIST_KATEGORI1; ?></td>
																	</tr>																
																	<tr>
																		<td><i class="fa fa-calendar"></i></td>
																		<td>Tahun</td>
																		<td><?php echo $model->tahun; ?></td>
																	</tr>
																	<tr>
																		<td><i class="fa fa-archive"></i></td>
																		<td>Jenis</td>
																		<td><?php echo $model->kd_jenisstandar == NULL ? "-" : $model->JenisStandar->NM_JENIS_STANDAR1; ?></td>
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
														Silahkan Login agar dapat mendownload dokumen "<?php echo $model->judul; ?>" ini
													</div>
													
													<?php }else{ ?>
                                                        <?php if($model->status_isi!=0){ ?>
														<a href="<?php echo YII::app()->baseUrl; ?>/image/sni/isi/<?php echo $model->file_isi; ?>" class="btn btn-warning btn-block"><i class="fa fa-download"></i> Download File Isi</a>
														<?php }else{ ?>
														        <BR>
														    	<div class="alert alert-info">
													                	Dokumen isi "<?php echo $model->judul; ?>" belum tersedia.
													            </div>
													            <BR>
														<?php } ?>
														
														<?php if($model->status_ringkasan!=0){ ?>
														<a href="<?php echo YII::app()->baseUrl; ?>/image/sni/ringkasan/<?php echo $model->file_ringkasan; ?>" class="btn btn-warning btn-block"><i class="fa fa-download"></i> Download File Ringkasan</a>
													    <?php }else{ ?>
													            <BR>
														        <div class="alert alert-info">
													                	Dokumen Ringkasan "<?php echo $model->judul; ?>" belum tersedia.
													            </div>
													            <BR>
														<?php } ?>
														
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

												<script type="text/javascript">
													$( document ).ready(function() {
														$('a[href$="pdf"]').addClass('download-link download-pdf');
														$('a[href$="doc"]').addClass('download-link download-doc');
														$('a[href$="docx"]').addClass('download-link download-docx');
														$('a[href$="xls"]').addClass('download-link download-xls');
														$('a[href$="xlsx"]').addClass('download-link download-xlsx');
													});
												</script>