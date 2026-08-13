<?php
session_start();
$total = 0;

$total_items = 0;
if (!empty($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $item) {
        $total_items += $item['cantidad'];
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Carrito de Compras | Fender Official Website</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/icon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>

<header class="d-flex align-items-center justify-content-between px-4 py-3 bg-white border-bottom shadow-sm mb-5">
    <a href="tienda.php" class="d-flex align-items-center">
        <img src="img/logo2.png" alt="Fender" style="max-height: 50px; width: auto; display: block;">
    </a>
    
    <a href="verCarrito.php" class="text-decoration-none text-dark position-relative me-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
        </svg>
        <?php if ($total_items > 0): ?>
            <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle"><?php echo $total_items; ?></span>
        <?php endif; ?>
    </a>
</header>

<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <h2 class="fw-bold m-0">Carrito de Compras</h2>
        <a href="tienda.php" class="btn btn-outline-dark btn-sm">Seguir comprando</a>
    </div>
    

        <?php if (!empty($_SESSION['carrito'])): ?>
            <div class="table-responsive bg-white p-3 border rounded shadow-sm">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['carrito'] as $id => $item): 
                            $subtotal = $item['precio'] * $item['cantidad'];
                            $total += $subtotal;
                        ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo htmlspecialchars($item['imagen']); ?>" alt="<?php echo htmlspecialchars($item['nombre']); ?>" width="60" class="me-3 img-thumbnail">
                                    <span class="fw-bold"><?php echo htmlspecialchars($item['nombre']); ?></span>
                                </div>
                            </td>
                            <td>Q<?php echo number_format($item['precio'], 2); ?></td>
                            <td><span class="badge bg-secondary px-3 py-2"><?php echo $item['cantidad']; ?></span></td>
                            <td class="fw-bold text-success">Q<?php echo number_format($subtotal, 2); ?></td>
                            <td class="text-center">
                                <a href="eliminar_carrito.php?id=<?php echo urlencode($id); ?>" 
                                   class="btn btn-outline-danger btn-sm"
                                   onclick="return confirm('¿Seguro que deseas eliminar este producto?');">
                                   Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end align-items-center mt-4 p-3 bg-light border rounded">
                <h4 class="m-0 me-3">Total: <span class="text-success fw-bold">Q<?php echo number_format($total, 2); ?></span></h4>
            </div>
            <button type="button"
                class = "btn btn-dark fw-bold"
                onclick="comprar('<?php echo number_format($total, 2); ?>')">
                Comprar
            </button>
        <?php else: ?>
            <div class="alert alert-warning text-center py-5 shadow-sm rounded">
                <h5 class="alert-heading">El carrito está vacío</h5>
                <p class="mb-3">Aún no has agregado ninguna guitarra o accesorio.</p>
                <a href="tienda.php" class="btn btn-dark">Ver Catálogo</a>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>