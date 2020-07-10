<?php

$conn = mysqli_connect("localhost","root","","web-final-project");

if(isset($_POST['submit']) && isset($_POST['username'])&&isset($_POST['password'])){
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE admin.username='$username' AND admin.password='$password';";

    $result = $conn->query($sql);

    if($result->num_rows>0){
        $_SESSION['admin']=$username;
        header("location:../index.php");
    }else{
        echo "<script>alert('Your username or password is incorrect')</script>";
    }
}
?>