<?php
include '../Models/product-manipulation.php';

$selectedProduct = new Product();
$id = $_GET['id'];
$result = $selectedProduct->editProduct($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>

<body>
    <h1>UPDATE PRODUK</h1>
    <form action="../Controllers/product-update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
        <input type="text" name="name" placeholder="Name" value="<?php echo $result['name'] ?>"> <br>
        <input type="number" name="price" placeholder="Price" value="<?php echo $result['price'] ?>"> <br>
        <input type="number" name="stock" placeholder="Stock" value="<?php echo $result['stock'] ?>"> <br>
        <label for="">description</label> <br>
        <textarea name="description" id="" cols="30" rows="10"><?php echo $result['description'] ?></textarea> <br>
        <select name="category" id="">
            <option value="1">Category 1</option>
            <option value="2">Category 2</option>
            <option value="3">Category 3</option>
        </select><br>
        <input type="submit" name="submit" value="Update Product">
    </form>
</body>

</html>