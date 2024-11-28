<?php
include 'connection.php';

// Check if ID is passed and valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record to be updated
    $result = $conn->query("SELECT * FROM test WHERE id = $id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script>alert('Record not found!'); window.location.href = 'index.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Invalid ID!'); window.location.href = 'index.php';</script>";
    exit;
}

// Update the record when form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $updateQuery = "UPDATE test SET firstname = '$firstname', lastname = '$lastname', email = '$email' WHERE id = $id";

    if ($conn->query($updateQuery) === TRUE) {
        echo "<script>alert('Record updated successfully!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Error updating record: " . $conn->error . "');</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>
    <h2>Update Record</h2>
    <form method="POST">
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($row['firstname']); ?>" required><br><br>
        
        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($row['lastname']); ?>" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br><br>
        
        <button type="submit">Update</button>
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>
