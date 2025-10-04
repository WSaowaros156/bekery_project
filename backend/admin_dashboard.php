<?php
session_start();
include 'connectdb.php';

// ตรวจสอบการล็อกอินของ Admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - น้องออโต้ เบเกอรี่</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background: #343a40;
      padding-top: 20px;
      color: #fff;
    }
    .sidebar a {
      display: block;
      padding: 10px 20px;
      color: #ddd;
      text-decoration: none;
    }
    .sidebar a:hover {
      background: #495057;
      color: #fff;
    }
    .content {
      padding: 20px;
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 sidebar">
      <h4 class="text-center"> Admin</h4>
      <hr>
      <a href="dashboard.php"> Dashboard</a>
      <a href="manage_products.php"> จัดการสินค้า</a>
      <a href="manage_categories.php"> จัดการประเภทสินค้า</a>
      <a href="manage_orders.php"> จัดการออเดอร์</a>
      <a href="manage_customers.php"> จัดการลูกค้า</a>
      <a href="admin_logout.php" class="text-danger"> ออกจากระบบ</a>
    </nav>

    <!-- Main Content -->
    <main class="col-md-10 content">
      <h2>📊 ยินดีต้อนรับ Admin</h2>
      <p>คุณสามารถจัดการสินค้า, ประเภทสินค้า, ลูกค้า และออเดอร์ได้จากเมนูด้านซ้าย</p>

      <!-- Dashboard Cards -->
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card text-white bg-primary h-100">
            <div class="card-body">
              <h5 class="card-title">สินค้า</h5>
              <p class="card-text">ดูและจัดการสินค้าในร้าน</p>
              <a href="manage_products.php" class="btn btn-light btn-sm">ไปที่เมนู</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-white bg-secondary h-100">
            <div class="card-body">
              <h5 class="card-title">ประเภทสินค้า</h5>
              <p class="card-text">ดูและจัดการประเภทสินค้า</p>
              <a href="manage_categories.php" class="btn btn-light btn-sm">ไปที่เมนู</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-white bg-success h-100">
            <div class="card-body">
              <h5 class="card-title">ออเดอร์</h5>
              <p class="card-text">ตรวจสอบคำสั่งซื้อและสถานะ</p>
              <a href="manage_orders.php" class="btn btn-light btn-sm">ไปที่เมนู</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-white bg-info h-100">
            <div class="card-body">
              <h5 class="card-title">ลูกค้า</h5>
              <p class="card-text">ดูข้อมูลและประวัติลูกค้า</p>
              <a href="manage_customers.php" class="btn btn-light btn-sm">ไปที่เมนู</a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
</body>
</html>
