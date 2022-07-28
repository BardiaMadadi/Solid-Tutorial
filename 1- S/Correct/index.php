<?php
require './User.php';
require './Database.php';

$DB = new Database();
$connection = $DB->connect_db();
$user = new User($connection);

$user->get_user();
$user->set_user(['name'=>'bardia']);
