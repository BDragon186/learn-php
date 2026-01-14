<?php
class Database
{
    public $connnection;
    public function __construct($config, $username, $password)
    {
        $dsn = "mysql:" . http_build_query($config, '',  ";");
        $this->connnection = new PDO($dsn, $username, $password, [PDO::FETCH_ASSOC]);
    }
    public function query($query)
    {
        $statement = $this->connnection->prepare($query);
        $statement->execute();
        return $statement;
    }
}
