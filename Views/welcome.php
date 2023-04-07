<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../Views/login.php");
}

include '../Models/product-manipulation.php';
$product = new Product();
$result = $product->displayProducts();
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
    <h1>WELCOME USER</h1>
    <a href="../Controllers/logout-controller.php">LogOut</a>

    <?php foreach ($result as $key => $value) { ?>
        <div>
            <h3><?php echo $value['name'] ?></h3>
            <p><?php echo $value['price'] ?></p>
            <p><?php echo $value['stock'] ?></p>
            <p><?php echo $value['description'] ?></p>
            <p><?php echo $value['category'] ?></p>
        </div>
    <?php } ?>
</body>

</html>