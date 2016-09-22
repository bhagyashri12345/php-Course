<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
// $_SESSION["name"]="mayur";
echo "name is " . $_SESSION["name"] . ".<br>";
echo "lastname is " . $_SESSION["lastname"] . ".";

 session_unset(); 
session_destroy(); 
print_r($_SESSION);
?>

</body>
</html>

