<?php
class Database
{
    public $connnection;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
        $username = "root";
        $password = "6699023";
        $this->connnection = new PDO($dsn, $username, $password);
    }
    public function query($query)
    {
        $statement = $this->connnection->prepare($query);
        $statement->execute();
        return $statement;
    }
}
$db = new Database();
$posts = $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);
echo "{$posts["id"]}: {$posts["title"]}";


dd($posts);
