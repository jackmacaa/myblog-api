<?php

class Database
{
    private $host = 'db';
    private $db_name = 'myblog';
    private $username = 'root';
    private $password = 'pass';
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e)
        {
            echo 'conn error' . $e->getMessage();
        }

        return $this->conn;
    }
}