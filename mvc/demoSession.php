<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "mayur";
$_SESSION["lastname"] = "lokhande";
echo "Session variables are set.";
?>

</body>
</html>

