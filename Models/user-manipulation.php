<?php
include 'db-connection.php';

class User
{
    public $username;
    public $password;


    public function addUser()
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $query->bindParam(':username', $this->username);
        $query->bindParam(':password', $this->password);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getUser()
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("SELECT id, username, password FROM users WHERE username = :username");
        $query->execute([':username' => $this->username]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($this->password, $result['password'])) {
            return $result;
        } else {
            return false;
        }
    }

    public function getRoles($userId)
    {
        $db = new Connection();
        $data = $db->data;
        $query = $data->prepare("SELECT roles FROM users WHERE id = :id");
        $query->bindParam(':id', $userId);
        $query->execute();
        $result = $query->fetch();
        return $result['roles'];
    }
}
