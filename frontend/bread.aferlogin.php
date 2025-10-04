<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>น้องออโต้ เบเกอรี่ - ขนมปัง</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="afterlogin.php">น้องออโต้ เบเกอรี่</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="afterlogin.php">หน้าแรก</a></li>
          <li class="nav-item"><a class="nav-link active" href="bread.aferlogin.php">ขนมปัง</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php">🛒 ตะกร้าสินค้า</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-success text-white text-center py-4">
    <h1>🥖 เมนูขนมปัง</h1>
    <p>นุ่ม อร่อย สดใหม่ทุกวัน เลือกขนมปังที่คุณชอบได้เลย</p>
  </header>

  <!-- Bread Menu -->
  <div class="container my-5">
    <div class="row g-4">

      <!-- เมนู 1: บาแก็ตต์ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p1.jpg" class="card-img-top" alt="บาแก็ตต์">
          <div class="card-body text-center">
            <h5 class="card-title">บาแก็ตต์</h5>
            <p class="card-text">ราคา: 25 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="21">
              <input type="hidden" name="product_name" value="บาแก็ตต์">
              <input type="hidden" name="price" value="25">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="21">
              <input type="hidden" name="product_name" value="บาแก็ตต์">
              <input type="hidden" name="price" value="25">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 2: ชิโอปัง -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p2.jpg" class="card-img-top" alt="ชิโอปัง">
          <div class="card-body text-center">
            <h5 class="card-title">ชิโอปัง</h5>
            <p class="card-text">ราคา: 49 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="22">
              <input type="hidden" name="product_name" value="ชิโอปัง">
              <input type="hidden" name="price" value="49">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="22">
              <input type="hidden" name="product_name" value="ชิโอปัง">
              <input type="hidden" name="price" value="49">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 3: ขนมปังโฮลวีต -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p3.jpg" class="card-img-top" alt="โฮลวีต">
          <div class="card-body text-center">
            <h5 class="card-title">ขนมปังโฮลวีต</h5>
            <p class="card-text">ราคา: 30 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="33">
              <input type="hidden" name="product_name" value="ขนมปังโฮลวีต">
              <input type="hidden" name="price" value="30">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="33">
              <input type="hidden" name="product_name" value="ขนมปังโฮลวีต">
              <input type="hidden" name="price" value="30">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 4: โรล -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p4.jpg" class="card-img-top" alt="โรล">
          <div class="card-body text-center">
            <h5 class="card-title">ขนมปังโรล</h5>
            <p class="card-text">ราคา: 22 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="44">
              <input type="hidden" name="product_name" value="ขนมปังโรล">
              <input type="hidden" name="price" value="22">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="44">
              <input type="hidden" name="product_name" value="ขนมปังโรล">
              <input type="hidden" name="price" value="22">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 5: เบเกิล -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p5.jpg" class="card-img-top" alt="เบเกิล">
          <div class="card-body text-center">
            <h5 class="card-title">เบเกิล</h5>
            <p class="card-text">ราคา: 28 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="55">
              <input type="hidden" name="product_name" value="เบเกิล">
              <input type="hidden" name="price" value="28">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="55">
              <input type="hidden" name="product_name" value="เบเกิล">
              <input type="hidden" name="price" value="28">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>
      <!-- เมนู 6: ครัวซองต์ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p6.jpg" class="card-img-top" alt="ครัวซองต์">
          <div class="card-body text-center">
            <h5 class="card-title">ครัวซองต์</h5>
            <p class="card-text">ราคา: 35 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="26">
              <input type="hidden" name="product_name" value="ครัวซองต์">
              <input type="hidden" name="price" value="35">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="26">
              <input type="hidden" name="product_name" value="ครัวซองต์">
              <input type="hidden" name="price" value="35">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 7: เชียบัตต้า -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p7.jpg" class="card-img-top" alt="เชียบัตต้า">
          <div class="card-body text-center">
            <h5 class="card-title">เชียบัตต้า</h5>
            <p class="card-text">ราคา: 40 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="27">
              <input type="hidden" name="product_name" value="เชียบัตต้า">
              <input type="hidden" name="price" value="40">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="27">
              <input type="hidden" name="product_name" value="เชียบัตต้า">
              <input type="hidden" name="price" value="40">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 8: บาแก็ตต์แซนด์วิช -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p8.jpg" class="card-img-top" alt="บาแก็ตต์แซนด์วิช">
          <div class="card-body text-center">
            <h5 class="card-title">บาแก็ตต์แซนด์วิช</h5>
            <p class="card-text">ราคา: 45 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="28">
              <input type="hidden" name="product_name" value="บาแก็ตต์แซนด์วิช">
              <input type="hidden" name="price" value="45">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="28">
              <input type="hidden" name="product_name" value="บาแก็ตต์แซนด์วิช">
              <input type="hidden" name="price" value="45">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 9: เนยสด -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p9.jpg" class="card-img-top" alt="เนยสด">
          <div class="card-body text-center">
            <h5 class="card-title">ขนมปังเนยสด</h5>
            <p class="card-text">ราคา: 25 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="29">
              <input type="hidden" name="product_name" value="ขนมปังเนยสด">
              <input type="hidden" name="price" value="25">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="29">
              <input type="hidden" name="product_name" value="ขนมปังเนยสด">
              <input type="hidden" name="price" value="25">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

       <!-- เมนู 10: ลูกเกด -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p10.jpg" class="card-img-top" alt="ลูกเกด">
          <div class="card-body text-center">
            <h5 class="card-title">ขนมปังลูกเกด</h5>
            <p class="card-text">ราคา: 30 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="30">
              <input type="hidden" name="product_name" value="ขนมปังลูกเกด">
              <input type="hidden" name="price" value="30">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="30">
              <input type="hidden" name="product_name" value="ขนมปังลูกเกด">
              <input type="hidden" name="price" value="30">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- เมนู 11: ซาวโดว์ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="p11.jpg" class="card-img-top" alt="ซาวโดว์">
          <div class="card-body text-center">
            <h5 class="card-title">ขนมปังซาวโดว์</h5>
            <p class="card-text">ราคา: 50 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="31">
              <input type="hidden" name="product_name" value="ขนมปังซาวโดว์">
              <input type="hidden" name="price" value="50">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="31">
              <input type="hidden" name="product_name" value="ขนมปังซาวโดว์">
              <input type="hidden" name="price" value="50">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
