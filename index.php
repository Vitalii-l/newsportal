<?php

session_start();
include_once 'inc/database.php';
require 'model/category.php';
require 'model/news.php';

include_once 'view/news.php';

include_once 'controller/controller.php';
include_once 'route/routing.php';

echo $response;

?>