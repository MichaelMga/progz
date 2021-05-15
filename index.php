<?php

 use controllers\SecurityController;
 use controllers\MainController;

 use routes\Router;

 include 'const.php';
 include 'src/autoload.php';



 //rooter


 $router = new Router();
 $securityController = new SecurityController();
 $mainController = new MainController();

 
 function myFunction(){

    echo "my function called";
 }


 $router->addRoute(rootUrl . "fct" , function(){ global $mainController; $mainController->test(); } );

 print_r($router->routeCollection[0][rootUrl . "fct"]());

