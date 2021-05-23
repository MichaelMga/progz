<?php

namespace App\model\orm;

use App\model\entities\Entity;
use App\model\entities\Repository;
use App\model\database\TableHandler;


require_once 'src/services/database/dbConn.php';


class SuperOrm
{

   public function __construct(){

      global $conn;
      $this->conn = $conn;
      $this->tableHandler = new TableHandler($this->conn);

   }


   public function getRowHandler(string $entityName)
   { 
      //get a table , and get a row, or all the rows

      return $this->tableHandler->getTable($entityName)->getRowHandler();

   }






}