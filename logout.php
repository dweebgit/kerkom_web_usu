<?php 
  
  require('inc/essedentials.php');

  session_start();
  session_destroy();
  redirect('index.php');
?>