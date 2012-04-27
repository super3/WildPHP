<?php 
// Set Pages
if( !isset($_GET['page']) ) { $page = 'index'; }
else { $page = $_GET['page']; }

// Better Sanitize That GET Data
strtolower ( trim ( $page ) );
$page = filter_var($page, FILTER_SANITIZE_STRING);

// Check to See if the Page Exsists
if(!file_exists('view/pages/'.$page.'.php'))
	$page = '404';

// Show Regular Page
include_once('view/template/header.php');
include_once('view/pages/'.$page.'.php'); 
include_once('view/template/footer.php'); 
?>