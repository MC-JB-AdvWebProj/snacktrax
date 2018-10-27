<?php 

$yourFName = $conn->real_escape_string($_POST['fname']);
$yourLName = $conn->real_escape_string($_POST['lname']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$yourPassword = $conn->real_escape_string($_POST['password_hash']);
$yourPasswordRepeat = $conn->real_escape_string($_POST['pswrepeat']);
 
$sql="INSERT INTO users (fname, lname, email, password_hash, pswrepeat) VALUES ('".$yourFName."','".$yourLName."','".$yourEmail."', '".$yourPassword."', '".$yourPasswordRepeat."')";
 
 
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Account created. Your username is your email address. Enjoy.";
}
}
else
{
echo "Please fill out required fields.";
}
?>