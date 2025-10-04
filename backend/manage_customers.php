<?php
session_start();
include 'connectdb.php';

// ตรวจสอบสิทธิ์ Admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// ✅ ลบลูกค้า
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);
    $sql = "DELETE FROM customers WHERE id = $id";
    if ($conn->query($sql)) {
        echo "<script>alert('ลบลูกค้าเรียบร้อย'); window.location='manage_customers.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// ✅ ดึงข้อมูลลูกค้าทั้งหมด
$sql = "SELECT * FROM customers ORDER BY id ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>จัดการลูกค้า - น้องออโต้ เบเกอรี่</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2 class="mb-4">👤 จัดการลูกค้า</h2>
<a href="admin_dashboard.php" class="btn btn-secondary mb-3">⬅ กลับ Dashboard</a>
<a href="customer_add.php" class="btn btn-success mb-3">➕ เพิ่มลูกค้าใหม่</a>

<table class="table table-bordered table-hover">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>ชื่อ</th>
      <th>Email</th>
      <th>เบอร์โทร</th>
      <th>ที่อยู่</th>
      <th>วันที่สมัคร</th>
      <th>การจัดการ</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= $row['phone'] ?></td>
        <td><?= $row['address'] ?></td>
        <td><?= $row['created_at'] ?></td>
        <td>
          <a href="customer_edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">แก้ไข</a>
          <a href="manage_customers.php?delete_id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบลูกค้า?');">ลบ</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</body>
</html>
