<?php

namespace database;

class Database
 {

    private $host;
    private $username;
    private $password;

   
   public function __construct(string $host, string $username , string $password){

       $this->host = $host;
       $this->username = $username;
       $this->password = $password;
     
   }



   public function connect($dbName){
        
      try{
          
        echo "connexion ok!";

        return new \PDO("mysql:host=$this->host;dbname=$dbName", $this->username, $this->password);

      } catch (PDOException $e){

        echo $e->getMessage();

      }
      

   }



}