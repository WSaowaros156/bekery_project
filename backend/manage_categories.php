<?php
session_start();
include 'connectdb.php';

// ตรวจสอบสิทธิ์ Admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// ✅ ลบประเภท
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);
    $sql = "DELETE FROM categories WHERE category_id = $id";
    if ($conn->query($sql)) {
        echo "<script>alert('ลบประเภทเรียบร้อย'); window.location='manage_categories.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// ✅ ดึงข้อมูล
$sql = "SELECT * FROM categories ORDER BY category_id ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>จัดการประเภทสินค้า</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2 class="mb-4">📂 จัดการประเภทสินค้า</h2>
<a href="admin_dashboard.php" class="btn btn-secondary mb-3">⬅ กลับ Dashboard</a>
<a href="category_add.php" class="btn btn-success mb-3">➕ เพิ่มประเภทสินค้าใหม่</a>

<table class="table table-bordered table-hover">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>ชื่อประเภท</th>
      <th>รหัส (code)</th>
      <th>การจัดการ</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['category_id'] ?></td>
        <td><?= htmlspecialchars($row['category_name']) ?></td>
        <td><?= $row['category_code'] ?></td>
        <td>
          <a href="category_edit.php?id=<?= $row['category_id'] ?>" class="btn btn-warning btn-sm">แก้ไข</a>
          <a href="manage_categories.php?delete_id=<?= $row['category_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบ?');">ลบ</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</body>
</html>
