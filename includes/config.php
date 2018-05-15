<?php
    if(!defined("__CONFIG__")){
        exit("You don't define this as a config file.");
    }

    if(!isset($_SESSION)){
        session_start();
    }
    
    //include the DB.php file;
    include_once("classes/DB.php");
    include_once("classes/User.php");
    include_once("classes/Page.php");
    include_once("functions.php");

    $con = DB::getConnection();
?>
