<?php
session_start();
$role = $_SESSION['role'];

if ($role == "admin") {
    header("location:./admin/admin.php");
}elseif($role == "user"){
    header("location:./user/user.php");
}
?>