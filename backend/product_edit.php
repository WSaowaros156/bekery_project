<?php
session_start();
include 'connectdb.php';

// ตรวจสอบสิทธิ์ Admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// ✅ ตรวจสอบว่ามี id ที่ส่งมา
if (!isset($_GET['id'])) {
    die("ไม่พบรหัสสินค้า");
}

$id = intval($_GET['id']);

// ✅ ดึงข้อมูลสินค้าเก่ามาแสดง
$sql = "SELECT * FROM products WHERE product_id = $id";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    die("ไม่พบสินค้า");
}
$product = $result->fetch_assoc();

// ✅ เมื่อกดบันทึก
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['product_name']);
    $category = $conn->real_escape_string($_POST['category']);
    $price = floatval($_POST['price']);
    $stock = intval($_POST['stock']);
    $image = $conn->real_escape_string($_POST['image']);

    $sql_update = "UPDATE products 
                   SET product_name='$name', category='$category', price='$price', stock='$stock', image='$image' 
                   WHERE product_id=$id";

    if ($conn->query($sql_update)) {
        echo "<script>alert('แก้ไขสินค้าเรียบร้อย'); window.location='manage_products.php';</script>";
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
  <title>แก้ไขสินค้า - น้องออโต้ เบเกอรี่</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2 class="mb-4">✏️ แก้ไขสินค้า</h2>
<a href="manage_products.php" class="btn btn-secondary mb-3">⬅ กลับไปจัดการสินค้า</a>

<form method="post" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">ชื่อสินค้า</label>
    <input type="text" name="product_name" class="form-control" value="<?= htmlspecialchars($product['product_name']) ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">หมวดหมู่</label>
    <select name="category" class="form-select" required>
      <option value="cake" <?= $product['category'] == 'cake' ? 'selected' : '' ?>>🍰 เค้ก</option>
      <option value="cookie" <?= $product['category'] == 'cookie' ? 'selected' : '' ?>>🍪 คุกกี้</option>
      <option value="bread" <?= $product['category'] == 'bread' ? 'selected' : '' ?>>🥖 ขนมปัง</option>
      <option value="donut" <?= $product['category'] == 'donut' ? 'selected' : '' ?>>🍩 โดนัท</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">ราคา (บาท)</label>
    <input type="number" step="0.01" name="price" class="form-control" value="<?= $product['price'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">สต็อก</label>
    <input type="number" name="stock" class="form-control" value="<?= $product['stock'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">ไฟล์รูปภาพ (เช่น c1.jpg)</label>
    <input type="text" name="image" class="form-control" value="<?= $product['image'] ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
</form>

</body>
</html>
