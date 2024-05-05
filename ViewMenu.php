<?php

require_once ('db_connect.php');

class ViewMenu {

    protected PDO $db;
    private static ?ViewMenu $menu = null;
    
    public function __construct()
    {
        $this->db = DatabaseConnection::connect();
    }

    public static function instance(): ViewMenu
    {
        if (self::$menu === null) {
            self::$menu = new ViewMenu();
        }
        return self::$menu;
    }

    public function readMenu() {
        $sql = "SELECT * FROM menu";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
        
}