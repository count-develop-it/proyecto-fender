<?php
session_start();
require_once 'conexion.php';

$total_items = 0;
if (isset($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $item) {
        $total_items += $item['cantidad'];
    }
}

$query = "SELECT * FROM productos WHERE categoria = 'american'";
$resultado = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stratocaster&reg | Fender Official Website</title>
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
<h2>Stratocaster&reg</h2>

<!-- Fila 1 -->
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" id="cat">
  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">New</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato1.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Stratocaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">Player II Stratocaster®</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q9,549.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="Player II Stratocaster®">
            <input type="hidden" name="precio" value="9549.00">
            <input type="hidden" name="imagen" value="img_prod/strato1.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">New</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato2.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Telecaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">Player II Stratocaster® HSS</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q9,659.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="Player II Stratocaster® HSS">
            <input type="hidden" name="precio" value="9659.00">
            <input type="hidden" name="imagen" value="img_prod/strato2.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">New</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato3.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Jazzmaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">Made in Japan Traditional 2025 Collection '60s Stratocaster®</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q12,761.45</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="Made in Japan Traditional 2025 Collection '60s Stratocaster®">
            <input type="hidden" name="precio" value="12761.45">
            <input type="hidden" name="imagen" value="img_prod/strato3.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato4.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Telecaster 1951">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">Vintera® III Late '60s Stratocaster®</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q10,121.15</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="Vintera® III Late '60s Stratocaster®">
            <input type="hidden" name="precio" value="10121.15">
            <input type="hidden" name="imagen" value="img_prod/strato4.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Fila 2 -->
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" id="cat">
  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">New</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato5.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Stratocaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">Vintera® III Early '60s Stratocaster®</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q7,900.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="Vintera® III Early '60s Stratocaster®">
            <input type="hidden" name="precio" value="7900.00">
            <input type="hidden" name="imagen" value="img_prod/strato5.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">New</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato6.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Telecaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">Vintera® III Late '50s Stratocaster®</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q7,850.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="Vintera® III Late '50s Stratocaster®">
            <input type="hidden" name="precio" value="7850.00">
            <input type="hidden" name="imagen" value="img_prod/strato6.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato7.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Jazzmaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">American Professional II Stratocaster®</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q14,500.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="American Professional II Stratocaster®">
            <input type="hidden" name="precio" value="14500.00">
            <input type="hidden" name="imagen" value="img_prod/strato7.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato8.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Telecaster 1951">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">American Ultra II Stratocaster® HSS</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q18,500.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="American Ultra II Stratocaster® HSS">
            <input type="hidden" name="precio" value="18500.00">
            <input type="hidden" name="imagen" value="img_prod/strato8.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- fila 3-->
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" id="cat">
  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">New</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato9.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Stratocaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">American Professional Classic Stratocaster® HSS</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q12,200.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="American Professional Classic Stratocaster® HSS">
            <input type="hidden" name="precio" value="12200.00">
            <input type="hidden" name="imagen" value="img_prod/strato9.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">Back in stock</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato10.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Telecaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">Yngwie Malmsteen Stratocaster®</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q21,200.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="Yngwie Malmsteen Stratocaster®">
            <input type="hidden" name="precio" value="21200.00">
            <input type="hidden" name="imagen" value="img_prod/strato10.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">Back in stock</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato11.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Jazzmaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">Limited Edition Player II Stratocaster®, Shell Pink</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q7,850.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="Limited Edition Player II Stratocaster®, Shell Pink">
            <input type="hidden" name="precio" value="7850.00">
            <input type="hidden" name="imagen" value="img_prod/strato11.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">Back in stock</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato12.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Telecaster 1951">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">Standard Stratocaster® HSS</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q5,350.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="Standard Stratocaster® HSS">
            <input type="hidden" name="precio" value="5350.00">
            <input type="hidden" name="imagen" value="img_prod/strato12.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- fila 4-->
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" id="cat">
  <div class="col">
    <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
      <div class="p-3 position-absolute top-0 start-0 z-1">
        <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">New</span>
      </div>
      <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
        <img src="img_prod/strato13.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Stratocaster">
      </div>
      <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
        <h6 class="card-title fw-bold text-dark mb-1 fs-6">American Ultra II Stratocaster® Left-Hand</h6>
        <p class="card-text text-success small fw-semibold mb-2">Q25,350.00</p>
        <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
            <input type="hidden" name="nombre" value="American Ultra II Stratocaster® Left-Hand">
            <input type="hidden" name="precio" value="25350.00">
            <input type="hidden" name="imagen" value="img_prod/strato13.png">
            <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
            <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
        </form>
      </div>
    </div>
  </div>
</div>

  <br><br><br><br><br>
<hr>
<footer class="footer-fender py-5 bg-white text-dark">
  <div class="container-fluid px-md-5">
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 g-4 mb-5">
      <div class="col">
        <h6 class="fw-bold mb-3">Products</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="footer-link">Electric Guitars</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Stratocaster</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Telecaster</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Guitar Amplifiers</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Basses</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Acoustic Guitars</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Mod Shop</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Fender Custom Shop</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Fender Studio</a></li>
        </ul>
      </div>

      <div class="col">
        <h6 class="fw-bold mb-3">Company</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="footer-link">California Wildfire Relief</a></li>
          <li class="mb-2"><a href="#" class="footer-link">About</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Contact Us</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Careers</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Newsroom</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Fender Play Foundation</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Affiliate Program</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Fender's AI Principles</a></li>
        </ul>
      </div>

      <div class="col">
        <h6 class="fw-bold mb-3">More from Fender</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="footer-link">Online Guitar Tuner</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Tuner App</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Fender Certified Pre-Owned</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Fender Premium Audio</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Gift Cards</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Student Discount</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Heroes Discount</a></li>
        </ul>
      </div>

      <div class="col">
        <h6 class="fw-bold mb-3">Customer Service</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="footer-link">Help</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Find a dealer</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Warranty</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Manuals</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Register your Fender</a></li>
        </ul>
      </div>

      <div class="col">
        <h6 class="fw-bold mb-3">Account</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="footer-link">My Account</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Order Status</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Returns & Exchanges</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-3">
        <h6 class="fw-bold mb-3">Fender Play</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="footer-link">Fender Play</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Prepaid Cards</a></li>
          <li class="mb-2"><a href="#" class="footer-link">ID.me Heroes Discount</a></li>
          <li class="mb-2"><a href="#" class="footer-link">Essential Worker Discount</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</body>
</html>