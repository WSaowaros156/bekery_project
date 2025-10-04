<?php
include 'connectdb.php';

// รหัสผ่านจะถูกเข้ารหัสก่อนบันทึก
$password = password_hash("123456", PASSWORD_DEFAULT);

$sql = "INSERT INTO admin_users (username, password) VALUES ('admin', '$password')";
$conn->query($sql);

echo "สร้างแอดมินเรียบร้อยแล้ว!";
?>
