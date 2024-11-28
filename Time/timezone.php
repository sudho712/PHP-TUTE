<!DOCTYPE html>
<html>
<body>

<?php
// Display time for India
echo "Indian Time:<br>";
date_default_timezone_set("Asia/Kolkata"); // Correct timezone for Mumbai
echo "The time is " . date("h:i:sa");

echo "<br><br>";

// Display time for New York
echo "New York Time:<br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

</body>
</html>
