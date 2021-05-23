<?php

namespace App\controllers\abstractClass; 
use App\Component\HttpComponent\Response;


use App\model\orm\SuperOrm;


abstract class AbstractController
{

   public function getSuperOrm()
   {
      return new SuperOrm();
   }

   public function render($pathFromTemplateFolder) : Response
   {
      ob_start();
      echo $pathFromTemplateFolder;
      $path = ob_get_clean();
     
      return new Response(file_get_contents("templates/$path.php"));
   }

}