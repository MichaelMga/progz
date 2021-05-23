<?php

namespace App\controllers\abstract; 

use App\model\orm\SuperOrm;


abstract class AbstractController
{

  
   public function getSuperOrm()
   {
      return new SuperOrm();
   }


}