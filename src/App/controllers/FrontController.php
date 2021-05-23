<?php

 namespace App\controllers;
 
 use App\controllers\abstractClass\AbstractController;


class FrontController extends AbstractController
{


    public function display($templatea, $templateb)
    {
        
        //return new Response("ok, the response is : $templatea");

        return parent::render("folder/file");

    }


}