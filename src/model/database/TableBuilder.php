<?php

namespace database;



class TableBuilder
{
   private $db;
 
   public function __construct(\PDO $db){

       $this->db = $db;
   
    }

   public function createTable($tableName){

      try{    
                  
         $sql = "CREATE TABLE $tableName (ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT)";

         $stmt = $this->db->prepare($sql);
   
         $stmt->execute();

         echo "</br> Table built !!!";

      } catch(PDOException $e){

         echo $e->getMessage();

      }

  
   }
 

}