<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $firstName = $_POST['first_name'];
    $secondName = $_POST['second_name'];

    // Open the file "new.txt" in write mode or create it if it doesn't exist
    $myfile = fopen("input1.txt", "w") or die("Unable to open file!");

    // Write the input values to the file
    fwrite($myfile, $firstName . "\n");
    fwrite($myfile, $secondName . "\n");

    // Close the file
    fclose($myfile);

    // Display a success message
    echo "File created and written successfully.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write to File</title>
</head>
<body>
    <form method="post" action="">
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
