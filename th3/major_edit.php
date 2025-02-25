<!DOCTYPE HTML>
<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Kết nối CSDL
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại" . $conn->connect_error);
}

$id = $_POST['id'];
$sql = "SELECT * FROM major WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<body>
    <h1>Sửa chuyên ngành</h1>
    <form action="major_edit_save.php" method="post">
        ID: <input type="text" name="id" value="<?php echo $row['id']; ?>" required><br>
        Name Major: <input type="text" name="name_major" value="<?php echo $row['name_major']; ?>"><br>
        <input type="hidden" name="old_id" value="<?php echo $row['id']; ?>">
        <input type="submit" value="Submit">
    </form>
</body>

</html>