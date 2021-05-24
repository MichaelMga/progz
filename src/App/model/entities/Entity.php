<?php

 namespace App\model\entities;

 class Entity
 {
    private $name;
    private $properties = [];

    public function __construct(array $properties){
        //$this->properties = $properties;
        //echo "new entity collected!";
    }


    public function getPropertyValue($property)
    {
        return $this->properties[$property];   
    }

    
    public function setProperty($property, $value)
    {
        $this->properties[$property] = $value;  
         
        echo $this->properties[$property];
    }


    
 }