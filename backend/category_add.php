<?php
session_start();
include 'connectdb.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['category_name']);
    $code = $conn->real_escape_string($_POST['category_code']);

    $sql = "INSERT INTO categories (category_name, category_code) VALUES ('$name', '$code')";
    if ($conn->query($sql)) {
        echo "<script>alert('เพิ่มประเภทเรียบร้อย'); window.location='manage_categories.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เพิ่มประเภทสินค้า</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
<h2>➕ เพิ่มประเภทสินค้า</h2>
<a href="manage_categories.php" class="btn btn-secondary mb-3">⬅ กลับ</a>

<form method="post" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">ชื่อประเภท</label>
    <input type="text" name="category_name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">รหัส (เช่น cake, cookie)</label>
    <input type="text" name="category_code" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">บันทึก</button>
</form>
</body>
</html>
