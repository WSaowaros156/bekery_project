<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>น้องออโต้ เบเกอรี่ - เค้ก</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="afterlogin.php">น้องออโต้ เบเกอรี่</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="afterlogin.php">หน้าแรก</a></li>
          <li class="nav-item"><a class="nav-link active" href="cake.aferlogin.php">เค้ก</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php">🛒 ตะกร้าสินค้า</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-danger text-white text-center py-4">
    <h1>🍰 เมนูเค้ก</h1>
    <p>หวาน หอม อร่อย เค้กหลากหลายให้เลือก</p>
  </header>

  <!-- Cake Menu -->
  <div class="container my-5">
    <div class="row g-4">
      
      <!-- เมนู 1 เค้กสตรอเบอร์รี่ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c1.jpg" class="card-img-top" alt="เค้กสตรอเบอร์รี่">
          <div class="card-body text-center">
            <h5 class="card-title">เค้กสตรอเบอร์รี่</h5>
            <p class="card-text">ราคา: 65 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="1">
              <input type="hidden" name="product_name" value="เค้กสตรอเบอร์รี่">
              <input type="hidden" name="price" value="65">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="1">
              <input type="hidden" name="product_name" value="เค้กสตรอเบอร์รี่">
              <input type="hidden" name="price" value="65">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 2 เค้กช็อกโกแลต -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c2.jpg" class="card-img-top" alt="เค้กช็อกโกแลต">
          <div class="card-body text-center">
            <h5 class="card-title">เค้กช็อกโกแลต</h5>
            <p class="card-text">ราคา: 70 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="2">
              <input type="hidden" name="product_name" value="เค้กช็อกโกแลต">
              <input type="hidden" name="price" value="70">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="2">
              <input type="hidden" name="product_name" value="เค้กช็อกโกแลต">
              <input type="hidden" name="price" value="70">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 3 เค้กวานิลลา -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c3.jpg" class="card-img-top" alt="เค้กวานิลลา">
          <div class="card-body text-center">
            <h5 class="card-title">เค้กวานิลลา</h5>
            <p class="card-text">ราคา: 60 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="3">
              <input type="hidden" name="product_name" value="เค้กวานิลลา">
              <input type="hidden" name="price" value="60">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="3">
              <input type="hidden" name="product_name" value="เค้กวานิลลา">
              <input type="hidden" name="price" value="60">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 4 เค้กใบเตย -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c4.jpg" class="card-img-top" alt="เค้กใบเตย">
          <div class="card-body text-center">
            <h5 class="card-title">เค้กใบเตย</h5>
            <p class="card-text">ราคา: 55 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="4">
              <input type="hidden" name="product_name" value="เค้กใบเตย">
              <input type="hidden" name="price" value="55">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="4">
              <input type="hidden" name="product_name" value="เค้กใบเตย">
              <input type="hidden" name="price" value="55">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 5 ชีสเค้ก -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c5.jpg" class="card-img-top" alt="ชีสเค้ก">
          <div class="card-body text-center">
            <h5 class="card-title">ชีสเค้ก</h5>
            <p class="card-text">ราคา: 80 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="5">
              <input type="hidden" name="product_name" value="ชีสเค้ก">
              <input type="hidden" name="price" value="80">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="5">
              <input type="hidden" name="product_name" value="ชีสเค้ก">
              <input type="hidden" name="price" value="80">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 6 เรดเวลเวท -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c006.jpg" class="card-img-top" alt="เค้กเรดเวลเวท">
          <div class="card-body text-center">
            <h5 class="card-title">เค้กเรดเวลเวท</h5>
            <p class="card-text">ราคา: 85 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="6">
              <input type="hidden" name="product_name" value="เค้กเรดเวลเวท">
              <input type="hidden" name="price" value="85">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="6">
              <input type="hidden" name="product_name" value="เค้กเรดเวลเวท">
              <input type="hidden" name="price" value="85">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 7 เค้กกาแฟ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c7.jpg" class="card-img-top" alt="เค้กกาแฟ">
          <div class="card-body text-center">
            <h5 class="card-title">เค้กกาแฟ</h5>
            <p class="card-text">ราคา: 68 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="7">
              <input type="hidden" name="product_name" value="เค้กกาแฟ">
              <input type="hidden" name="price" value="68">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="7">
              <input type="hidden" name="product_name" value="เค้กกาแฟ">
              <input type="hidden" name="price" value="68">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 8 เค้กเลมอน -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c008.jpg" class="card-img-top" alt="เค้กเลมอน">
          <div class="card-body text-center">
            <h5 class="card-title">เค้กเลมอน</h5>
            <p class="card-text">ราคา: 58 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="8">
              <input type="hidden" name="product_name" value="เค้กเลมอน">
              <input type="hidden" name="price" value="58">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="8">
              <input type="hidden" name="product_name" value="เค้กเลมอน">
              <input type="hidden" name="price" value="58">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 9 เค้กกล้วยหอม -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c9.jpg" class="card-img-top" alt="เค้กกล้วยหอม">
          <div class="card-body text-center">
            <h5 class="card-title">เค้กกล้วยหอม</h5>
            <p class="card-text">ราคา: 50 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="9">
              <input type="hidden" name="product_name" value="เค้กกล้วยหอม">
              <input type="hidden" name="price" value="50">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="9">
              <input type="hidden" name="product_name" value="เค้กกล้วยหอม">
              <input type="hidden" name="price" value="50">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 10 เค้กแครอท -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="c10.jpg" class="card-img-top" alt="เค้กแครอท">
          <div class="card-body text-center">
            <h5 class="card-title">เค้กแครอท</h5>
            <p class="card-text">ราคา: 75 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="10">
              <input type="hidden" name="product_name" value="เค้กแครอท">
              <input type="hidden" name="price" value="75">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="10">
              <input type="hidden" name="product_name" value="เค้กแครอท">
              <input type="hidden" name="price" value="75">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Back to Home -->
  <div class="text-center my-4">
    <a href="afterlogin.php" class="btn btn-secondary">⬅ กลับไปหน้าแรก</a>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>© 2025 น้องออโต้ เบเกอรี่ | Designed with Bootstrap 5</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
