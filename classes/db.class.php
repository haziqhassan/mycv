<?php
class Db{

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "mycv";

    public function connect(){

        $dsn = "mysql:host=" . $this->server . ";dbname=" . $this->database;

        try {

            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;

        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        

        

    }

}

?>