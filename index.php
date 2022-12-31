<?php


$request=$_SERVER['REQUEST_URI'];
echo $_SERVER['REQUEST_URI'];
switch($request){
    case '/add':
        require __DIR__ . "/add.php";
        break;
    case '/poll':
        require __DIR__ . "/add.php";
        break;
    default:
        require __DIR__ . "/add.php";
}
