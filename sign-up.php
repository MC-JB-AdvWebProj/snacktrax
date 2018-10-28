<?php
include 'header.php';
?>

<?php
include 'nav.php';
?>





<body>

<div class="content">
  <h1>Create Your Snack Trax Membership Account</h1>
  <h2>By creating a membership with us, you will be able to utilize all of the Snack Trax benefits for tracking each and every meal time!</h2>
</div>

<!--Form -->
<form action="insert.php" method="post" id="sign-up-form">
<div class="row uniform">  
  <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

  <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="password"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="passwords" required>
     
  <div class="content">  
  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Conditions</a>.</p>
  </div>

    <div class="clearfix">
            <button type="submit" class="signupbtn" value="signup">Sign Up</button>
            <button type="button" class="cancelbtn">Cancel</button>

    </div>
  </div>
</form>


<?php
include 'footer.php';
?>
</body>
</html>

