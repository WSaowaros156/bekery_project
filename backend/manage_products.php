<?php
session_start();
include 'connectdb.php';

// ตรวจสอบสิทธิ์ Admin
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// ✅ ลบสินค้า
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);
    $sql = "DELETE FROM products WHERE product_id = $id";
    if ($conn->query($sql)) {
        echo "<script>alert('ลบสินค้าเรียบร้อย'); window.location='manage_products.php';</script>";
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

// ✅ ฟังก์ชันค้นหา
$search = "";
$where = "";
if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $conn->real_escape_string($_GET['search']);
    $where = "WHERE product_name LIKE '%$search%' OR category LIKE '%$search%'";
}

// ✅ ดึงข้อมูลสินค้า
$sql = "SELECT * FROM products $where ORDER BY product_id ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>จัดการสินค้า - น้องออโต้ เบเกอรี่</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2 class="mb-4">🛒 จัดการสินค้า</h2>
<a href="admin_dashboard.php" class="btn btn-secondary mb-3">⬅ กลับ Dashboard</a>
<a href="product_add.php" class="btn btn-success mb-3">➕ เพิ่มสินค้าใหม่</a>

<!-- 🔎 ฟอร์มค้นหา -->
<form class="row g-3 mb-3" method="get" action="">
  <div class="col-md-6">
    <input type="text" name="search" class="form-control" placeholder="ค้นหาสินค้า / หมวดหมู่" 
           value="<?php echo htmlspecialchars($search); ?>">
  </div>
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary">ค้นหา</button>
    <a href="manage_products.php" class="btn btn-outline-secondary">รีเซ็ต</a>
  </div>
</form>

<table class="table table-bordered table-hover">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>ชื่อสินค้า</th>
      <th>หมวดหมู่</th>
      <th>ราคา</th>
      <th>ภาพ</th>
      <th>การจัดการ</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['product_id'] ?></td>
          <td><?= htmlspecialchars($row['product_name']) ?></td>
          <td><?= $row['category'] ?></td>
          <td><?= $row['price'] ?> บาท</td>
          <td><img src="<?= $row['image'] ?>" width="60"></td>
          <td>
            <a href="product_edit.php?id=<?= $row['product_id'] ?>" class="btn btn-warning btn-sm">แก้ไข</a>
            <a href="manage_products.php?delete_id=<?= $row['product_id'] ?>" 
               class="btn btn-danger btn-sm" 
               onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบสินค้า?');">ลบ</a>
          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="6" class="text-center">ไม่พบสินค้า</td></tr>
    <?php endif; ?>
  </tbody>
</table>

</body>
</html>
