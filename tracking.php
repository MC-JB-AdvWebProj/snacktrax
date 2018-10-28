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
$password = "@L3sley2018!";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO tracking (name, date, time, food, amount) VALUES ('$_POST[name]','$_POST[date]','$_POST[time]','$_POST[food]','$_POST[amount]')";
if (mysqli_query($conn, $sql)) {
    echo "<script>window.location = 'snack-tracking.php'</script>";
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

