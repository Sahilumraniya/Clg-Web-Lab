<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>
    <h1>Student Records</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        
        <?php
        // Establish a database connection
        $host = "localhost"; // Your database host
        $username = "root"; // Your database username
        $password = ""; // Your database password
        $database = "studentdatabase"; // Your database name

        $mysqli = new mysqli($host, $username, $password, $database);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Fetch data from the 'students' table
        $sql = "SELECT * FROM students";
        $result = $mysqli->query($sql);

        if (!$result) {
            die("Query failed: " . $mysqli->error);
        }

        // Display data in a table
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['first_name']}</td>";
            echo "<td>{$row['last_name']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "</tr>";
        }

        // Close the database connection
        $mysqli->close();
        ?>
    </table>
</body>
</html>
