<?php
include 'header.php';
?>

<?php
include 'nav.php';
?>

<body>
<!--Form -->
<form method="post" action="#">
<div class="row uniform">
  <h1>Create Your Snack Trax Membership Account</h1>
  <h2>By creating a membership with us, you will be able to utilize all of the Snack Trax benefits for tracking each and every meal time!</h2>
  
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label>
       <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Conditions</a>.</p>
    
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>

<?php
include 'footer.php';
?>
  
</body>
</html>

