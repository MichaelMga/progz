<?php

namespace App\model\database\table;

use App\model\entities\Entity;


class RowToObjectConverter
{

    public function __construct($row)
    {
        $this->object = new Entity($row);

        foreach($row as $key => $value)
        {
            $this->object->setProperty($key,$value);
        }

    }


    public function getObject()
    {


    }



}