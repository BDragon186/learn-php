<?php
require 'functions.php';
$heading = "home";


function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
echo __DIR__;
// echo $_SERVER["REQUEST_URI"];
require 'views/index.view.php';
