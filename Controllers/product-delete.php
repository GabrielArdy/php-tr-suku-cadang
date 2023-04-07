<?php
include '../Models/product-manipulation.php';


$product = new Product();
$id = $_GET['id'];
if ($product->deleteProduct($id)) {
    header("Location: ../Views/dashboard.php");
} else {
    echo "Product not deleted";
}
