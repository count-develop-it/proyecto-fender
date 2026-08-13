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
    <title>Fender | Official Website</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/icon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <a href="tienda.php"><img src="img/logo.png" alt="Fender"></a>
        <a href="verCarrito.php" class="carrito text-decoration-none position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart" width="30" height="30">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
            <?php if ($total_items > 0): ?>
                <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle"><?php echo $total_items; ?></span>
            <?php endif; ?>
        </a>
    </div>

    <div class="banner">
        <video src="vid/banner.mp4" autoplay loop muted width="100%" height="auto"></video>
        <a href="american.php"><button>Go Shop</button></a>
    </div>
    <h2>Categorías</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4" id="cat">
      <div class="col">
        <div class="card">
          <img src="img/strato.png" class="card-img-top" alt="...">
          <div class="card-overlay">
            <a href="strato.php"><span>Stratocaster &reg</span></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/tele.png" class="card-img-top" alt="...">
          <div class="card-overlay">
            <a href="tele.php"><span>Telecaster &reg</span></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/jaguar.png" class="card-img-top" alt="...">
          <div class="card-overlay">
            <a href="jaguar.php"><span>Jaguar &reg</span></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/american.png" class="card-img-top" alt="...">
          <div class="card-overlay">
            <a href="american.php"><span>American professional &reg</span></a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <h2>Best Seller</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" id="cat">
      <div class="col">
        <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
          <div class="p-3 position-absolute top-0 start-0 z-1">
            <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">
              New Arrival
            </span>
          </div>
          <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
            <img src="img/best1.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Stratocaster">
          </div>
          <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
            <h6 class="card-title fw-bold text-dark mb-1 fs-6">
              American Professional II Stratocaster® HSS
            </h6>
            <p class="card-text text-success small fw-semibold mb-2">Q16,000.00</p>
            <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
                <input type="hidden" name="nombre" value="American Professional II Stratocaster® HSS">
                <input type="hidden" name="precio" value="16000.00">
                <input type="hidden" name="imagen" value="img/best1.png">
                <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
                <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
          <div class="p-3 position-absolute top-0 start-0 z-1">
            <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">
              New Arrival
            </span>
          </div>
          <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
            <img src="img/best2.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Telecaster">
          </div>
          <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
            <h6 class="card-title fw-bold text-dark mb-1 fs-6">
              American Professional II Telecaster® Deluxe
            </h6>
            <p class="card-text text-success small fw-semibold mb-2">Q20,584.00</p>
            <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
                <input type="hidden" name="nombre" value="American Professional II Telecaster® Deluxe">
                <input type="hidden" name="precio" value="20584.00">
                <input type="hidden" name="imagen" value="img/best2.png">
                <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
                <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
          <div class="p-3 position-absolute top-0 start-0 z-1">
            <span class="badge bg-white text-dark rounded-pill fw-normal px-2.5 py-1.5 shadow-sm border opacity-90">
              New Arrival
            </span>
          </div>
          <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
            <img src="img/best3.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Jazzmaster">
          </div>
          <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
            <h6 class="card-title fw-bold text-dark mb-1 fs-6">
              American Vintage II 1966 Jazzmaster®
            </h6>
            <p class="card-text text-success small fw-semibold mb-2">Q25,078.00</p>
            <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
                <input type="hidden" name="nombre" value="American Vintage II 1966 Jazzmaster®">
                <input type="hidden" name="precio" value="25078.00">
                <input type="hidden" name="imagen" value="img/best3.png">
                <input type="number" name="cantidad" value="1" min="1" class="form-control form-control-sm text-center" style="width: 65px;"> 
                <button type="submit" class="btn btn-dark w-100">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 rounded-0 bg-fender-card position-relative">
          <div class="d-flex align-items-center justify-content-center p-4 flex-grow-1">
            <img src="img/best4.png" class="img-fluid object-fit-contain" style="max-height: 580px;" alt="Telecaster 1951">
          </div>
          <div class="card-body p-3 pt-0 d-flex flex-column justify-content-end">
            <h6 class="card-title fw-bold text-dark mb-1 fs-6">
              American Vintage II 1951 Telecaster®
            </h6>
            <p class="card-text text-success small fw-semibold mb-2">Q23,047.82</p>
            <form method="POST" action="agregar_carrito.php" class="d-flex align-items-center gap-2 mt-2">
                <input type="hidden" name="nombre" value="American Vintage II 1951 Telecaster®">
                <input type="hidden" name="precio" value="23047.82">
                <input type="hidden" name="imagen" value="img/best4.png">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>>