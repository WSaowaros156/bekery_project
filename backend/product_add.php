<?php
session_start();
include 'connectdb.php';

// ตรวจสอบสิทธิ์ Admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// ✅ เมื่อกดบันทึก
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['product_name']);
    $category = $conn->real_escape_string($_POST['category']);
    $price = floatval($_POST['price']);
    $stock = intval($_POST['stock']);
    $image = $conn->real_escape_string($_POST['image']); // ชื่อไฟล์ภาพ เช่น c1.jpg

    $sql = "INSERT INTO products (product_name, category, price, stock, image) 
            VALUES ('$name', '$category', '$price', '$stock', '$image')";
    if ($conn->query($sql)) {
        echo "<script>alert('เพิ่มสินค้าเรียบร้อย'); window.location='manage_products.php';</script>";
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เพิ่มสินค้าใหม่ - น้องออโต้ เบเกอรี่</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2 class="mb-4">➕ เพิ่มสินค้าใหม่</h2>
<a href="manage_products.php" class="btn btn-secondary mb-3">⬅ กลับไปจัดการสินค้า</a>

<form method="post" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">ชื่อสินค้า</label>
    <input type="text" name="product_name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">หมวดหมู่</label>
    <select name="category" class="form-select" required>
      <option value="">-- เลือกหมวดหมู่ --</option>
      <option value="cake">🍰 เค้ก</option>
      <option value="cookie">🍪 คุกกี้</option>
      <option value="bread">🥖 ขนมปัง</option>
      <option value="donut">🍩 โดนัท</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">ราคา (บาท)</label>
    <input type="number" step="0.01" name="price" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">สต็อก</label>
    <input type="number" name="stock" class="form-control" value="10" required>
  </div>
  <div class="mb-3">
    <label class="form-label">ไฟล์รูปภาพ (เช่น c1.jpg)</label>
    <input type="text" name="image" class="form-control" required>
    <small class="text-muted">* ต้องอัปโหลดรูปภาพไปไว้ในโฟลเดอร์เดียวกับไฟล์เว็บไซต์ เช่น c1.jpg</small>
  </div>
  <button type="submit" class="btn btn-success">บันทึกสินค้า</button>
</form>

</body>
</html>
