


<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";  // hoặc địa chỉ IP của máy chủ MySQL
$username = "root";         // Tên người dùng MySQL
$password = "";             // Mật khẩu MySQL
$dbname = "doan";   // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} else {
    echo "Kết nối thành công với cơ sở dữ liệu!";
}

// Đóng kết nối (không bắt buộc)
$conn->close();
?>
