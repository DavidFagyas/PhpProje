<?php
include('header.php');
?> 
<section>
<h1>Administrátor</h1>
    <?php
    require 'db.php';
    session_start();

    // Kontrola, či je používateľ prihlásený a či je administrátor
    if (!isset($_SESSION['user_id']) || !isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
        die("<p>Nemáte oprávnenie na zobrazenie tejto stránky.</p>");
    }

    // Zoznam áut
    echo "<h1>Autá</h1>";
    $sql = "SELECT cars.*, users.username FROM cars JOIN users ON cars.user_id = users.id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>Značka: " . $row["make"]. " - Model: " . $row["model"]. " - Rok výroby: " . $row["year"]. " - Cena: " . $row["price"]. " - Používateľ: " . $row["username"]. "</p><br>";
            echo "<p>Popis: " . $row["description"]. "</p><br>";
            echo "<a href='delete_car.php?id=".$row["id"]."'>Vymazať</a> | ";
            echo "<a href='edit_car.php?id=".$row["id"]."'>Editovať</a><br><br>";
        }
    } else {
        echo "<p>V systéme nie sú žiadne autá.</p>";
    }

    // Zoznam používateľov
    echo "<h2>Registrovaní používatelia</h2>";
    $sql = "SELECT id, username, is_admin FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p class='user-info'>ID: " . $row["id"]. " - Používateľské meno: " . $row["username"]. " - Administrátor: " . ($row["is_admin"] ? 'Áno' : 'Nie') . "</p>";
            echo "<a href='delete_user.php?id=".$row["id"]."' class='user-info'>Vymazať používateľa</a> | ";
            echo "<a href='edit_user.php?id=".$row["id"]."' class='user-info'>Editovať používateľa</a><br><br>";
        }
    } else {
        echo "V systéme nie sú žiadni registrovaní používatelia.";
    }

    $conn->close();
    ?>
</section>

