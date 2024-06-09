<?php
include('header.php');
?> 

    <?php





require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if ($password != $confirm_password) {
        echo "Heslá sa nezhodujú!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registrácia úspešná!";
            header("Location: login.php");  
        } else {
            echo "Chyba: " . $conn->error;
        }
    }
}
?>

<form method="post">
    Používateľské meno: <input type="text" name="username" required><br>
    Heslo: <input type="password" name="password" required><br>
    Potvrdenie hesla: <input type="password" name="confirm_password" required><br>
    <input type="submit" value="Registrovať sa">
</form>
