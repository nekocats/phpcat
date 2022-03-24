<?php

class Router {

    protected $router = [];

    public function define ( $routes ) {

        $this->routes = $routes;

    }

    public function direct ( $uri ) {

        var_dump($uri);
        var_dump($this->routes);
        die();

        if ( array_key_exists($uri, $this->routes)){
            return $this->routes[$uri]; 
            
        }

        throw new Exception('No route defined for this URI.');
    }
}
    
