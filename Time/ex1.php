<!DOCTYPE html>
<html>
<body>

<?php
echo "Tomorrow Date <br><br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "Next Saturday <br><br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "NExt 3 months date <br><br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

</body>
</html>
