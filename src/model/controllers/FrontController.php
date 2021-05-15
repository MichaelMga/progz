<?php

 namespace controllers;


 class FrontController
 {

    public function __construct(){


    }

    public function displayPage($templateFolder, $template){

        include "src/views/templates/$templateFolder/{$template}";

    }


 }