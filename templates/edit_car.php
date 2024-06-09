
<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM cars WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        ?>

        <!DOCTYPE html>
        <html lang="sk">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="Style1.css">
            <title>Editovať auto</title>
        </head>
        <body>
        <h1>Editovať auto</h1>
        <form action="update_car.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="make">Značka:</label>
            <input type="text" id="make" name="make" value="<?php echo $row['make']; ?>"><br><br>
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" value="<?php echo $row['model']; ?>"><br><br>
            <label for="year">Rok výroby:</label>
            <input type="text" id="year" name="year" value="<?php echo $row['year']; ?>"><br><br>
            <label for="price">Cena:</label>
            <input type="text" id="price" name="price" value="<?php echo $row['price']; ?>"><br><br>
            <label for="description">Popis:</label>
            <textarea id="description" name="description"><?php echo $row['description']; ?></textarea><br><br>
            <input type="submit" value="Uložiť zmeny">
        </form>
        </body>
        </html>

        <?php
    } else {
        echo "<p>Auto nebolo nájdené.</p>";
    }
} else {
    echo "<p>Neplatná žiadosť.</p>";
}

$conn->close();
?>
