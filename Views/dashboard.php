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
    <h1>WELCOME ADMIN</h1>
    <a href="../Controllers/logout-controller.php">LogOut</a>
    <a href="add-product.php">Tambah Produk</a>

    <table border='1'>
        <thead>
            <tr>
                <td>Nama Produk</td>
                <td>Harga</td>
                <td>Stok</td>
                <td>Deskripsi</td>
                <td>Kategori</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $key => $value) { ?>
                <tr>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['price'] ?></td>
                    <td><?php echo $value['stock'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td><?php echo $value['category'] ?></td>
                    <td>
                        <a href="update-product.php?id=<?php echo $value['id'] ?>">Edit</a>
                        <a href="../Controllers/product-delete.php?id=<?php echo $value['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>