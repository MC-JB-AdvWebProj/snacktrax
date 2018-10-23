<?php
include 'header.php';
?>

<?php
include 'nav.php';
?>

<body>
<p></p>
<!-- Form -->
<h3>Sign Up!</h3>

<form method="post" action="#">
    <div class="row uniform">
        <div class="6u 12u$(xsmall)">
            <input type="text" name="fname" id="fname" value="" placeholder="First Name" />
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="text" name="lname" id="lname" value="" placeholder="Last Name" />
        </div>
        <div class="6u$ 12u$(xsmall)">
            <input type="email" name="email" id="email" value="" placeholder="Email" />
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="text" name="password" id="password" value="" placeholder="Password" />
        </div>
        <!-- Break -->
        <div class="6u 12u$(xsmall)">
            <div class="select-wrapper">
                <select name="category" id="category">
                    <option value="">- Species -</option>
                    <option value="1">Human</option>
                    <option value="1">Cat</option>
                    <option value="1">Dog</option>
                 </select>
            </div>
        </div>
        <div class="6u$ 12u$(xsmall)">
            <input type="text" name="name" id="name" value="" placeholder="Child or Pet's Name" />
        </div>
        <!-- Break -->
        <div class="12u$">
            <ul class="actions">
                <li><input type="submit" value="Submit" /></li>
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