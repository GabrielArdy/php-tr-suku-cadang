<?php
include 'db-connection.php';

class Product
{
    public $name;
    public $price;
    public $stock;
    public $category;
    public $description;
    public $image;
    public $slug;

    public function addProduct()
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("INSERT INTO products (name, price, stock, category, description, slug) VALUES (:name, :price, :stock, :category, :description, :slug)");
        $query->bindParam(':name', $this->name);
        $query->bindParam(':price', $this->price);
        $query->bindParam(':stock', $this->stock);
        $query->bindParam(':category', $this->category);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':slug', $this->slug);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function displayProducts()
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("SELECT * FROM products");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function deleteProduct($id)
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("DELETE FROM products WHERE id = :id");
        $query->bindParam(':id', $id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editProduct($id)
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("SELECT * FROM products WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }

    public function updateProduct($id)
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("UPDATE products SET name = :name, price = :price, stock = :stock, category = :category, description = :description WHERE id = :id");
        $query->bindParam(':name', $this->name);
        $query->bindParam(':price', $this->price);
        $query->bindParam(':stock', $this->stock);
        $query->bindParam(':category', $this->category);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':id', $id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
