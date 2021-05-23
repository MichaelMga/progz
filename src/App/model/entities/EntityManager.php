<?php

namespace App\Model\Entity;

use App\Component\HttpComponent\Response;


class EntityManager extends ManagerInterface
{

   private $rowManager;

   public function __construct(RowInterface $rowManager){

       $this->rowManager = $rowManager;

   }

   public function add($entityBuilder): void
   {
      $this->rowManager->insertRow($entityBuilder);
   }


   public function get(): Entity
   {
       $this->table->insertValues($columns, $values);
   }

   public function updateFromId(string $id, $oldValue , $newValue ){


  }


   public function remove(): void
   {


   }



}