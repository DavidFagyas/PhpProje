<?php
include('header.php');
?>

    <?php


require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['is_admin'] = $row['is_admin']; 
            header("Location: admin.php"); 
        } else {
            echo "Nesprávne heslo!";
        }
    } else {
        echo "Používateľ neexistuje!";
    }
}
?>

<form method="post">
    Používateľské meno: <input type="text" name="username"><br>
    Heslo: <input type="password" name="password"><br>
    <input type="submit" value="Prihlásiť sa">
</form>
