<html>
<body>
<?php
$servername = "localhost";
$dbname = "snack_trax";
$username = "root";
$password = "@L3sley2018!";

$con = mysql_connect("localhost","snack_trax","root","@L3sley2018!");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 mysql_select_db("snack_trax", $con);

 $sql="INSERT INTO users (fname, lname, email, password, pswrepeat)

VALUES

('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]','$_POST[pswrepeat]')";

 if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  echo "Account created. Your username is your email address. Enjoy.";

 

mysql_close($con)

?>

</body>