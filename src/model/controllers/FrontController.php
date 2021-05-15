<?php

 namespace controllers;


 class FrontController
 {
     private $router;

    public function __construct($router){

        $this->router = $router;

    }

    public function displayPage($url){

        try{    

           $folder = $this->router->getTemplateFolderFromUrl($url);
           include "src/views/templates/$folder/{$url}.php";

        } catch(Exception $e){

             echo $e->getMessage();

        }


    }


 }