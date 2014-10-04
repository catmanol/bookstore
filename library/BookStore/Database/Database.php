<?php

namespace BookStore\Database;



class Database
{
    public static function connect($config)
    {
        $mysqli = new \mysqli($config['db_localhost'], $config['db_user'], $config['db_password'], $config['db_name']);
        if (mysqli_connect_error()) { 
            echo ("Nu s-a putut conecta la baza de date \n "); 
            exit();
        }
        
        return $mysqli;
    }
}
