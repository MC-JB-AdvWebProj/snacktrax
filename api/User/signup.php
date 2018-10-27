<?php
 
// get database connection
include_once '../snacktrax/api/config/database.php';
 
// instantiate user object
include_once '../snacktrax/api/objects/user.php';
 
$database = new Database();
$db_name = $database->getConnection();
 
$user = new User($db_name);
 
// set user property values
$user->fname = $_POST['fname'];
$user->lname = $_POST['lname'];
$user->email = $_POST['email'];
$user->password = base64_encode($_POST['password']);
 
// create the user
if($user->signup()){
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "email" => $user->email,
        "password" => $user->password_hash
        
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Username already exists!"
    );
}
print_r(json_encode($user_arr));
?>