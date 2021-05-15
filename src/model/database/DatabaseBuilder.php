<?php
 
 namespace database;




 class DatabaseBuilder
 {
     
     private $conn;


    public function __construct(string $host, string $username, string $password){

        $this->conn = new \PDO("mysql:host=$host", $username, $password);
       

    }



    public function createDb($dbname){

        try{
            
            $sql = "CREATE DATABASE $dbname";
            
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            echo "db created!";

        } catch (PDOException $e){

            echo $e->getMessage();
        }


    }


 }