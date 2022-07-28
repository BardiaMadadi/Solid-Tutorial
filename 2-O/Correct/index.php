<?php

require_once './User.php';
require_once './RegisterPremiumUserMethod.php';

$userRegisterMethod = new RegisterAdminUserMethod();
/*
 * or :
 *  $userRegisterMethod = new RegisterNormalUserMethod();
 *  $userRegisterMethod = new RegisterPremiumUserMethod();
 */
$user = new User(true,['name'=>'mamad'],$userRegisterMethod);

