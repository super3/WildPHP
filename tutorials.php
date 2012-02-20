<?php 
// Set Pages
if( !isset($_GET['page']) ) { $page = 'simple-irc-bot'; }
else { $page = $_GET['page']; }

// Get Page
include_once('view/template/header.php');
include_once('view/tutorials/'.$page.'.php'); 
include_once('view/template/footer.php'); 
?>