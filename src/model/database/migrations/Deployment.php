<?php
  use database\DatabaseBuilder;

  include '../DatabaseBuilder.php';


  //build db 
  
  $databaseBuilder = new DatabaseBuilder("localhost","root","");

  $databaseBuilder->createDb("progzdb");
