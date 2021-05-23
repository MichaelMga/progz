<?php

namespace App\model\orm;

use App\model\entities\Entity;
use App\model\entities\Repository;



class SuperOrm
{
   private $conn;

   public function __construct($conn){

      $this->conn = $conn;

   }


   public function getRepository(string $entityName)
   { 

      //get a table , and get a row, or all the rows

      

   }





}