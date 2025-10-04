<?php
session_start();
include 'connectdb.php';

// ถ้าไม่ได้ login -> ส่งกลับไปหน้า login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

// ----------------- เพิ่มสินค้าเข้าตะกร้า -----------------
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $id = $_POST['product_id'];         // product_id จากตาราง products
    $name = $_POST['product_name'];     // ชื่อสินค้า (เพื่อแสดงผลเฉยๆ)
    $price = $_POST['price'];           // ราคาสินค้า
    $qty = isset($_POST['qty']) ? (int)$_POST['qty'] : 1;

    // ถ้ามีสินค้าอยู่แล้วให้บวกจำนวน
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty'] += $qty;
    } else {
        $_SESSION['cart'][$id] = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'qty' => $qty
        ];
    }
    header("Location: cart.php");
    exit();
}

// ----------------- ลบสินค้าออกจากตะกร้า -----------------
if (isset($_GET['remove_id'])) {
    $remove_id = $_GET['remove_id'];
    if (isset($_SESSION['cart'][$remove_id])) {
        unset($_SESSION['cart'][$remove_id]);
    }
    header("Location: cart.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ตะกร้าสินค้า</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2>🛒 ตะกร้าสินค้า</h2>
<table class="table table-bordered text-center align-middle">
  <thead class="table-dark">
    <tr>
      <th>สินค้า</th>
      <th>ราคา (บาท)</th>
      <th>จำนวน</th>
      <th>รวม</th>
      <th>จัดการ</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $total = 0;
  if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $item) {
          $sum = $item['price'] * $item['qty'];
          $total += $sum;
          echo "<tr>
                  <td>{$item['name']}</td>
                  <td>{$item['price']}</td>
                  <td>{$item['qty']}</td>
                  <td>{$sum}</td>
                  <td><a href='cart.php?remove_id={$item['id']}' class='btn btn-danger btn-sm'>ลบ</a></td>
                </tr>";
      }
  } else {
      echo "<tr><td colspan='5'>ไม่มีสินค้าในตะกร้า</td></tr>";
  }
  ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="3" class="text-end"><b>ยอดรวมทั้งหมด</b></td>
      <td colspan="2"><b><?php echo $total; ?> บาท</b></td>
    </tr>
  </tfoot>
</table>

<?php if (!empty($_SESSION['cart'])): ?>
  <a href="checkout.php" class="btn btn-primary">✅ ยืนยันสั่งซื้อ</a>
<?php endif; ?>
<a href="afterlogin.php" class="btn btn-secondary">⬅ กลับไปเลือกสินค้า</a>

</body>
</html>
