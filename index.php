<?php
require 'functions.php';
require 'router.php';
require 'Database.php';
$config = require 'config.php';

$db = new Database($config["database"], "root", "6699023");
$posts = $db->query("select * from posts where id = 1")->fetch();
echo "{$posts["id"]}: {$posts["title"]}";

dd($posts);
