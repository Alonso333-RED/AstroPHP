<?php
class Config{
    public static function conectar() {
        $dsn = 'mysql:dbname=astrodatabase;host=localhost';
        $user = 'root';
        $password = '';
        return new PDO($dsn, $user, $password);
    }
}

