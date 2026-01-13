<?php
require 'functions.php';
require 'router.php';

$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
$username = "root";
$password = "6699023";
$pdo = new PDO($dsn, $username, $password);
$statement = $pdo->prepare('select * from posts');

$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($posts as $post) {
    echo $post["id"] . ": " . $post["title"] . "<br>";
}
// dd($posts);
