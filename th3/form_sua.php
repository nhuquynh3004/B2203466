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
    die("Connection failed: " . $conn->connect_error);
}

// Lấy ID sinh viên từ POST hoặc GET
$id = isset($_POST['id']) ? $_POST['id'] : (isset($_GET['id']) ? $_GET['id'] : null);
if (!$id) {
    die("Không tìm thấy ID. Vui lòng quay lại.");
}

// Lấy thông tin sinh viên từ bảng `student`
$sql_student = "SELECT * FROM student WHERE id='" . $id . "'";
$result_student = $conn->query($sql_student);
if ($result_student->num_rows == 0) {
    die("Không tìm thấy sinh viên với ID: " . $id);
}
$row = $result_student->fetch_assoc();

// Lấy danh sách chuyên ngành từ bảng `major`
$sql_major = "SELECT id, name_major FROM major";
$result_major = $conn->query($sql_major);
?>
<body>
    <!-- Hiển thị thông tin sinh viên -->
    <form action="sua.php" method="post">
        ID: <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly><br>
        Name: <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>"><br>
        E-mail: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
        Birthday: <input type="date" name="birth" value="<?php echo $row['Birthday']; ?>"><br>

        <!-- Combobox hiển thị chuyên ngành -->
        Major:
        <select name="major_id" required>
            <option value="">-- Select Major --</option>
            <?php
            while ($major_row = $result_major->fetch_assoc()) {
                $selected = ($major_row['id'] == $row['major_id']) ? "selected" : "";
                echo "<option value='" . $major_row['id'] . "' " . $selected . ">" . $major_row['id'] . " - " . $major_row['name_major'] . "</option>";
            }
            ?>
        </select><br>

        <input type="submit">
    </form>
</body>
</html>
