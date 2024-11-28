<!DOCTYPE html>
<html>
<body>

<?php

echo "Current Day to After 6 weeks";
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);


while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>

</body>
</html>
