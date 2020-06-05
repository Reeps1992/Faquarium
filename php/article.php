<?php

$id = htmlspecialchars($_GET['id']);
require 'app/articles.php';
$article = $articles[$id];
$title = $articles[$id]['name'];

require 'html/template/head.phtml';
require 'html/template/header.phtml';
require 'html/article.phtml';
require 'html/template/footer.phtml';

 ?>
