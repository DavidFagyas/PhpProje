<?php


require 'db.php'; 
require 'WebPage.php';
require 'Database.php';
require 'ContactPage.php';


$db = new Database($host, $user, $password, $dbname);


new ContactPage();

$db->close();
?>
