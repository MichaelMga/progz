<?php

namespace App\model\database\table\handlers;



class RowHandler
{
    
    private $table;
    private $conn;

    public function __construct($conn, string $table)
    {
        $this->table = $table;
        $this->conn = $conn;

    }

    public function insertRow() : void
    {


    }


    public function getRowFromId(string $id) : array
    {

        $sql = "SELECT * FROM $this->table WHERE id=:id" ;
        $stmt = $this->conn->prepare([":id" => $id]);
        $stmt->execute();
   
        
        return $stmt->fetchAll();

    }

    public function getAllRows() : array
    {

        $sql = "SELECT * FROM $this->table" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }


    public function updateRow($row,$id, $value) : void
    {
        $sql = "UPDATE $this->table SET $row='$value' WHERE ID=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function removeRow($id) : void
    {
        $sql = "DELETE FROM $this->table WHERE ID=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }


    private function getTable()
    {


    }



}