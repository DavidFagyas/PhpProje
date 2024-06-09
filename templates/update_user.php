<?php
include('header.php');
?>


<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $is_admin = $_POST['is_admin'];

    $sql = "UPDATE users SET username='$username', is_admin='$is_admin' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Údaje o používateľovi boli úspešne aktualizované.</p>";
        echo "<a href='dostupne-auta.php'>Späť na zoznam používateľov</a>";
    } else {
        echo "Chyba pri aktualizácii záznamu: " . $conn->error;
    }
}

$conn->close();
?>
