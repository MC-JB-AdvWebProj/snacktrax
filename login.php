<?php
include 'header.php';
?>

<?php
include 'nav.php';
?>

<?php
include 'db_connect.php';
?>

<body>
<!-- Form -->
<h3>Login</h3>

<form method="post" action="#">
    <div class="row uniform">
        <div class="6u$ 12u$(xsmall)">
            <input type="email" name="email" id="email" value="" placeholder="Email" />
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="text" name="password" id="password" value="" placeholder="Password" />
        </div>
        <!-- Break -->
        <div class="12u$">
            <ul class="actions">
                <li><input type="submit" value="Submit" onclick="validate()"/></li>
                <li><input type="reset" value="Reset" class="alt" /></li>
            </ul>
        </div>
    </div>
</form>


<?php
include 'footer.php';
?>

<?php
include 'user-login.php';
?>

</body>
</html>
