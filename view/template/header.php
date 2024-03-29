<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A PHP IRC Bot - WildPHP</title>
	<meta name="description" content="Home of the PHP based IRC Bot. We also have free video tutorials, scripts, and articles!">
	<meta name="author" content="Super3">
        <meta name="google-site-verification" content="OVrnDhG71tITwg18HzNw1vkrhtx9mnY6agdQPC1XyG4" />

	<!-- HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Styles -->
	<link href="view/css/bootstrap.css" rel="stylesheet">
	<link href="view/css/style.css" rel="stylesheet">

	<!-- Favicon  -->
	<link rel="shortcut icon" href="view/images/favicon.ico">
        
	<!-- PHP Page Helper -->
	<?php require_once 'view/functions.php'; ?>
</head>
<body>

<!-- Le nav bar -->
<div class="navbar-fixed-top">
	<div class="light-fill">
		<div class="container">
			<ul class="nav nav-pills">
				<li <?php Helper::showActive($page, 'index', true); ?>><a href="index"><i class="icon-home <?php Helper::showIcon($page, 'index'); ?>"></i> Home</a></li>
				<li <?php Helper::showActive($page, 'tutorials', true); ?>><a href="tutorials"><i class="icon-book <?php Helper::showIcon($page, 'tutorials'); ?>"></i> Tutorials</a></li>
				<li <?php Helper::showActive($page, 'code', true); ?>><a href="code"><i class="icon-align-justify <?php Helper::showIcon($page, 'code'); ?>"></i> Code</a></li>
				<!--<li><a href="#">Bots</a></li>-->
				<!--<li><a href="#">Commands</a></li>--> 
				<!--<li><a href="#">Source</a></li>-->
				<!--li style="float: right;" <?php Helper::showActive($page, 'help', true) ?>><a href="help"><i class="icon-flag <?php Helper::showIcon($page, 'help') ?>"></i> Help</a></li>-->
			</ul>
		</div>
	</div>
</div>