<?php

   //pass a db connexion

   //builder? //reusable ==> SMALL, no side effect if not void

    use App\model\database\Database;
    use App\model\database\DbConn;


    $hostConn = new DbConn(dbHost, dbUsername, dbPassword);
    $conn = $hostConn->connect(dbName);

