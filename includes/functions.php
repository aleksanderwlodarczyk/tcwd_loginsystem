<?php

function ForceLogin(){
    if(!isset($_SESSION['user_id'])){
        header("Location:index.php");
    }
}

function ForceDashboard(){
    if(isset($_SESSION['user_id'])){
        header("Location:dashboard.php");
    }
}

?>