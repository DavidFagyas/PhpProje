<?php
require_once '_inc/classes/Database.php';
require_once '_inc/classes/WebPage.php';
require_once '_inc/classes/HomePage.php';

// Initialize the Database
require 'db.php'; // Include the database configuration file
$db = new Database($host, $user, $password, $dbname);

// Create and render the HomePage
new HomePage();

// Close the database connection
$db->close();
?>
