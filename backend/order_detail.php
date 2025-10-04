<?php
session_start();
include 'connectdb.php';

// ตรวจสอบสิทธิ์ Admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

$order_id = intval($_GET['order_id']);

// ✅ ดึงข้อมูลออเดอร์ + ลูกค้า
$sql_order = "SELECT orders.id, orders.order_date, orders.status, customers.name, customers.phone, customers.address
              FROM orders 
              INNER JOIN customers ON orders.customer_id = customers.id
              WHERE orders.id = $order_id";
$order = $conn->query($sql_order)->fetch_assoc();

// ✅ ดึงสินค้าในออเดอร์
$sql_items = "SELECT order_items.qty, order_items.price, products.product_name 
              FROM order_items 
              INNER JOIN products ON order_items.product_id = products.product_id
              WHERE order_items.order_id = $order_id";
$items = $conn->query($sql_items);
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>รายละเอียดออเดอร์</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2>📋 รายละเอียดออเดอร์ #<?= $order['id'] ?></h2>
<p><b>ลูกค้า:</b> <?= htmlspecialchars($order['name']) ?> (<?= $order['phone'] ?>)</p>
<p><b>ที่อยู่จัดส่ง:</b> <?= htmlspecialchars($order['address']) ?></p>
<p><b>วันที่สั่งซื้อ:</b> <?= $order['order_date'] ?></p>
<p><b>สถานะ:</b> <span class="badge bg-info"><?= $order['status'] ?></span></p>

<h4 class="mt-4">🛒 รายการสินค้า</h4>
<table class="table table-bordered">
  <thead class="table-secondary">
    <tr>
      <th>สินค้า</th>
      <th>ราคา</th>
      <th>จำนวน</th>
      <th>รวม</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $total = 0;
    while($row = $items->fetch_assoc()): 
        $sum = $row['price'] * $row['qty'];
        $total += $sum;
    ?>
      <tr>
        <td><?= htmlspecialchars($row['product_name']) ?></td>
        <td><?= $row['price'] ?> บาท</td>
        <td><?= $row['qty'] ?></td>
        <td><?= $sum ?> บาท</td>
      </tr>
    <?php endwhile; ?>
    <tr class="table-dark">
      <td colspan="3" class="text-end"><b>ยอดรวมทั้งหมด</b></td>
      <td><b><?= $total ?> บาท</b></td>
    </tr>
  </tbody>
</table>

<a href="manage_orders.php" class="btn btn-secondary">⬅ กลับ</a>

</body>
</html>
