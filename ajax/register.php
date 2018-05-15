<?php
    define("__CONFIG__", true);
    require_once("../includes/config.php");

    //header('Content-Type: application/json');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //do stuff
        $return = [];
        $email = $_POST['email'];
        //Make sure the user does not exits.
        $findUser = $con->prepare("SELECT `uid` FROM users WHERE email LIKE :email LIMIT 1");
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();
        
        if($findUser->rowCount() == 1) {
            $return['error'] = "You already have an account";
        }else{
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $addUser = $con->prepare("INSERT INTO users(email, `password`) VALUES (:email, :password)");
            $addUser->bindParam(':email', $email, PDO::PARAM_STR);
            $addUser->bindParam(':password', $password, PDO::PARAM_STR);
            $addUser->execute();

            $user_id = $con->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;
            $retrun['redirect'] = "dashboard.php?message=welcome";
            $return['is_logged_in'] = true;
        }
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