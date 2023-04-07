<?php
include '../Models/db-connection.php';

class Cart
{
    public $user_id;
    public $product_id;
    public $quantity;

    public function addToCart()
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':product_id', $this->product_id);
        $query->bindParam(':quantity', $this->quantity);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function displayCart($user_id)
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("SELECT * FROM cart WHERE user_id = :user_id");
        $query->bindParam(':user_id', $user_id);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function deleteFromCart($id)
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("DELETE FROM cart WHERE id = :id");
        $query->bindParam(':id', $id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
