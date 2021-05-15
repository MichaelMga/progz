<?php

namespace database;

class Database
 {

    private $dsn;
    private $username;
    private $password;

   
   public function __construct(string $host, string $username , string $password){

       $this->dsn = "mysql:host=$host";
       $this->username = $username;
       $this->password = $password;
     
   }



   public function connect($dbName){
        
      try{
          
        echo "connection ok!";

        return new \PDO($this->dsn, $this->username, $this->password);

      } catch (PDOException $e){

        echo $e->getMessage();

      }
      



   }



}