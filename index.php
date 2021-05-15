<?php
 use database\DatabaseBuilder;
 use controllers\SecurityController;
 use controllers\FrontController;
 use routes\Router;

 include 'const.php';
 include 'src/autoload.php';


 //rooter

 $router = new Router();
 $securityController = new SecurityController();
 $FrontController = new FrontController($router);
 


 //$router->addRoute(rootUrl . "login" , function(){ global $FrontController; $FrontController->dislpayPage("admin", "login"); } );

  
 //$router->displayPage($_SERVER["REQUEST_URI"]);



 //add col