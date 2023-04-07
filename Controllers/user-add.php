<?php
include '../Models/user-manipulation.php';

if (isset($_POST['submit'])) {
    $user = new User();
    $user->username = $_POST['username'];
    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if ($user->addUser()) {
        header("Location: ../Views/login.php");
    } else {
        echo "User not added";
    }
}
