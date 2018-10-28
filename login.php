<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
      header('LOCATION:index.php'); die();
    }
?>

<?php
include 'header.php';
?>

<?php
include 'nav.php';
?>

<body>
<!-- Form -->
<h3>Login</h3>

<form method="post" action="get-login.php">
    <div class="row uniform">
        <div class="6u$ 12u$(xsmall)">
            <input type="email" name="email" id="email" value="" placeholder="Email" />
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="text" name="passwords" id="passwords" value="" placeholder="Password" />
        </div>
        <!-- Break -->
        <div class="12u$">
            <ul class="actions">
                <li><input type="submit" name="submit" value="submit"/></li>
                <li><input type="reset" value="Reset" class="alt" /></li>
            </ul>
        </div>
    </div>
</form>


<?php
include 'footer.php';
?>

</body>
</html>
