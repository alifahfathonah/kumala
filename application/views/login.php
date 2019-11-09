<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Kumala</title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" />

        <link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url();?>assets/sweetalert/sweetalert.min.js"></script>

    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
              <!-- <div class="login-logo">
                <span class="logo-lg"><img style="margin-top:-5px;" width="72" src="<?php echo base_url('images/logo.png')?>"></span>
                <b>asset</b>-KU
              </div> -->
                <div class="panel-heading bg-img">
                    <div class="bg-overlay"></div>

                    <h3 class="text-center m-t-10 text-white"><span class="logo-lg"><img style="margin-top:-5px;" width="72" src="<?php echo base_url('images/logo.png')?>"></span> Kumala Group</strong> </h3>

                </div>


                <div class="panel-body">
                <form class="form-horizontal m-t-20" action="<?php echo base_url('login/proses'); ?>" method="post">
                  <?php
                    if($this->session->flashdata('psn_error')){
                      $pesan = $this->session->flashdata('psn_error');
                      echo '<script>';
                      echo 'swal("'. $pesan .'", {icon: "error", button:false, timer:1500});';
                      echo '</script>';
                    }
                  ?>
                  <?php
                    if(validation_errors()){
                      $pesan = "Kolom username dan password harus diisi!";
                      echo '<script>';
                      echo 'swal("'. $pesan .'", {icon: "error", button:false, timer:1500});';
                      echo '</script>';
                    }
                  ?>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " type="text"  placeholder="Username" name="txt_username" >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password"  placeholder="Password" name="txt_password">
                        </div>
                    </div>



                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>


                </form>
                </div>

            </div>
        </div>


    	<script>
        var resizefunc = [];
        </script>
    	  <script src="<?php echo base_url();?>js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <!-- <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script> -->





        <!-- CUSTOM JS -->
        <!-- <script src="js/jquery.app.js"></script> -->
        <!-- <script src="< ?php echo base_url();?>assets/sweetalert/sweetalert.min.js"></script> -->

	</body>
</html>
