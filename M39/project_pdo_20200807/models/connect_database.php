<?php

class ConnectDatabase
{
    private $serverName;
    private $username;
    private $password;
    private $dbName;

    public $conn;

    public function __construct($serverName = 'localhost', $username = 'homestead', $password = 'secret', $dbName = 'strore_DB1')
    {
        $this->serverName = $serverName;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;

        $this->getConnection();

    }

    private function setServerName($serverName)
    {
        $this->serverName = $serverName;
    }

    private function getServerName()
    {
        return $this->serverName;
    }

    private function setUserName($username)
    {
        $this->username = $username;
    }

    private function getUserName()
    {
        return $this->username;
    }

    private function setPassword($password)
    {
        $this->password = $password;
    }

    private function getPassword()
    {
        return $this->password;
    }

    private function setDatabaseName($dbName)
    {
        $this->dbName = $dbName;
    }

    private function getDatabaseName()
    {
        return $this->dbName;
    }

    private function setConnection()
    {
        $serverName = $this->serverName;
        $username = $this->username;
        $password = $this->password;
        $dbName = $this->dbName;

        try {
            $dns = 'mysql:host='. $serverName .';dbname=' . $dbName;
//            $username = $username;
//            $password = $password;

            $conn = new PDO ($dns, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

            $this->conn = $conn;
        } catch (Exception $exception) {
            var_dump($exception->getMessage());
        }
    }

    public function getConnection()
    {
        // set connection
        $this->setConnection();

        return $this->conn;
    }


}