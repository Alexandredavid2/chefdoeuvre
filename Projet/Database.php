<?php

class Database {
    private const SERVER = "localhost";
    private const LOGIN = "root";
    private const PASS = "";
    private $database;
    

    public function __construct () {
        
        try {
            $connexion = new PDO("mysql:host=" . self::SERVER . ";dbname=crashteamracing;charset=utf8", self::LOGIN, self::PASS);
            $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->database = $connexion;
        }

        catch(PDOException $e){
        
            echo 'Nul nul nul Germain : ' .$e->getMessage();
            
        }
    }
    
    public function db_query($query) {
        
        return $this->database->query($query);
        
    }

}

?>