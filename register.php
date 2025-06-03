<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: beranda.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
    <h2>Halaman Register</h2>
    <form action="proses_register.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>
    <p>Sudah punya akun? 
        <a href="login.php">Login di sini</a>
    </p>
    </div>
</body>
</html>
