<?php
    define("__CONFIG__", true);
    require_once("../includes/config.php");

    //header('Content-Type: application/json');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //do stuff
        $return = [];

        //Make sure the user does not exits.

        //Make sure the ser CAN be added AND is added

        //Return the proper information back to JavaScript to redirect us

        $return['redirect'] = "register.php";

        $return['test'] = "działa lol xd";
        echo json_encode($return); exit;

    }else{
        //Kill the page, redirect user
        exit('page killed');
    }

?>