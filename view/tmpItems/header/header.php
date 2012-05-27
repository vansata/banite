<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>/style.css" media="all" />
        <link rel="stylesheet" media="all" href="<?php echo STYLE; ?>type/folks.css" />
        <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="view/style/css/ie7.css" media="all" />
        <![endif]-->
        <script type="text/javascript" src="<?php echo JS_PATH; ?>/jquery-1.5.min.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH; ?>/ddsmoothmenu.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH; ?>/scripts.js"></script>
    </head>
    <body>
        <div id="container"> 
            <!-- Begin Header Wrapper -->
            <div id="page-top">
                <div id="header-wrapper"> 
                    <!-- Begin Header -->
                    <div id="header">

                        <div id="logo"><a href="index.html"><img src="<?php echo IMG_PATH; ?>/logo.png" alt="Delphic" /></a>
                        </div>


                        <!-- Logo --> 
                        <!-- Begin Menu -->
                        <div id="menu-wrapper">
                            <div id="smoothmenu1" class="ddsmoothmenu">

                                <?php echo $menu; ?>
                            </div>
                        </div>
                        <!-- End Menu -->   
                    </div>
                    <!-- End Header --> 
                </div>
            </div>
            <!-- End Header Wrapper --> 
<!-- Begin Wrapper -->
  <div id="wrapper"> 
