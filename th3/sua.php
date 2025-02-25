<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ POST
$id = isset($_POST['id']) ? $_POST['id'] : null;
$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$birth = isset($_POST['birth']) ? $_POST['birth'] : null;
$major_id = isset($_POST['major_id']) ? $_POST['major_id'] : null;

// Kiểm tra dữ liệu
if (!$id || !$fullname || !$email || !$birth || !$major_id) {
    die("Vui lòng nhập đầy đủ thông tin.");
}

// Chuẩn bị câu truy vấn
$sql = "UPDATE student 
        SET fullname = ?, email = ?, Birthday = ?, major_id = ?
        WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $fullname, $email, $birth, $major_id, $id);

// Thực thi câu truy vấn
if ($stmt->execute()) {
    header('Location: taidulieu_bang1.php'); // Điều hướng về trang danh sách
    exit();
} else {
    echo "Lỗi khi cập nhật: " . $stmt->error;
}

// Đóng kết nối
$stmt->close();
$conn->close();
?>
