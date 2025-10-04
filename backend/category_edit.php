<?php
session_start();
include 'connectdb.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

if (!isset($_GET['id'])) die("ไม่พบประเภท");

$id = intval($_GET['id']);
$sql = "SELECT * FROM categories WHERE category_id=$id";
$result = $conn->query($sql);
if ($result->num_rows == 0) die("ไม่พบประเภท");
$category = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['category_name']);
    $code = $conn->real_escape_string($_POST['category_code']);

    $sql_update = "UPDATE categories SET category_name='$name', category_code='$code' WHERE category_id=$id";
    if ($conn->query($sql_update)) {
        echo "<script>alert('แก้ไขเรียบร้อย'); window.location='manage_categories.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>แก้ไขประเภทสินค้า</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
<h2>✏️ แก้ไขประเภทสินค้า</h2>
<a href="manage_categories.php" class="btn btn-secondary mb-3">⬅ กลับ</a>

<form method="post" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">ชื่อประเภท</label>
    <input type="text" name="category_name" class="form-control" value="<?= htmlspecialchars($category['category_name']) ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">รหัส</label>
    <input type="text" name="category_code" class="form-control" value="<?= $category['category_code'] ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
</form>
</body>
</html>
