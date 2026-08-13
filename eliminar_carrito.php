<?php
session_start();

if (isset($_GET['id']) && isset($_SESSION['carrito'])) {
    $id = $_GET['id'];
    
    if (isset($_SESSION['carrito'][$id])) {
        unset($_SESSION['carrito'][$id]);
    }
}

header("Location: verCarrito.php");
exit();
?>