<?php
// Cookie details
$cookie_name = "user"; // Name of the cookie
$cookie_value = "John Doe"; // Value of the cookie

// Setting the cookie
// The cookie will expire after 30 days (86400 seconds * 30)
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // The "/" makes it available across the entire domain
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie Example</title>
</head>

<body>
  <h1>PHP Cookie Example</h1>
  <?php
  // Check if the cookie is set
  if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }
  ?>
</body>

</html>