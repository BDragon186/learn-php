<?php
$heading = "notes";
// echo $_SERVER["REQUEST_URI"];
$config = require 'config.php';
$db = new Database($config["database"], "root", "6699023");
$notes = $db->query("select * from notes")->fetchAll();

require 'views/notes.view.php';
