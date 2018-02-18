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
        return $this->routes['404'];
        //
      }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
}
