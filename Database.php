<?php
class Database
{
    public $connnection;
    public function __construct($config, $username, $password)
    {
        $dsn = "mysql:" . http_build_query($config, '',  ";");
        $this->connnection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query($query, $param = null)
    {
        $statement = $this->connnection->prepare($query);
        $statement->execute($param);
        return $statement;
    }
}
