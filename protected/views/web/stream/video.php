<?php
/* @var $this StreamController */
/* @var $model Stream */

$this->breadcrumbs=array(
	'Streams'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Stream';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
		array('update', 'id'=>$model->id_stream,
			), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Stream'));
			?>
			<?php echo CHtml::link('<i class="fa fa-image"></i>', 
				array('image', 'id'=>$model->id_stream,
					), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Image'));
					?>			
					<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
						array('delete', 'id'=>$model->id_stream,
							),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Stream'));
							?>

						</span> 

						<span class="hidden-xs">

							<?php echo CHtml::link('Edit', 
								array('update', 'id'=>$model->id_stream,
									), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Stream'));
									?>
									<?php echo CHtml::link('Image', 
										array('image', 'id'=>$model->id_stream,
											), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Image'));
											?>
											<?php echo CHtml::link('Delete', 
												array('delete', 'id'=>$model->id_stream,
													),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Stream'));
													?>

												</span>


												<HR>

													<?php $this->widget('zii.widgets.CDetailView', array(
														'data'=>$model,
														'htmlOptions'=>array("class"=>"table"),
														'attributes'=>array(
															'name',
															'description',
															),
															)); ?>

															<div class="col-md-12 col-xs-12 col-lg-12">
																<iframe width="16" height="9" src="https://www.youtube.com/embed/<?php echo $model->url; ?>" frameborder="0" allowfullscreen></iframe>
															</div>

															

															<script type="text/javascript">
															// -- After the document is ready
																$(function() {
														  // Find all YouTube and Vimeo videos
																	var $allVideos = $("iframe[src*='www.youtube.com'], iframe[src*='player.vimeo.com']");

														  // Figure out and save aspect ratio for each video
																	$allVideos.each(function() {
																		$(this)
																		.data('aspectRatio', this.height / this.width)
														      // and remove the hard coded width/height
																		.removeAttr('height')
																		.removeAttr('width');
																	});

														  // When the window is resized
																	$(window).resize(function() {
														    // Resize all videos according to their own aspect ratio
																		$allVideos.each(function() {
																			var $el = $(this);
														      // Get parent width of this video
																			var newWidth = $el.parent().width();
																			$el
																			.width(newWidth)
																			.height(newWidth * $el.data('aspectRatio'));
																		});

														  // Kick off one resize to fix all videos on page load
																	}).resize();
																});
															</script>



															<STYLE>
																th{width:150px;}
															</STYLE>

