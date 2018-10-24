<?php
// include database and object files
include_once '../api/db_connect.php';
include_once '../api/objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->username = isset($_GET['email']) ? $_GET['email'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();
// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "email" => $row['eail']
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Email or Password!",
    );
}
// make it json format
print_r(json_encode($user_arr));
?>