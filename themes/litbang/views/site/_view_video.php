<center>
	<iframe width="16" height="9" src="https://www.youtube.com/embed/<?php echo $data->url; ?>" frameborder="0" allowfullscreen></iframe>
</center>

<h4><?php echo $data->name; ?></h4>

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
