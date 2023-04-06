<?php
include 'db-connection.php';

class Product {
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

}
