<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ร้านเบเกอรี่น้องออโต้</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&family=Prompt&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Prompt', sans-serif;
      background: url('bakery-bg.jpg') no-repeat center center fixed;
      background-size: cover;
      position: relative;
      color: #333;
    }
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(255, 255, 255, 0.7); /* โปร่งแสงให้อ่านง่าย */
      z-index: -1;
    }
    .navbar {
      background: linear-gradient(45deg, #ff8a65, #ff4081);
    }
    .navbar-brand {
      font-family: 'Kanit', sans-serif;
      font-size: 1.5rem;
      font-weight: bold;
      color: #fff !important;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }
    .category-card {
      transition: transform 0.3s, box-shadow 0.3s;
      border: none;
      border-radius: .75rem;
      overflow: hidden;
    }
    .category-card:hover {
      transform: translateY(-7px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .category-card img {
      height: 220px;
      object-fit: cover;
    }
    header {
      background: rgba(255, 64, 129, 0.8);
      color: #fff;
    }
    footer {
      background: #f8f9fa;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">ร้านเบเกอรี่น้องออโต้</a>
      
      <!-- ฟอร์มค้นหา -->
      <form class="d-flex ms-auto me-3" onsubmit="return searchProduct(event)">
        <input id="searchBox" class="form-control me-2" type="search" placeholder="ค้นหาสินค้า..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">ค้นหา</button>
      </form>

      <!-- เมนูสมาชิก -->
      <div>
        <a href="order_history.php" class="btn btn-outline-light me-2">ประวัติการสั่งซื้อ</a>
        <a href="profile_edit.php" class="btn btn-outline-light me-2">แก้ไขข้อมูล</a>
        <a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="text-white text-center py-5" style="background:#ff80aa;">
    <div class="container">
      <h1 class="display-5 fw-bold">🍰 สดใหม่ทุกวัน หวานหอมละมุน</h1>
      <p class="lead">เลือกเมนูสุดอร่อยที่คุณต้องการได้เลย</p>
      <a href="#categories" class="btn btn-light btn-lg mt-3">ดูเมนูทั้งหมด</a>
    </div>
  </header>

  <!-- Categories -->
  <section id="categories" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">เลือกประเภทสินค้า</h2>
      <div class="row g-4">

        <!-- เค้ก -->
        <div class="col-md-3 category-item" data-keywords="เค้ก cake strawberry chocolate pandan vanilla">
          <div class="card category-card h-100">
            <img src="ca.jpg" class="card-img-top" alt="ภาพเค้ก">
            <div class="card-body text-center">
              <h5 class="card-title">เค้ก</h5>
              <p class="card-text text-muted">สตรอว์เบอร์รี่, ใบเตย, ช็อกโกแลต</p>
              <a href="cake.aferlogin.php" class="btn btn-primary">ดูเมนู</a>
            </div>
          </div>
        </div>

        <!-- คุกกี้ -->
        <div class="col-md-3 category-item" data-keywords="คุกกี้ cookie chocolatechip butter sesame">
          <div class="card category-card h-100">
            <img src="cook.jpg" class="card-img-top" alt="ภาพคุกกี้">
            <div class="card-body text-center">
              <h5 class="card-title">คุกกี้</h5>
              <p class="card-text text-muted">ช็อกโกแลตชิพ, เนย, งา</p>
              <a href="cookie.afterlogin.php" class="btn btn-primary">ดูเมนู</a>
            </div>
          </div>
        </div>

        <!-- ขนมปัง -->
        <div class="col-md-3 category-item" data-keywords="ขนมปัง bread croissant sausage roll">
          <div class="card category-card h-100">
            <img src="baker.jpg" class="card-img-top" alt="ภาพขนมปัง">
            <div class="card-body text-center">
              <h5 class="card-title">ขนมปัง</h5>
              <p class="card-text text-muted">ครัวซอง, ชิโอปัง, ไส้กรอก</p>
              <a href="bread.aferlogin.php" class="btn btn-primary">ดูเมนู</a>
            </div>
          </div>
        </div>

        <!-- โดนัท -->
        <div class="col-md-3 category-item" data-keywords="โดนัท donut sugar chocolate strawberry">
          <div class="card category-card h-100">
            <img src="d0.jpg" class="card-img-top" alt="ภาพโดนัท">
            <div class="card-body text-center">
              <h5 class="card-title">โดนัท</h5>
              <p class="card-text text-muted">น้ำตาล, ช็อกโกแลต, สตรอว์เบอร์รี่</p>
              <a href="donut.afterlogin.php" class="btn btn-primary">ดูเมนู</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-4">
    <div class="container">
      <p class="mb-1">&copy; 2025 ร้านเบเกอรี่น้องออโต้</p>
      <small>ติดต่อ: 081-234-5678 | Line: @nongoauto</small>
    </div>
  </footer>

  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script ค้นหา -->
  <script>
    function searchProduct(event) {
      event.preventDefault();
      const keyword = document.getElementById("searchBox").value.toLowerCase().trim();
      const items = document.querySelectorAll(".category-item");
      let found = false;

      items.forEach(item => {
        const keywords = item.getAttribute("data-keywords").toLowerCase();
        if (keywords.includes(keyword)) {
          item.style.display = "block";
          found = true;
        } else {
          item.style.display = "none";
        }
      });

      if (!found && keyword !== "") {
        alert("ไม่พบสินค้าที่ค้นหา: " + keyword);
      }
      if (keyword === "") {
        items.forEach(item => item.style.display = "block");
      }
    }
  </script>
</body>
</html>
