<?php
/*
 * PDO Database Class
 * It connects to database 
 * Creates prepared statements
 * Bind values
 * return/fetch rows and results
 */
class Database
{
    private $host = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $dbh; //db handler prop
    private $stmt; //statement
    private $err; //error

    public function __construct()
    {
        // Set DSN
        $dsn = "mysql:host={$this->host}; dbname={$this->dbname}";
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
    }
}
