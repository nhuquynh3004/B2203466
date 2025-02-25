<!DOCTYPE HTML>
<html>

<body>
    <form action="luu.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Birthday: <input type="date" name="birth"><br>

        <!-- Combobox -->
        Major:
        <select name="major_id" required>
            <option value="">-- Select Major --</option>
            <?php
            // Kết nối CSDL lấy danh sách chuyên ngành
            $conn = new mysqli("localhost", "root", "", "qlsv");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT id, name_major FROM major";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['id'] . " - " . $row['name_major'] . "</option>";
            }
            $conn->close();
            ?>
        </select><br>

        <input type="submit">
    </form>
</body>

</html>