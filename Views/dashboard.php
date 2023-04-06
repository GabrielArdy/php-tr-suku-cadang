<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../Views/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>WELCOME ADMIN</h1>
    <a href="../Controllers/logout-controller.php">LogOut</a>
    <a href="add-product.php">Tambah Produk</a>

</body>

</html>