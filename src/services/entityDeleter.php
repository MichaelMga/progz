<?php

//passing the dbConn service

 require_once "src/services/database/database.php";

 use App\model\entities\EntityDeleter;

 $entityDeleter = new EntityDeleter($db); 
