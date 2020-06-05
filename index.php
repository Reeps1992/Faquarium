<?php

require 'app/functions.php';
require 'app/articles.php';

switch (htmlspecialchars($_GET['p'])) {

  case 'home':
    require 'php/home.php';
    break;

  case 'about':
    require 'php/about.php';
    break;

  case 'access':
    require 'php/access.php';
    break;

  case 'article':
    require 'php/article.php';
    break;

  case 'reservation':
    require 'php/reservation.php';
    break;

  case 'parc':
    require 'php/parc.php';
    break;

  default:
    default_redirect();
    break;
}

 ?>
