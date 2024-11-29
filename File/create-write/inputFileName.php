<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the file name and data from the form
    $fileName = $_POST['file_name'];
    $firstName = $_POST['first_name'];
    $secondName = $_POST['second_name'];

    // Validate the file name (to prevent security risks like directory traversal)
    $fileName = basename($fileName) . ".txt";

    // Open the specified file in append mode or create it if it doesn't exist
    $myfile = fopen($fileName, "a") or die("Unable to open file!");

    // Write the input values to the file
    fwrite($myfile, $firstName . "\n");
    fwrite($myfile, $secondName . "\n");

    // Close the file
    fclose($myfile);

    // Display a success message
    echo "Data added successfully to file: " . htmlspecialchars($fileName);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create and Write to File</title>
</head>
<body>
    <form method="post" action="">
        <label for="file_name">File Name:</label>
        <input type="text" id="file_name" name="file_name" required placeholder="Enter file name">
        <br><br>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br><br>
        <label for="second_name">Second Name:</label>
        <input type="text" id="second_name" name="second_name" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
