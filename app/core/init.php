<?php

require_once 'App.php';
require_once 'config.php';
require_once 'Database.php';
require_once 'Model.php';
require_once 'Controller.php';

spl_autoload_register(function($classname){
    require_once $filename = "app/models/". ucfirst($classname).".php";
 });

function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

function redirect($path){
    header("location: ".ROOT.$path);
    die;
}