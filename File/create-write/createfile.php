<?php
// Open the file "newfile.txt" in write mode or create it if it doesn't exist
$myfile = fopen("new.txt", "w") or die("Unable to open file!");

// First line of text to write to the file
$txt = "John Doe\n";
// Write the first line to the file
fwrite($myfile, $txt);

// Second line of text to write to the file
$txt = "Jane Doe\n";
// Write the second line to the file
fwrite($myfile, $txt);

// Close the file to save the changes and free resources
fclose($myfile);

// Display a success message
echo "File created and written successfully.";
?>
