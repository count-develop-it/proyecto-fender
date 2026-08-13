<?php
session_start();
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesa si viene id desde BD o datos directos desde el formulario HTML
    if (isset($_POST['producto_id'])) {
        $id = intval($_POST['producto_id']);

        $stmt = $conn->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($producto = $resultado->fetch_assoc()) {
            if (!isset($_SESSION['carrito'])) {
                $_SESSION['carrito'] = [];
            }

            if (isset($_SESSION['carrito'][$id])) {
                $_SESSION['carrito'][$id]['cantidad'] += isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 1;
            } else {
                $_SESSION['carrito'][$id] = [
                    'nombre' => $producto['nombre'],
                    'precio' => $producto['precio'],
                    'imagen' => $producto['imagen'],
                    'cantidad' => isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 1
                ];
            }
        }
    } else if (isset($_POST['nombre']) && isset($_POST['precio'])) {
        $nombre = $_POST['nombre'];
        $precio = floatval($_POST['precio']);
        $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : '';
        $cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 1;
        $id = md5($nombre);

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }

        if (isset($_SESSION['carrito'][$id])) {
            $_SESSION['carrito'][$id]['cantidad'] += $cantidad;
        } else {
            $_SESSION['carrito'][$id] = [
                'nombre' => $nombre,
                'precio' => $precio,
                'imagen' => $imagen,
                'cantidad' => $cantidad
            ];
        }
    }
}

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'tienda.php';
header("Location: " . $referer);
exit();
?>