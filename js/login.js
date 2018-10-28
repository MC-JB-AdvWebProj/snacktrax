var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var email = document.getElementById("email").value;
var passwords = document.getElementById("passwords").value;
if ( email == "testing@test.com" && passwords == "102618"){
alert ("Login successful.");
window.location = "http://localhost:8888/snacktrax/snack-tracking.php"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have "+attempt+" left;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}