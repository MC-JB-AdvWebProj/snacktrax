<?php
include 'header.php';
?>

<?php
include 'nav.php';
?>

<?php
$servername = "localhost";
$database = "snack_trax";
$username = "root";
$password = "root";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO users (fname, lname, email, passwords) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[passwords]')";
if (mysqli_query($conn, $sql)) {
    echo "<script>window.location = 'login.php'</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

</body>

<?php
include 'footer.php';
?>
</body>
</html>

