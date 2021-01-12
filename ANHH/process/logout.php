<?php 
session_start(); 
 
if (isset($_SESSION['email']) && isset($_SESSION['role'])){
    unset($_SESSION['email']);
    unset($_SESSION['role']); // xóa session login

    header("Location: ../index.php");
}
?>
