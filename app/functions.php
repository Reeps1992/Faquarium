<?php

function get_page(string $page, string $title)
{
  $title = $title;
  require 'html/template/head.phtml';
  require 'html/template/header.phtml';
  require 'html/'.$page.'.phtml';
  require 'html/template/footer.phtml';
}

function default_redirect(){
  if(htmlspecialchars($_GET['p']) == null){
    header('Location:index.php?p=home');
  }
}

?>
