<?php
  include('pages/_header.php');
  include('pages/navbar.php');

  if (!empty($_GET['p']) {
    $page = basename($_GET['p']);
    
    if (!file_exists('texts/'.$page.".php") {
      include('pages/404.php')
    }
        
    include('texts/'.$page.".php");
    include('pages/product.php');
    
  } else {
    include('pages/index.php');
  }
  
  include('pages/_footer.php');
?>