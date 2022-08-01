<?php
/*
    Note : this should not be Correct
*/

class User {
    public $user = [
        'name' => 'ali'
    ];
    public function set_user($new_user){
        // code : set user
        echo "Set User \n";
        $this->user = $new_user;
    }
    public function get_user(){
        // code : return user
        echo "Get User \n";
        return $this->user;
    }
    public function connect_db(){
        // code : connects to db
        echo("connecting to DB \n");
    }
}
// this is not Correct cause User class is doing user stuff + Data base sruff

$user = new User;

$user->connect_db();
$user->get_user();
$user->set_user(['name'=>'bardia']);
