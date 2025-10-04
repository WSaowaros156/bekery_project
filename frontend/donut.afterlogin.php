<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>น้องออโต้ เบเกอรี่ - โดนัท</title>
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
          <li class="nav-item"><a class="nav-link active" href="donut.afterlogin.php">โดนัท</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php">🛒 ตะกร้าสินค้า</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-warning text-dark text-center py-4">
    <h1>🍩 เมนูโดนัท</h1>
    <p>โดนัทหลากหลายหน้า สดใหม่ หอมหวานทุกคำ</p>
  </header>

  <!-- Donut Menu -->
  <div class="container my-5">
    <div class="row g-4">

      <!-- โดนัทน้ำตาล -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d1.jpg" class="card-img-top" alt="โดนัทน้ำตาล">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทน้ำตาล</h5>
            <p class="card-text">ราคา: 25 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="32">
              <input type="hidden" name="product_name" value="โดนัทน้ำตาล">
              <input type="hidden" name="price" value="25">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="32">
              <input type="hidden" name="product_name" value="โดนัทน้ำตาล">
              <input type="hidden" name="price" value="25">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- โดนัทช็อกโกแลต -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d2.jpg" class="card-img-top" alt="โดนัทช็อกโกแลต">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทช็อกโกแลต</h5>
            <p class="card-text">ราคา: 30 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="33">
              <input type="hidden" name="product_name" value="โดนัทช็อกโกแลต">
              <input type="hidden" name="price" value="30">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="33">
              <input type="hidden" name="product_name" value="โดนัทช็อกโกแลต">
              <input type="hidden" name="price" value="30">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- โดนัทสตรอว์เบอร์รี่ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d3.jpg" class="card-img-top" alt="โดนัทสตรอว์เบอร์รี่">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทสตรอว์เบอร์รี่</h5>
            <p class="card-text">ราคา: 32 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="34">
              <input type="hidden" name="product_name" value="โดนัทสตรอว์เบอร์รี่">
              <input type="hidden" name="price" value="32">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="34">
              <input type="hidden" name="product_name" value="โดนัทสตรอว์เบอร์รี่">
              <input type="hidden" name="price" value="32">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>
<!-- โดนัทเกรซ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d4.jpg" class="card-img-top" alt="โดนัทเกลซ">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทเกลซ</h5>
            <p class="card-text">ราคา: 28 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="35">
              <input type="hidden" name="product_name" value="โดนัทเกลซ">
              <input type="hidden" name="price" value="28">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="35">
              <input type="hidden" name="product_name" value="โดนัทเกลซ">
              <input type="hidden" name="price" value="28">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>
      <!-- โดนัทชาเขียว -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d5.jpg" class="card-img-top" alt="โดนัทมัทฉะ">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทมัทฉะ</h5>
            <p class="card-text">ราคา: 35 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="36">
              <input type="hidden" name="product_name" value="โดนัทมัทฉะ">
              <input type="hidden" name="price" value="35">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="36">
              <input type="hidden" name="product_name" value="โดนัทมัทฉะ">
              <input type="hidden" name="price" value="35">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

<!-- โดนัทบลูเบอร์รี่ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d6.jpg" class="card-img-top" alt="โดนัทบลูเบอร์รี่">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทบลูเบอร์รี่</h5>
            <p class="card-text">ราคา: 34 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="37">
              <input type="hidden" name="product_name" value="โดนัทบลูเบอร์รี่">
              <input type="hidden" name="price" value="34">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="37">
              <input type="hidden" name="product_name" value="โดนัทบลูเบอร์รี่">
              <input type="hidden" name="price" value="34">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>
      
      <!-- โดนัทไส้ครีม -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d7.jpg" class="card-img-top" alt="โดนัทไส้ครีม">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทไส้ครีม</h5>
            <p class="card-text">ราคา: 38 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="38">
              <input type="hidden" name="product_name" value="โดนัทไส้ครีม">
              <input type="hidden" name="price" value="38">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="38">
              <input type="hidden" name="product_name" value="โดนัทไส้ครีม">
              <input type="hidden" name="price" value="38">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>
 <!-- โดนัทมะพร้าว-->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d8.jpg" class="card-img-top" alt="โดนัทมะพร้าว">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทมะพร้าว</h5>
            <p class="card-text">ราคา: 33 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="39">
              <input type="hidden" name="product_name" value="โดนัทมะพร้าว">
              <input type="hidden" name="price" value="33">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="39">
              <input type="hidden" name="product_name" value="โดนัทมะพร้าว">
              <input type="hidden" name="price" value="33">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>
       <!-- โดนัทคาราเมล -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d9.jpg" class="card-img-top" alt="โดนัทคาราเมล">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทคาราเมล</h5>
            <p class="card-text">ราคา: 36 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="40">
              <input type="hidden" name="product_name" value="โดนัทคาราเมล">
              <input type="hidden" name="price" value="36">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="40">
              <input type="hidden" name="product_name" value="โดนัทคาราเมล">
              <input type="hidden" name="price" value="36">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

      <!-- โดนัทโอรีโอ้ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d10.jpg" class="card-img-top" alt="โดนัทโอรีโอ้">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัทโอรีโอ้</h5>
            <p class="card-text">ราคา: 40 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="41">
              <input type="hidden" name="product_name" value="โดนัทโอรีโอ้">
              <input type="hidden" name="price" value="40">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="41">
              <input type="hidden" name="product_name" value="โดนัทโอรีโอ้">
              <input type="hidden" name="price" value="40">
              <input type="hidden" name="qty" value="1">
              <button type="submit" class="btn btn-primary btn-sm">สั่งซื้อ</button>
            </form>
          </div>
        </div>
      </div>

<!-- โดนัททีรามิสุ -->
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="d11.jpg" class="card-img-top" alt="โดนัททีรามิสุ">
          <div class="card-body text-center">
            <h5 class="card-title">โดนัททีรามิสุ</h5>
            <p class="card-text">ราคา: 42 บาท</p>
            <form action="cart.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="42">
              <input type="hidden" name="product_name" value="โดนัททีรามิสุ">
              <input type="hidden" name="price" value="42">
              <button type="submit" class="btn btn-success btn-sm">ใส่ตะกร้า</button>
            </form>
            <form action="checkout.php" method="post" class="d-inline">
              <input type="hidden" name="product_id" value="42">
              <input type="hidden" name="product_name" value="โดนัททีรามิสุ">
              <input type="hidden" name="price" value="42">
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
