<?php
    if(!defined("__CONFIG__")){
        exit("You don't define this as a config file.");
    }

    if(!isset($_SESSION)){
        session_start();
    }
    
    //include the DB.php file;
    include_once("classes/DB.php");

    $con = DB::getConnection();
?>
