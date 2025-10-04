<?php
session_start();
include 'connectdb.php';

// ตรวจสอบสิทธิ์ Admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// ✅ ดึงข้อมูลออเดอร์ + ลูกค้า
$sql = "SELECT orders.id, orders.order_date, orders.status, customers.name, customers.address
        FROM orders 
        INNER JOIN customers ON orders.customer_id = customers.id
        ORDER BY orders.id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>จัดการออเดอร์ - น้องออโต้ เบเกอรี่</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2 class="mb-4">📦 จัดการออเดอร์</h2>
<a href="admin_dashboard.php" class="btn btn-secondary mb-3">⬅ กลับ Dashboard</a>

<table class="table table-bordered table-hover">
  <thead class="table-dark">
    <tr>
      <th>Order ID</th>
      <th>ลูกค้า</th>
      <th>วันที่สั่งซื้อ</th>
      <th>สถานะ</th>
      <th>ที่อยู่จัดส่ง</th>
      <th>การจัดการ</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= $row['order_date'] ?></td>
        <td><span class="badge bg-info"><?= $row['status'] ?></span></td>
        <td><?= htmlspecialchars($row['address']) ?></td>
        <td>
          <a href="order_detail.php?order_id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">รายละเอียด</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</body>
</html>
