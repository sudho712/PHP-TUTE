<!DOCTYPE html>
<html>
<body>
<h1>Simple Date</h1>
<p>H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)</p>
<?php
echo "The time is " . date("h:i:sa");

echo "<br>The time is " . date("i:h:sa");

echo "<br>Capital A Time PM";
echo "The time is " . date("h:i:sA");

echo "<br>Small a Time am";
echo "The time is " . date("h:i:sa");
?>

</body>
</html>
