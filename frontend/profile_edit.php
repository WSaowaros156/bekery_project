<?php
session_start();
include 'connectdb.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION['user_id'];

// อัปเดตข้อมูลเมื่อกดบันทึก
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $password = $_POST['password'];

    if (!empty($password)) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $conn->query("UPDATE customers 
                      SET fullname='$fullname', phone='$phone', address='$address', password='$password' 
                      WHERE id=$user_id");
    } else {
        $conn->query("UPDATE customers 
                      SET fullname='$fullname', phone='$phone', address='$address' 
                      WHERE id=$user_id");
    }
    echo "<script>alert('✅ อัปเดตข้อมูลเรียบร้อยแล้ว'); window.location='afterlogin.php';</script>";
}

// ดึงข้อมูลผู้ใช้ปัจจุบัน
$result = $conn->query("SELECT * FROM customers WHERE id=$user_id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>แก้ไขข้อมูลส่วนตัว</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="mb-4 text-center">👤 แก้ไขข้อมูลส่วนตัว</h3>
          <form method="post">
            <div class="mb-3">
              <label class="form-label">ชื่อ-นามสกุล</label>
              <input type="text" name="fullname" class="form-control" value="<?php echo $user['fullname']; ?>" required>
            </div>
            <div class="mb-3">
              <label class="form-label">เบอร์โทรศัพท์</label>
              <input type="text" name="phone" class="form-control" value="<?php echo $user['phone']; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">ที่อยู่</label>
              <textarea name="address" class="form-control" rows="3"><?php echo $user['address']; ?></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">รหัสผ่านใหม่ (ถ้าไม่เปลี่ยน ให้เว้นว่าง)</label>
              <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary w-100">บันทึกข้อมูล</button>
          </form>
          <div class="text-center mt-3">
            <a href="afterlogin.php" class="btn btn-secondary">⬅ กลับหน้าหลัก</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
