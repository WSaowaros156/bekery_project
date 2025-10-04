<?php
include 'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone    = trim($_POST['phone']);
    $address  = trim($_POST['address']);

    // ตรวจสอบอีเมลซ้ำ
    $check = $conn->prepare("SELECT id FROM customers WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<script>alert('อีเมลนี้มีอยู่ในระบบแล้ว กรุณาใช้อีเมลอื่น'); window.location='register.';</script>";
        exit();
    }
    $check->close();

    // เพิ่มข้อมูลลูกค้าใหม่
    $stmt = $conn->prepare("INSERT INTO customers (name, email, password, phone, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullname, $email, $password, $phone, $address);

    if ($stmt->execute()) {
        echo "<script>alert('สมัครสมาชิกสำเร็จ! กรุณาเข้าสู่ระบบ'); window.location='login.html';</script>";
    } else {
        echo "เกิดข้อผิดพลาด: " . $stmt->error;
    }

    $stmt->close();
}
?>
