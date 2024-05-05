<?php

class DatabaseConnection
{
    protected static ?PDO $connection = null;

    private function __construct()
    {
        echo "<br>New Database Instance is Created!<br>";
    }

    public static function connect(): PDO
    {
        try {
            if (!self::$connection) {
                $pdo = new PDO('mysql:host=localhost;dbname=db-menu;port=3306', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection = $pdo;
            }
            return self::$connection;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit();
        }
    }
}
