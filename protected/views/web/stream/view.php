<?php if($model->type==1){ ?>
	
	<a rel="nofollow" href="http://50.47.66.157:80/" target="new"><img id="image0" src="<?php echo $model->url; ?>" class="img-responsive img-rounded detailimage" alt="" title="<?php echo $model->name; ?>"/></a>
	<script>
		var ch = 0;
		var imageurls = new Array();
		imageurls[0] = new String("<?php echo $model->url; ?>");
	</script>

	<?php }else{ ?>

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


		<?php } ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

