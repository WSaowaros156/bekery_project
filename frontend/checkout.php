<?php
session_start();
include 'connectdb.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$customer_id = $_SESSION['user_id'];

// 1. เพิ่มคำสั่งซื้อใหม่
$sql = "INSERT INTO orders (customer_id, order_date, status)
        VALUES ('$customer_id', NOW(), 'กำลังดำเนินการ')";
if ($conn->query($sql) === TRUE) {
    $order_id = $conn->insert_id;

    // 2. เพิ่มสินค้าในคำสั่งซื้อนี้
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $product_id = $item['id']; 
            $qty = $item['qty'];
            $price = $item['price'];

            $sql_item = "INSERT INTO order_items (order_id, product_id, qty, price)
                         VALUES ('$order_id', '$product_id', '$qty', '$price')";

            if (!$conn->query($sql_item)) {
                echo "Error (order_items): " . $conn->error;
            }
        }
    }

    // 3. ล้างตะกร้า
    unset($_SESSION['cart']);

    echo "<script>alert('สั่งซื้อสำเร็จ!'); window.location='order_history.php';</script>";
} else {
    echo "เกิดข้อผิดพลาด: " . $conn->error;
}
?>
