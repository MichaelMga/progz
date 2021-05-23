<?php

namespace App\model\orm;

use App\model\entities\Entity;
use App\model\entities\Repository;
use App\model\database\TableHandler;


require_once 'src/services/database/dbConn.php';

$element = 10;

class SuperOrm
{


   public function __construct(){

      global $conn;

      $this->conn = $conn;

      $this->tableHandler = new TableHandler($this->conn);

   }


   public function getRepository(string $entityName)
   { 

      //get a table , and get a row, or all the rows

      return $this->tableHandler->getTable($entityName)->getRowHandler();

   }




 




}