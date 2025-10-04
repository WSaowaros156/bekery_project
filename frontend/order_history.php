<?php
session_start();
include 'connectdb.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION['user_id'];

// ดึงประวัติคำสั่งซื้อของผู้ใช้
$sql = "SELECT * FROM orders WHERE customer_id = $user_id ORDER BY order_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ประวัติการสั่งซื้อ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2>📜 ประวัติการสั่งซื้อ</h2>

<table class="table table-bordered">
  <tr>
    <th>รหัสคำสั่งซื้อ</th>
    <th>วันที่สั่งซื้อ</th>
    <th>สถานะ</th>
    <th>การจัดการ</th>
  </tr>
  <?php
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['order_date']}</td>
                  <td>{$row['status']}</td>
                  <td>
                    <a href='status.php?order_id={$row['id']}' class='btn btn-info btn-sm'>เช็คสถานะ</a>
                  </td>
                </tr>";
      }
  } else {
      echo "<tr><td colspan='4' class='text-center'>ยังไม่มีการสั่งซื้อ</td></tr>";
  }
  ?>
</table>

<a href="afterlogin.php" class="btn btn-secondary">⬅ กลับหน้าหลัก</a>

</body>
</html>
