<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A PHP IRC Bot - WildPHP</title>
	<meta name="description" content="Home of the PHP based IRC Bot. We also have free video tutorials, scripts, and articles!">
	<meta name="author" content="Super3">

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
        <?php 
            require_once 'view/functions.php';
        ?>
</head>
<body>

<!-- Le nav bar -->
<div class="navbar-fixed-top">
	<div class="light-fill">
		<div class="container">
			<ul class="nav nav-pills">
                            <li <?php Helper::showActive($page, 'index', true) ?>><a href="index.php">Home</a></li>
				<li class="small-pad<?php Helper::showActive($page, 'tutorials', false) ?>"><a href="index.php?page=tutorials">Tutorials</a></li>
				<li><a href="#">Bots</a></li>
				<li><a href="#">Commands</a></li>  
				<li><a href="#">Source</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
	</div>
</div>