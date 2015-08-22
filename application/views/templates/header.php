<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// views/templates/headerWIP.php

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mandy Foster  DESIGN | DEVELOP | DEPLOY</title>
    
    <link rel="icon" href="<?=base_url()?>favicon.ico">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Jquery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- RECAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <!-- Google WebFonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" />
    
    <!-- My stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    
    <!-- My Js file -->
    <script src="/js/typed.js"></script>
    <script src="/js/script.js"></script>

</head>
<body>
    
    <ul id="navigation" class="nav nav-pills navbar-fixed-top">
      <li role="presentation"><a href="..">Home</a></li>
      <li role="presentation"><a href="<?php echo base_url("about"); ?>" title="Coming soon">About</a></li>
      <li role="presentation"><a class="void" href="javascript:void(0);" title="Coming soon">Projects</a></li>
      <li role="presentation"><a class="void" href="javascript:void(0);" title="Coming soon">Booking</a></li>
    </ul>
    
    <div id="container" class="container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">