<?php


 $routes = [
    rootUrl => ["name" => "name", "controller" => "App\Controllers\FrontController" , "method" =>  "displayHome" , "parameters" => ["templateName", "template2"]  ] ,
    rootUrl . 'url' => ["name" => "name", "controller" => "App\Controllers\FrontController" , "method" =>  "displayHome" , "parameters" => [$request->getGet("a", "myaltA") , $request->getGet("b", "myaltB")]  ] ,
];

