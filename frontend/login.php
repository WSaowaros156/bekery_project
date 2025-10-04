<?php
session_start();
include 'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM customers WHERE email='$email'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            header("Location: afterlogin.php");
            exit();
        } else {
            echo "❌ รหัสผ่านไม่ถูกต้อง";
        }
    } else {
        echo "❌ ไม่พบอีเมลนี้";
    }
}
?>
