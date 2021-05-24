<?php

 namespace App\model\entities;

  use App\model\entities\Entity;
  use App\model\database\table\Table;
  use App\model\database\table\RowToObjectConverter;




 class Repository
 {
    private $table;

    public function __construct($conn, $table){
        $this->table = $table;
        $this->tableConn = new Table($conn, $table);
    }

    

    public function getElementFromId(int $id)
    {
       $rowArray = $this->tableConn->getRowHandler()->getTable($this->table);
       
       //convert it into an object
       
       $rowConverter = new RowToObjectConverter($rowArray);

       $entity = $rowConverter->getObject();

       return $entity;

    }



 }