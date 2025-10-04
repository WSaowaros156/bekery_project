<?php
session_start();
include 'connectdb.php';

// ตรวจสอบสิทธิ์ Admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO customers (name, email, phone, address, password)
            VALUES ('$name', '$email', '$phone', '$address', '$password')";

    if ($conn->query($sql)) {
        echo "<script>alert('เพิ่มลูกค้าใหม่เรียบร้อย'); window.location='manage_customers.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เพิ่มลูกค้าใหม่</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2>➕ เพิ่มลูกค้าใหม่</h2>
<form method="post" class="mt-3">
  <div class="mb-3">
    <label class="form-label">ชื่อ</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">เบอร์โทร</label>
    <input type="text" name="phone" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">ที่อยู่</label>
    <textarea name="address" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">รหัสผ่าน</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success">บันทึก</button>
  <a href="manage_customers.php" class="btn btn-secondary">ยกเลิก</a>
</form>

</body>
</html>
