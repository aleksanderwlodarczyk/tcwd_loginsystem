<?php
    define("__CONFIG__", true);
    require_once("../includes/config.php");

    //header('Content-Type: application/json');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //do stuff
        $return = [];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //Make sure the user does not exits.
        
        if(User::Find($email, false)) {
            //if user exist -> try sign him in
            $User = User::Find($email, true);
            $userID = (int) $User['uid'];
            $hash = $User['password'];

            if(password_verify($password, $hash)){
                //User is signed in
                $return['redirect'] = "dashboard.php";
                $_SESSION['user_id'] = $userID;
                $_SESSION['is_logged_in'] = true;
            }else{
                //Invalid email/password
                $return['error'] = "Invalid email and password combination";
            }
            
        }else{
            $return['error'] = "You have to create account to log in";
        }
        //Make sure the ser CAN be added AND is added

        //Return the proper information back to JavaScript to redirect us
        echo json_encode($return); exit;

    }else{
        //Kill the page, redirect user
        exit('page killed');
    }

?>