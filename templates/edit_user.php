
<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
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
            <title>Editovať používateľa</title>
        </head>
        <body>
        <h1>Editovať používateľa</h1>
        <form action="update_user.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="username">Používateľské meno:</label>
            <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>"><br><br>
            <label for="is_admin">Administrátor:</label>
            <select id="is_admin" name="is_admin">
                <option value="1" <?php if($row['is_admin'] == 1) echo 'selected'; ?>>Áno</option>
                <option value="0" <?php if($row['is_admin'] == 0) echo 'selected'; ?>>Nie</option>
            </select><br><br>
            <input type="submit" value="Uložiť zmeny">
        </form>
        </body>
        </html>

        <?php
    } else {
        echo "<p>Používateľ nebol nájdený.</p>";
    }
} else {
    echo "<p>Neplatná žiadosť.</p>";
}

$conn->close();
?>
