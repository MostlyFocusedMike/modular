<?php 
  require __DIR__ . '/app/src/app.php';


require 'Router.php';
$router = new Router;

require 'routes.php';
$uri = trim($_SERVER['REQUEST_URI'], '/');
//echo '<h1>' . $_SERVER['REQUEST_URI'] . '</h1>';
//echo $_SERVER["DOCUMENT_ROOT"];
require $router->direct($uri);

?>
