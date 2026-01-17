<?php
$heading = "note";
// echo $_SERVER["REQUEST_URI"];
$config = require 'config.php';
$db = new Database($config["database"], "root", "6699023");
$id = $_GET["id"];
$note = $db->query("select * from notes where id = :id", [":id" => $id])->fetch();

require 'views/note.view.php';
