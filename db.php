<?php
include "polymorphism.php";

class Db extends Database
{
    private $conn;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "defense";


    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        $this->conn->query("CREATE DATABASE IF NOT EXISTS $this->dbname");
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }

    public function sql($sql)
    {
        return $this->conn->query($sql);
    }
}
?>
