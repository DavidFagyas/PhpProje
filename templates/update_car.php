<?php
include('header.php');
?>

<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE cars SET make='$make', model='$model', year='$year', price='$price', description='$description' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Údaje o aute boli úspešne aktualizované.</p>";
        echo "<a href='dostupne-auta.php'>Späť na zoznam áut</a>";
    } else {
        echo "Chyba pri aktualizácii záznamu: " . $conn->error;
    }
}

$conn->close();
?>
