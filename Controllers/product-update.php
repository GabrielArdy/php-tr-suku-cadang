<?php
include '../Models/product-manipulation.php';

$product = new Product();
$id = $_GET['id'];
$product->name = $_POST['name'];
$product->price = $_POST['price'];
$product->stock = $_POST['stock'];
$product->category = $_POST['category'];
$product->description = $_POST['description'];

if ($product->updateProduct($id)) {
    header("Location: ../Views/dashboard.php");
} else {
    echo "Product not updated";
}
