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



    /**
     * @test
    */

    public function canIreachTheOrm()
    {

        $controller = new FrontController();
        $superOrm = $controller->getOrm();


        $this->assertInstanceOf(SuperOrm::class, $superOrm);        

    }


        /**
     * @test
    */

    public function canIreachTheRowHandler()
    {

        $controller = new FrontController();
        $superOrm = $controller->getOrm();
        $repository = $superOrm->getRowHandler("controllers");
        
        $this->assertInstanceOf(SuperOrm::class, $superOrm);        
    }


    /**
     * @test
    */


    
    public function canIinsertEntity()
    {
        $controller = new FrontController();

        $insert = $controller->insertEntity("val","val2");

        
    }









}