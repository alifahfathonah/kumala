<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Kumala Group</title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet" type="text/css"/>

        <!-- Waves-effect -->
        <link href="<?php echo base_url();?>css/waves-effect.css" rel="stylesheet" type="text/css"/>


        <!-- DataTables -->
        <link href="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

        <!-- Select2 -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/select2/css/select2.min.css" type="text/css" />


        <!-- Custom Files -->
        <link href="<?php echo base_url();?>css/helper.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- <script src="< ?php echo base_url();?>js/modernizr.min.js"></script> -->

    </head>



    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?= base_url('dashboard');?>" class="logo">
                          <img width="48" src="<?php echo base_url('images/logo.png')?>">
                          <span>Kumala GROUP</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>


                            <ul class="nav navbar-nav navbar-right pull-right">

                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="images/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:alert('profil')"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:alert('setting')"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:alert('locksreen')"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="<?php echo base_url('login/keluar'); ?>"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
