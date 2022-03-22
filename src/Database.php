<?php

class Database
{
    // properties
    private ?PDO $conn = null;

    // constructor
    public function __construct(
        private string $host,
        private string $dbname,
        private string $user,
        private string $pass,
    ) {
        // $this->getConnection();
    }


    // establish connection
    public function getConnection() : PDO
    {
        // checking if connection already exist
        if ($this->conn === null) {
            $dsn = "mysql:host={$this->host}; dbname={$this->dbname}; charset=utf8";

            $this->conn = new PDO($dsn, $this->user, $this->pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_STRINGIFY_FETCHES => false
            ]);
        }

        return $this->conn;
    }
    // public functions

    // private functions
}