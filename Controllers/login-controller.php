<?php
include '../Models/user-manipulation.php';

$user = new User();
$user->username = $_POST['username'];
$user->password = $_POST['password'];

$userData = $user->getUser();

if ($userData) {
    $roles = $user->getRoles($userData['id']);
    if ($roles == 'ADMIN') {
        session_start();
        $_SESSION['username'] = $userData['username'];
        $_SESSION['roles'] = $roles;
        header("Location: ../Views/dashboard.php");
    } else {
        session_start();
        $_SESSION['username'] = $userData['username'];
        $_SESSION['roles'] = $roles;
        header("Location: ../Views/welcome.php");
    }
} else {
    echo "User not found";
}
