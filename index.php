<?php 
  require __DIR__ . '/app/src/app.php';


require 'Router.php';
$router = new Router;

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');

require Router::load('routes.php')->direct($uri);


?>
