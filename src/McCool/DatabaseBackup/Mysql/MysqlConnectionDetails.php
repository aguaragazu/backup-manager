<?php namespace McCool\DatabaseBackup\Mysql; 

class MysqlConnectionDetails
{
    public $host;
    public $port;
    public $username;
    public $password;
    public $database;

    public function __construct($host, $port, $username, $password, $database)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
} 
