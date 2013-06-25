<html>
    <head>
        <title>Costrategix collection</title>
        <script type="text/javascript">var baseurl = "<?php print base_url(); ?>";</script>
        <!-- start : jquery stuff -->
        <script type="text/javascript" src="<?= base_url('js/jquery/js/jquery-1.8.0.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/jquery/js/jquery-ui-1.8.23.custom.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/jquery/js/jquery-1.8.0.min.js'); ?>"></script>
	
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url('js/jquery/css/ui-lightness/jquery-ui-1.8.23.custom.css'); ?>" />
	<!-- end : jquery stuff -->
       
        <!-- custom scripts and style sheets -->
        <script type="text/javascript" src="<?= base_url('js/md5.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('js/fieldValidation.js'); ?>"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url('css/siteStyle.css'); ?>" />
        <script type="text/javascript" src="<?= base_url('js/cc_main.js'); ?>"></script>
        <!-- end of custom scripts and style sheets -->
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
              
            <div id='header_links'>
                <?php
                $loggedIn = 1;
                if($loggedIn == 1) { ?>
                Hi, <a href="#">User's Name</a>&nbsp;|&nbsp;<a href="#">Log Out</a> 
                <?php } ?>
            </div>   
        </div>
            <div id="main_content">