<?php
$servername = "localhost";  // ใช้ localhost ถ้า run ผ่าน XAMPP/MAMP
$username   = "root";       // ค่า default ของ XAMPP
$password   = "";           // ค่า default ของ XAMPP
$dbname     = "bakery_db";  // ชื่อฐานข้อมูลที่เราสร้างไว้

$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// ตั้งค่า charset ให้รองรับภาษาไทย
$conn->set_charset("utf8mb4");
?>
