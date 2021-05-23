<?php

require "src/autoload.php";

use PHPUnit\Framework\TestCase;
use App\controllers\FrontController;
use App\model\orm\SuperOrm;
use App\model\database\TableHandler;
use App\model\database\table\Table;
use App\model\database\table\handlers\RowHandler;





class OrmTest extends TestCase
{
    /**
     * @test
     */

    public function canIgetRowHandler()
    {

        $controller = new FrontController();
        $superOrm = $controller->getSuperOrm();
        $tableHandler = $superOrm->getRowHandler("controllers");
    
        $this->assertInstanceOf(RowHandler::class, $tableHandler);

    }

}