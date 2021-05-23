<?php

require "src/autoload.php";

use PHPUnit\Framework\TestCase;
use App\controllers\FrontController;



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

    public function CanIUseTheRenderFunction()
    {
        $controller = new FrontController();
        $controller->display("a", "b");
    }


    
     /**
     * @test
     */

    public function CanIRenderAtemplate()
    {
        $controller = new FrontController();
        echo $controller->display("a", "b");
    }


}