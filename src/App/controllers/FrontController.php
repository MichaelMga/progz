<?php

 namespace App\controllers;

 require_once 'src/autoload.php';

 use App\controllers\abstractClass\AbstractController;

 require_once "src/services/database/entityManager.php";




class FrontController extends AbstractController
{


    public static function display($templatea, $templateb) : Response
    {
        //return new Response("ok, the response is : $templatea");

        return parent::render("folder/file");

    }


    
    public static function insertArticle()
    {
        $article = Self::getArticle(1);
        global $entityManager;
        $entityManager->insert();
    }


    public static function getArticle(int $id)
    {
       $article = parent::getSuperOrm()->getRepository("controllers")->getElementFromId($id)->getPropertyValue("name");


    }






}