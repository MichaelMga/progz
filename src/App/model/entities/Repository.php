<?php

 namespace App\model\entities;

 use App\model\entities\Entity;


 class Repository
 {
    private $entities;

    public function __construct(array $entities){

        $this->entities = $entities;

        print_r($entities);

    }


    public function getElementFromId(string $id)
    {

        for($i=0; $i < count($this->entities); $i++)
        {
            $entity = null;

            if($this->entities[$i]['ID'] == $id)
            {
                $entity = new Entity($this->entities[$i]);   
            }
        }

        return $entity;
        
    }


 }