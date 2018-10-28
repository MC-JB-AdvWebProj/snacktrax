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

<form id="form_id" method="post" action="#">
    <div class="row uniform">
        <div class="6u$ 12u$(xsmall)">
            <input type="email" name="email" id="email" value="testing@test.com" placeholder="Email" />
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="text" name="passwords" id="passwords" value="102618" placeholder="Password" />
        </div>
        <!-- Break -->
        <div class="12u$">
            <ul class="actions">
            <li><input type="submit" value="submit" id="submit" onclick="validate()"/></li>
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
