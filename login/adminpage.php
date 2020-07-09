<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:login.html");
} else {
    echo "Chào mừng " . $_SESSION['user'];
}
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
    <a href="logout.php">ĐĂNG XUẤT</a>
</body>
</html>