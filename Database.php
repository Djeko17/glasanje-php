<?php

class Database
{
    public $hostname = "localhost";
    public $username = "root";
    public $password = "";
    public $connection;

    function __construct($database)
    {
        $this->connection = new mysqli($this->hostname, $this->username, $this->password, $database);
    }
}
