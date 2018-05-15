<?php

if(!defined('__CONFIG__')){
    exit("You don't hava a config file.");
}

class Page {
    
    static function ForceLogin(){
        if(!isset($_SESSION['user_id'])){
            header("Location:index.php");
        }
    }

    static function ForceDashboard(){
        if(isset($_SESSION['user_id'])){
            header("Location:dashboard.php");
        }
    }
    
}
?>
