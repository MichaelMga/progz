<?php
 use database\Database;
 use database\DatabaseBuilder;
 use database\TableBuilder;
 use database\TableUpdater;

 use controllers\SecurityController;
 use controllers\FrontController;
 use routes\Router;

 include 'const.php';
 include 'src/autoload.php';


 //rooter

 $db = new Database("localhost", "root", "");
 
 $db = $db->connect("progzdb");

 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $router = new Router($db);
 $securityController = new SecurityController($db);
 $FrontController = new FrontController($router);


 $securityController->tryToRegister("micka", "pass");


 //$router->addRoute(rootUrl . "login" , function(){ global $FrontController; $FrontController->dislpayPage("admin", "login"); } );

  
 //$router->displayPage($_SERVER["REQUEST_URI"]);
 


 //$securityController->tryToLogin("mike", "password");