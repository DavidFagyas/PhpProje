<?php
include('header.php');
?>


<section>
    <h3>Pridať nové auto</h3>

    <section id="new-car">
        <form action="add_car.php" method="post" enctype="multipart/form-data">
            <label for="make">Značka:</label>
            <input type="text" id="make" name="make" required><br>

            <label for="model">Model:</label>
            <input type="text" id="model" name="model" required><br>

            <label for="year">Rok výroby:</label>
            <input type="text" id="year" name="year" required><br>

            <label for="price">Cena:</label>
            <input type="text" id="price" name="price" required><br>

            <label for="image">Výber obrázka:</label>
            <input type="file" id="image" name="image" accept="image/*" required><br>

            <input type="submit" value="Pridať">
        </form>
    </section>
</section>

<?php
include('footer.php');
?> 


<?php
require 'db.php';
session_start();

// Spracovanie a uloženie do databázy
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];

    // Nahratie obrázka
    $target_dir = "Auta/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // SQL vloženie
    $sql = "INSERT INTO cars (make, model, year, price, image, user_id) 
            VALUES ('$make', '$model', '$year', '$price', '$target_file', '{$_SESSION['user_id']}')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Návrat na úvodnú stránku
        exit();
    } else {
        echo "Chyba pri pridávaní: " . $conn->error;
    }
}

$conn->close();
?>


</body>
</html>
