        <script src="<?php echo $baseUrl;?>/backend/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/notie/notie.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/jquery.slimscroll.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/jquery.easing.min.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/jquery.placeholder.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/fastclick.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/offline/offline.min.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/pace/pace.min.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/js/off-canvas.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/js/main.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/js/panel.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/summernote/dist/summernote.min.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/select2/dist/js/select2.min.js" type="text/javascript"></script>
        <!-- <script src="<?php echo $baseUrl;?>/backend/vendor/datatables/jquery.dataTables.min.js" type="text/javascript"></script> -->
        <!-- <script src="<?php echo $baseUrl;?>/backend/js/datatables.js"></script> -->
           <script>
          jQuery(document).ready(function(){

            // Summernote
            $('.summernote').summernote({
                              height: 200,                 // set editor height
                              minHeight: null,             // set minimum height of editor
                              maxHeight: null,             // set maximum height of editor
                          });  

            // Select2
            jQuery(".select2").select2({
              width: '100%'
            }); 

            });
            </script> 
</body>
</html>