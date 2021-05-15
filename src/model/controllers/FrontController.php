<?php

 namespace controllers;


 class FrontController
 {

    public function __construct(){


    }

    public function displayPage($templateFolder, $template){
       
        echo "displaying a page...";

        include "src/views/templates/$templateFolder/{$template}.php";

    }


 }