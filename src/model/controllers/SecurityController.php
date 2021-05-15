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

          $sql="SELECT * FROM users WHERE username= '$username' ";
          $stmt=$this->db->prepare($sql);
          $stmt->execute();

         if($stmt->rowCount() > 0){
         
              echo "sorry, this user is already used";
         
            } else {

              echo "</br> ok, this username was not used";

              try{

                $sql = "INSERT INTO users(username,password) VALUES(:username, :password)";
                $stmt = $this->db->prepare($sql);


                $hash = password_hash($password, PASSWORD_DEFAULT);
 

                $stmt->execute([':username' => $username , ':password' => $hash]);

                echo "user inserted";

              } catch(PDOException $e){
                echo "you cant insert this user";
                echo $e->getMessage();
             }

         }

       } catch(PDOException $e){
         $e->getMessage();
       }

    }


    public function tryToLogin($username, $password){

      try{

        $sql="SELECT * FROM users WHERE username=$username";
        $stmt=$this->db->prepare($sql);
        $stmt->execute();

       if($stmt->rowCount() > 0){
       
            echo "user found!";
       
          } else {

            echo "user not found";

     
       }

     } catch(PDOException $e){
       $e->getMessage();
     }


          

        



    }


    
  }