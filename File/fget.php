
<!DOCTYPE html>
<html>
<body>
<h1>Read only Single Line!</h1>
<?php
$myfile = fopen("fget.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

</body>
</html>