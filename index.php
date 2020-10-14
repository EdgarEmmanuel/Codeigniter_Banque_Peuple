<?php
// on ouvre toujours la Session
session_start();

// POUR STYLE
define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
define("SRC_STYLES",WEBROOT."styles");
define("SRC_IMAGES",WEBROOT."images");

// echo '<meta http-equiv="refresh" content="0;URL=index.php?code=add_tissu">';

// POUR DOSSIER controllers , views and Models.
define("ROOT",str_replace("index.php","",$_SERVER['SCRIPT_FILENAME']));
define("SRC_VIEWS",ROOT."views");
define("SRC_DAO",ROOT."dao");
define("SRC_CONTROLLERS",ROOT."controllers");
define("SRC_MODELS",ROOT."models");

//include controller 
include_once(SRC_CONTROLLERS."/BPController.php");

$controller = new BPController();



if(isset($_POST["btn"])){
    $post = $_POST["btn"];
    switch($post){
        case "createAccount": 
            $controller->getPageCreateAccount();
            //echo '<meta http-equiv="refresh" content="0;URL=index.php">';
        break;
    }
}else{
    include_once(SRC_VIEWS."/login_page.php");
}



?>