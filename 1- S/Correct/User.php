<?php

class User
{
    public $user = [
        'name' => 'ali'
    ];
    public $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function set_user($new_user){
        // code : set user using connection variable
        echo "Set User \n";
        $this->user = $new_user;
    }
    public function get_user(){
        // code : return user using connection variable
        echo "Get User \n";
        return $this->user;
    }
}
