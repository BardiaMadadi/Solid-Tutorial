<?php
// Note : This class is incorrect version

class User {
    // normal user
    private $user = ['name'=>'ali'];

    // param 1 : this is to check dose user need to register ?
    // param 2 : this is for setting user
    public function __construct(bool $register,?Array $user)
    {
        // checks dose user need ro register ?
        if($register){
            if(!is_null($user)){
                // set user
                $this->user = $user;
            }
            // register normal user
            $this->registerUser($this->user);
        }
    }

    public function registerUser($user)
    {
        echo "registering normal user \n";
        // code : implement normal user register method
    }

//
//    public function registerAdmin($user)
//    {
//        echo "registering normal user \n";
//        // code : implement normal user register method
//    }
//
}


$user = new User(true,['name'=>'ahmad']);

/*
 *
 * PROBLEM :
 * so now we can`t register premium , Admin and ... users
 * and for this features we should add method and change class
 * so as you can see it's not good choice
 *
 */