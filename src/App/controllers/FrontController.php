<?php

 namespace App\Controllers;
 
 use App\Component\HttpComponent\Response;

class FrontController 
{


    public static function display($templatea, $templateb) : Response
    {
        
        return new Response("ok, the response is : $templatea");
        
    }



}