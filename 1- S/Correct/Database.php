<?php

class Database
{
    public static $database;

    public function get_database()
    {
        return self::$database;
    }
    public function connect_db(){
        // code : connects to db
        echo("connecting to DB \n");
        return self::$database;
    }
}