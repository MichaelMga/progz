<?php

  namespace controllers;


  class SecurityController
  {

     private $db;


    public function __construct($db){

       $this->db = $db;


    }


    public function tryToRegister($username, $password){
         
       try{

         $sql="SELECT * FROM users WHERE username=$username";
         $stmt=$this->db->prepare($sql);
         $stmt->execute();


         if($stmt->rowCount() > 0){

               echo "sorry, this user is already used";

         } else {


             echo "ok, this username was not used";



         }




       } catch(PDOException $e){

         $e->getMessage();

       }



    }


    public function tryToLogin($username, $password){



    }


    
  }