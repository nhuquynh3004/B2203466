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

// Câu lệnh SQL có JOIN bảng major
$sql = "SELECT student.*, major.id AS major_id, major.name_major 
        FROM student 
        LEFT JOIN major ON student.major_id = major.id";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Load dữ liệu lên biến result_all
    $result_all = $result->fetch_all(MYSQLI_ASSOC);
    ?>
    <h1>Bảng dữ liệu sinh viên</h1>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Ho Ten</th>
            <th>Email</th>
            <th>Ngay sinh</th>
            <th>ID Major</th>
            <th>Name Major</th>
            <th colspan="2">Hành động</th>
        </tr>
        <?php
        foreach ($result_all as $row) {
            $date = date_create($row['Birthday']);
            echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["fullname"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $date->format('d-m-Y') . "</td>
                <td>" . $row["major_id"] . "</td>
                <td>" . $row["name_major"] . "</td>
                <td>
                    <form method='post' action='xoa.php'>
                        <input type='submit' name='action' value='Xóa' />
                        <input type='hidden' name='id' value='" . $row['id'] . "' />
                    </form>
                </td>
                <td>
                    <form method='post' action='form_sua.php'>
                        <input type='submit' name='action' value='Sửa' />
                        <input type='hidden' name='id' value='" . $row['id'] . "' />
                    </form>
                </td>
            </tr>";
        }
        echo "</table>";
} else {
    echo "0 kết quả trả về";
}
$conn->close();
?>