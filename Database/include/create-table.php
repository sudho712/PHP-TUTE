<?php
// Include the connection file
include 'connection.php';

// SQL query to create the table
$sql = "CREATE TABLE IF NOT EXISTS test (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
  echo "Table 'test' created successfully.<br>";
} else {
  echo "Error creating table: " . $conn->error . "<br>";
}

// Close the connection after use
$conn->close();
?>
