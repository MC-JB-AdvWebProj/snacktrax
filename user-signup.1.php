<?php
// get database connection
include_once 'db_connect.php';
 
// instantiate user object
include_once 'user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->fname = $_POST['fname'];
$user->lname = $_POST['lname'];
$user->email = $_POST['email'];
$user->password = $_POST['password'];
$user->pswrepeat = $_POST['pswrepeat'];

 
// create the user
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



if($user->signup()){
    $user_arr=array(
        "status" => true,
        "message" => "Successful Signup!",
        "email" => $user->email
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "User already exists!"
    );
}
print_r(json_encode($user_arr));
?>