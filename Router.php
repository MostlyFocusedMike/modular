<?php

class Router {
  protected $routes = array();
  
  public function define($routes) {
    $this->routes = $routes; 
  }
  
  public function direct($uri) {
    try {
      if (array_key_exists($uri, $this->routes)) {
        return $this->routes[$uri];
      } else {
        header("Location: /404"); //this is how you redirect the user
        die(); //this kills the current page and takes you to the header
      }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
}
