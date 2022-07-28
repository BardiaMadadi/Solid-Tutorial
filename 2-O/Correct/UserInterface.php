<?php

Interface NormalUser{
    public function register(Array $user);
}
Interface PremiumUser{
    public function register(Array $user);
}
Interface AdminUser{
    public function register(Array $user);
}