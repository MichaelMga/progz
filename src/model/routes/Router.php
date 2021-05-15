<?php


 namespace routes;


 class Router
 {
       public $routeCollection = [];




       public function __construct(){




       }



       public function addRoute(string $path, $callable){


          $this->routeCollection[] = [$path => $callable];
        

       }




    
 }