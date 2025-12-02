<?php
define("BASE_URL","/AstroPHP/index.php");
require_once("./src/controllers/AstroController.php");

if(isset($_GET["controller"]) && isset($_GET["action"])){
    $controller = $_GET["controller"];
    $action = $_GET["action"];

    $maincontroller = new $controller();
    if(method_exists($maincontroller,$action)){
        $maincontroller->$action();
    }else{
        echo "Method not found";
    }
    
}else{
    $controller = new AstroController();
    $controller->viewAllAstros();
}