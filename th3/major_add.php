<!DOCTYPE HTML>
<html>

<body>
    <h1>Thêm chuyên ngành</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlsv";

        // Kết nối CSDL
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        $id = $_POST["id"];
        $name_major = $_POST["name_major"];

        $sql = "INSERT INTO major (id, name_major) VALUES ('$id', '$name_major')";

        if ($conn->query($sql) === TRUE) {
            header("Location: major_index.php?id=$id");
            exit();
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>

    <form action="major_add.php" method="post">
        ID: <input type="text" name="id" required><br>
        Name Major: <input type="text" name="name_major" required><br>
        <input type="submit" value="Add">
    </form>

</body>

</html>