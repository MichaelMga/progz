<?php

 namespace App\controllers;
 
 use App\controllers\abstractClass\AbstractController;


class FrontController extends AbstractController
{


    public static function display($templatea, $templateb) : Response
    {
        
        //return new Response("ok, the response is : $templatea");

        return parent::render("folder/file");

    }


    public static function getOrm()
    {
        
        return parent::getSuperOrm();

    }


    
    


}