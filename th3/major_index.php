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

$sql = "SELECT * FROM major";
$result = $conn->query($sql);
$result_all = $result->fetch_all(MYSQLI_ASSOC);
?>
<h1>Danh sách chuyên ngành</h1>
<a href="major_add.php">Thêm chuyên ngành</a><br><br>
<table border=1>
    <tr>
        <th>ID</th>
        <th>Name Major</th>
        <th colspan="2">Hành động</th>
    </tr>
    <?php foreach ($result_all as $row) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name_major"]; ?></td>
            <td>
                <form method="post" action="major_edit.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                    <input type="submit" value="Sửa" />
                </form>
            </td>
            <td>
                <form method="post" action="major_delete.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                    <input type="submit" value="Xóa" />
                </form>
            </td>
        </tr>
    <?php 
} ?>
</table>
<?php $conn->close(); ?>