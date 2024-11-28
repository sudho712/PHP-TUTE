<!DOCTYPE html>
<html>

<body>
    <h1>r : read</h1>
    <h4>fclose : file close</h4>
<h3>r	Open a file for read only. File pointer starts at the beginning of the file <br>
<br>w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
<br>a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
<br>x	Creates a new file for write only. Returns FALSE and an error if file already exists
<br>r+	Open a file for read/write. File pointer starts at the beginning of the file
<br>w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
<br>a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
<br>x+	Creates a new file for read/write. Returns FALSE and an error if file already exists</h3>
    <?php
    $myfile = fopen("fopen.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("fopen.txt"));
    fclose($myfile);
    ?>

</body>

</html>