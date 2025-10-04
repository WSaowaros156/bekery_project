<?php
session_start();
include 'connectdb.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM customers WHERE id=$id";
$result = $conn->query($sql);
$customer = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);

    $update = "UPDATE customers SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";

    if ($conn->query($update)) {
        echo "<script>alert('อัปเดตข้อมูลลูกค้าเรียบร้อย'); window.location='manage_customers.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>แก้ไขข้อมูลลูกค้า</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2>✏️ แก้ไขข้อมูลลูกค้า</h2>
<form method="post" class="mt-3">
  <div class="mb-3">
    <label class="form-label">ชื่อ</label>
    <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($customer['name']) ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($customer['email']) ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">เบอร์โทร</label>
    <input type="text" name="phone" class="form-control" value="<?= $customer['phone'] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">ที่อยู่</label>
    <textarea name="address" class="form-control"><?= $customer['address'] ?></textarea>
  </div>
  <button type="submit" class="btn btn-warning">อัปเดต</button>
  <a href="manage_customers.php" class="btn btn-secondary">ยกเลิก</a>
</form>

</body>
</html>
