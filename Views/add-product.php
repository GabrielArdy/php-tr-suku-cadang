<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ADD PRODUCT</h1>
    <form action="../Controllers/product-add.php" method="post">
        <input type="text" name="name" placeholder="Name"> <br>
        <input type="number" name="price" placeholder="Price"> <br>
        <input type="number" name="stock" placeholder="Stock"> <br>
        <label for="">description</label> <br>
        <textarea name="description" id="" cols="30" rows="10"></textarea> <br>
        <input type="text" name="category" placeholder="Category"> <br>
        <input type="submit" name="submit" value="Add Product">
    </form>
</body>

</html>