<?php
include_once 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = $koneksi
    ->query("SELECT * FROM register where email = '$email' && password = '$password'")
    ->fetch_assoc();

session_start();
$_SESSION['register_login'] = $user;
header("Location: dashboard.php");

// print_r($user);
?>