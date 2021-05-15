<?php


 namespace routes;


 class Router
 {
       private $routeCollection = [];
       private $routeFoldersList = [];
       private $db;


       public function __construct(PDO $db){

            $this->db = $db;

       }



       public function addRoute(string $path, $callable){


          $this->routeCollection[] = [$path => $callable];

          //insert into the db;
        

       }


       public function getTemplateFolderFromUrl($url){

      
            //$sql = "SELECT folder FROM routeUrls WHERE path = $url ";


       }


       public function getRouteCollection(){

            return $this->routeCollection;
       }




    
 }