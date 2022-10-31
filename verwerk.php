<?php
session_start();
?>

<html>
<body>
<?php
echo " " . $_SESSION["FirstName"] . "<br>";
echo "  " . $_SESSION["LastName"] . "<br>";
echo "  " . $_SESSION["email"] . "<br>";
echo "  " . $_SESSION["Address"] . "<br>";
echo "  " . $_SESSION["Zipcode"] . "<br>";
echo "  " . $_SESSION["City"] . "<br>";
?>
</body>






