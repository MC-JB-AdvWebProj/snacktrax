<?php
include 'header.php';
?>

<?php
include 'nav.php';
?>

<?php
include_once 'db_connect.php'
?>

<?php
if(isset($_POST['submit']))
{
$email = $_POST['email'];
$passwords = $_POST['passwords'];

$res = mysqli_query("SELECT * FROM users WHERE email='$email'and passwords='$passwords'");
$result=mysqli_fetch_array($res);
if($result)
{
	echo "<script>window.location = 'snack-tracking.php'</script>";
}
else
{
	echo "Your email address or password is incorrect. ";
}
}
?>

<?php
include 'footer.php';
?>
</body>
</html>