<?php

 namespace App\controllers;

 require_once 'src/autoload.php';

 use App\controllers\abstractClass\AbstractController;
 use App\component\httpComponent\Response;
 use App\model\entities\Entity;


 require_once "src/services/database/entityManager.php";




class FrontController extends AbstractController
{


    public function displayHome($templatea, $templateb) : Response
    {
        //return new Response("ok, the response is : $templatea");

        return $this->render("folder/file");

    }


    
    public function insertArticle()
    {
        $article = parent::getSuperOrm()->getRepository("controllers")->getElementFromId(1);

        $entity = new Entity();

        $entity->setProperty("table", "controllers");
        $entity->setProperty("name", "myXXcontroller");
        $entity->setProperty("ID", 0);

    

        if($article != false)
        {
            global $entityManager;   
            $entityManager->insert($article);

        }
      
    }


    public function getArticle(int $id)
    {
       $article = parent::getSuperOrm()->getRepository("controllers")->getElementFromId($id);
        
       return $article;

    }


}