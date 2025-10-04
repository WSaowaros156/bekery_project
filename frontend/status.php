<?php
session_start();
include 'connectdb.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

// ตรวจสอบว่ามี order_id ถูกส่งมา
if (isset($_GET['order_id'])) {
    $order_id = intval($_GET['order_id']);
} else {
    die("ไม่พบรหัสคำสั่งซื้อ");
}

// ดึงข้อมูลออเดอร์
$sql = "SELECT * FROM orders WHERE id = $order_id AND customer_id = {$_SESSION['user_id']}";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เช็คสถานะคำสั่งซื้อ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<?php
if ($result->num_rows > 0) {
    $order = $result->fetch_assoc();
    echo "<div class='card mb-4'>
            <div class='card-body'>
              <h3 class='card-title'>📦 สถานะคำสั่งซื้อ #{$order['id']}</h3>
              <p><b>วันที่สั่งซื้อ:</b> {$order['order_date']}</p>
              <p><b>สถานะ:</b> <span class='badge bg-info'>{$order['status']}</span></p>
            </div>
          </div>";

    // ดึงรายการสินค้าโดย JOIN กับ products
    $sql_items = "SELECT oi.*, p.product_name 
                  FROM order_items oi
                  JOIN products p ON oi.product_id = p.product_id
                  WHERE oi.order_id = $order_id";
    $items = $conn->query($sql_items);

    echo "<h4>🛒 รายการสินค้า</h4>";
    echo "<table class='table table-bordered table-striped'>
            <tr class='table-secondary'>
              <th>สินค้า</th>
              <th>ราคา</th>
              <th>จำนวน</th>
              <th>รวม</th>
            </tr>";

    $total = 0;
    while ($row = $items->fetch_assoc()) {
        $sum = $row['price'] * $row['qty'];
        $total += $sum;
        echo "<tr>
                <td>{$row['product_name']}</td>
                <td>{$row['price']} บาท</td>
                <td>{$row['qty']}</td>
                <td>$sum บาท</td>
              </tr>";
    }
    echo "<tr class='table-dark'>
            <td colspan='3' class='text-end'><b>ยอดรวมทั้งหมด</b></td>
            <td><b>$total บาท</b></td>
          </tr>";
    echo "</table>";
} else {
    echo "<div class='alert alert-danger'>ไม่พบคำสั่งซื้อของคุณ</div>";
}
?>

<a href="order_history.php" class="btn btn-secondary">⬅ กลับไปประวัติการสั่งซื้อ</a>
<a href="afterlogin.php" class="btn btn-primary">🏠 กลับหน้าหลัก</a>

</body>
</html>
