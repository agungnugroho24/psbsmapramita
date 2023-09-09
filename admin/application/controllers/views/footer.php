 </div>
    <!-- /#wrapper -->
    <!-- Core Scripts - Include with every page -->

    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-cookie/jquery.cookie.js"></script>

    <script type="text/javascript">
        var primaryColor = '#303641',
            dangerColor = '#F22613',
            successColor = '#2ecc71',
            warningColor = '#F5AB35',
            infoColor = '#3498db',
            inverseColor = '#111',
            cursorColor = ( $.cookie('cursorColor') ) ? $.cookie('cursorColor') : '#333';
        
                $.cookie('dev', false);
        
        // Setting URL 
        var url = '<?php echo base_url(); ?>assets/',
            time = '1411036864';

        var themeStyle = ( $.cookie('themeStyle') ) ? $.cookie('themeStyle') : 'style_default';
        
        if ( $.cookie('dev') == 'true') {
            $("#style_color").attr('href', url + 'less/'+themeStyle+'.less?' + time);
        } else {
            $("#style_color").attr('href', url + 'css/'+themeStyle+'.css');
        }
    </script>


    <!-- jQuery easing | Script -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
    
    <!-- Bootstrap minimal -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- Bootstrap Switch | Script -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <!-- Sparkline | Script -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/sparklines/jquery.sparkline.js"></script>
    <!-- Easy Pie Charts | Script -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/easy-pie/jquery.easypiechart.min.js"></script>
    <!-- Date Range Picker | Script -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- BlockUI for reloading panels and widgets -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/block-ui/jquery.blockui.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/holder.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    
     <!--<script src="<?php echo base_url(); ?>assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script> 
    Init Scripts - Include with every page -->
    
    <script src="<?php echo base_url(); ?>assets/js/init.js"></script>

    <script type="text/javascript">
        var load = true;
     </script>
	    <?php if(@$footer_js=="dataTables"){ ?>
    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
    <?php } if(@$footer_js=="dashboard"){ ?>
    <script src="<?php echo base_url(); ?>assets/js/demo/dashboard.js"></script>
	<?php } if(@$footer_js=="validations"){ ?>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.validate/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.inputmask/jquery.inputmask.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo/validation.js"></script>
	
    <script src="<?php echo base_url(); ?>assets/js/demo/form-elements.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/editor/jquery.cleditor.css" />
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/editor/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/editor/jquery.cleditor.min.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {
				
                $("#summernote").cleditor(); 
			});
            <?php if(@$footer_jsu!=""){ ?>
            document.getElementById("uploadBtns").onchange = function () {
                document.getElementById("uploadFile").value = this.value; 
            };
            <?php } else{ ?>
			document.getElementById("uploadBtn").onchange = function () {
				document.getElementById("uploadFile").value = this.value;
			};
            <?php } ?>
			function showMyImage(fileInput, ids) {
					var files = fileInput.files;
					for (var i = 0; i < files.length; i++) {           
						var file = files[i];
						var imageType = /image.*/;     
						if (!file.type.match(imageType)) {
							continue;
						}           
						var img=document.getElementById(ids);            
						img.file = file;    
						var reader = new FileReader();
						reader.onload = (function(aImg) { 
							return function(e) { 
								aImg.src = e.target.result; 
							}; 
						})(img);
						reader.readAsDataURL(file);
					}    
				}
                
</script>
    <?php } ?>
    
    </body>
</html>
