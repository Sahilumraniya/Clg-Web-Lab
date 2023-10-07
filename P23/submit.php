<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Connect to the MySQL database (update with your database credentials)
    $mysqli = new mysqli("localhost", "root", "", "StudentDatabase");

    // Check for database connection errors
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

/*    // Insert student data into the database
    $sql = "INSERT INTO Students (first_name, last_name, email, phone) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    // Bind parameters and execute the query
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $phone);

*/
    // Insert student data into the database
    $sql = "INSERT INTO Students (first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";
    $result = $mysqli->query($sql);

    
    if ($result === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $result->error;
    }

    // Close the database connection
    $mysqli->close();
}
?>
