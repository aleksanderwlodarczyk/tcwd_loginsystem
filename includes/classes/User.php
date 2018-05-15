<?php

if(!defined('__CONFIG__')){
    exit("You don't hava a config file.");
}

class User {

    private $con;

    public function __construct(int $user_id){
        $this->con = DB::getConnection();

        $user = $this->con->prepare("SELECT * FROM users WHERE `uid` = :userid LIMIT 1");
        $user->bindParam(':userid', $user_id, PDO::PARAM_INT);
        $user->execute();

        if($user->rowCount() == 1){
            $user = $user->fetch(PDO::FETCH_OBJ);

            $this->email = (string) $user->email;
            $this->uid  = (int) $user->uid;
            $this->pasword = (string) $user->password;
            $this->reg_time = (string) $user->reg_time;
        }else{
            //no user, redirect to logout
            header("Location: /repo/logout.php");
        }
    }

    public static function Find($email, $return_assoc){

        $con = DB::getConnection(); 

        $findUser = $con->prepare("SELECT * FROM users WHERE email LIKE :email LIMIT 1");
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();
    
        if($return_assoc){
            return $findUser->fetch(PDO::FETCH_ASSOC);
        }
    
        $user_found = (boolean) $findUser->rowCount();
        return $user_found;
    }
    
}
?>
