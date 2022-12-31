<?php


$request=$_SERVER['REQUEST_URI'];
echo $_SERVER['REQUEST_URI'] . "<br>";
switch($request){
    case '/class/project/add':
        require __DIR__ . "/add.php";
        break;
    case '/class/project/poll':
       echo "salam";
        break;
    default:
     echo "404";
}
