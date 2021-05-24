<?php

require "src/autoload.php";

use PHPUnit\Framework\TestCase;
use App\controllers\FrontController;
use App\model\orm\SuperOrm;



class ControllerTest extends TestCase
{
    /**
     * @test
     */

    public function CanIreachController()
    {
        
        $controller = new FrontController();
        $this->assertInstanceOf(FrontController::class, $controller);

    }




    /* 

    
    public function canIinsertEntity()
    {
        $controller = new FrontController();
        $insert = $controller->insertEntity("val","val2");
        
    }

    */

    
    /**
     * @test
    */

    public function getEntity()
    {

    }



}