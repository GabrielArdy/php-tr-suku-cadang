<?php
include '../Models/product-manipulation.php';

$product = new Product();
$product->name = $_POST['name'];
$product->price = $_POST['price'];
$product->stock = $_POST['stock'];
$product->category = $_POST['category'];
$product->description = $_POST['description'];
$product->slug = $_POST['category'];

if ($product->addProduct()) {
    header("Location: ../Views/dashboard.php");
} else {
    echo "Product not added";
}
