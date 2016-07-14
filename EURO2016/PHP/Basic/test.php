<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function(){

	include "Model.php";
    include "view.php";
    //include "test.php";
    $model = new Model('../competition.xml');
    $competition = $model->readFile();
    $groups = $competition["groups"];
    $competitionView = new View();
        	
});

//$app->get('/'.$result.'', function () {
//    return 'Hello world';
//});

$app->run();

?>