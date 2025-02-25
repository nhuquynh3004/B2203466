<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Kết nối CSDL
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$old_id = $_POST['old_id'];
$new_id = $_POST['id'];
$name_major = $_POST['name_major'];

$sql = "UPDATE major SET id='$new_id', name_major='$name_major' WHERE id='$old_id'";

if ($conn->query($sql) === TRUE) {
    header('Location: major_index.php'); 
    exit();
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>