<?php
// get database connection
include_once '../api/db_connect.php';
 
// instantiate user object
include_once '../api/objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->email = $_POST['email'];
$user->password = $_POST['password'];
$user->created = date('Y-m-d H:i:s');
 
// create the user
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