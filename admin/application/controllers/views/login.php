<!DOCTYPE html>

<html lang="en" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <title>Admin Sekolah</title>

    <!-- Begin Page Progress Bar Files -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/pace-0.5.1/pace.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/js/plugins/pace-0.5.1/themes/pace-theme-minimal.css" rel="stylesheet">
    <!-- // Page Progress Bar Files -->

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    
    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="<?php echo base_url(); ?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" />
    <!-- Date Range Picker Stylesheet -->

    <!-- Add custom CSS here -->
    <script type="text/javascript">
        less = {
            env: "development", // or "production"
        };
    </script>

        <link href="<?php echo base_url(); ?>assets/css/style_default.css" rel="stylesheet" id="style_color" />
    
        <!-- Style LESS -->
    <link href="<?php echo base_url(); ?>assets/less/animate.less?1411036864" rel="stylesheet/less" />
        
    
</head>

<body id="login">

    <div id="wrapper">
        
        <div id="page-wrapper" style="min-height:630px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    Administrator SMA Pramita Tangerang
                </div>
                <div class="panel-body">
                
                    <?php echo @$this->session->flashdata('confirm'); ?>
                
                
                    <form role="form" action="<?php echo base_url(); ?>login/proses/" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama pengguna" name="username" type="name" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Kata sandi" name="password" type="password" value="" required>
                            </div>

                            

                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-success pull-right" value="Login">
                        </fieldset>
                        <hr>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>        </div>
        <!-- /#page-wrapper -->

   
        <!-- End of Sidebar Right -->

        
    </div>
    <!-- /#wrapper -->
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>

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
    </body>
</html>
