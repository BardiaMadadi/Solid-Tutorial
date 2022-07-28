<?php

require_once './RegisterAdminUserMethod.php';
require_once './RegisterNormalUserMethod.php';
require_once './RegisterPremiumUserMethod.php';
class User {
    // normal user
    public $user = ['name'=>'ali'];

    // param 1 : this is to check dose user need to register ?
    // param 2 : this is for setting user
    public function __construct(bool $register,?Array $user,$method)
    {
        // checks dose user need ro register ?
        if($register){
            if(!is_null($user)){
                // set user
                $this->user = $user;
            }
            // register normal user
            $method->register($user);
            /*
             * or :
             *      $method->registerNormalUser($user);
             * or:
             *      $method->registerPremiumUser($user);
             */
        }
    }
}