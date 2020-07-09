<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
    if ($username == 'admin' && $password == '123') {
        $_SESSION['user'] = $username;
        header("location:adminpage.php");
    } else {
        echo "<center>Nhập sai tài khoản và mật khẩu</center>";
        require "login.html";
    }
 
?>