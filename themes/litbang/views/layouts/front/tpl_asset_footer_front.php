<script src="<?php echo $baseUrl;?>/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo $baseUrl;?>/frontend/js/jquery.bxslider.min.js"></script>
<script src="<?php echo $baseUrl;?>/frontend/js/bootstrap-slider.js"></script>
<script src="<?php echo $baseUrl;?>/frontend/js/jquery.counterup.min.js"></script>
<script src="<?php echo $baseUrl;?>/frontend/js/dl-menu/modernizr.custom.js"></script>
<script src="<?php echo $baseUrl;?>/frontend/js/dl-menu/jquery.dlmenu.js"></script>
<script src="<?php echo $baseUrl;?>/frontend/js/functions.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">

$(document).ready(function() {
     if ($.cookie('pop') == null) {
         $('#loader-wrapper').show();
         $.cookie('pop', '7');
     }else{
         $('#loader-wrapper').hide();
     }
 });

	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/58d363c4f7bbaa72709c1f7d/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
	})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
