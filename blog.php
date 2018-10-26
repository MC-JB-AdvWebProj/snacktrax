<?php
include 'header.php';
?>

<?php
include 'nav.php';
?>

<style>
* {
    box-sizing: border-box;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h2 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
  
<body>
  <div class="main">
<h2 id="elements">Read all about our Snack Trax Members Success Stories Through Our Snack Trax Community Blog!</h2>
  <p>Here at Snack Trax, we are always encouraging the members of our commmunity, to share and express their exprience signing up with us. What you see here on this blog, are personal reviews from members here at Snack Trax. We also ask our members to please provide us the overall rating they would give our company- one out of five stars!</p>

  <div class="row">
  <div class="column">
    <div class="content">
      <img src="BlogAvatar.png" alt="Avatar" style="width:100%">
      <h3>Hi Guys, My Name is Jen!</h3>
      <p>When I first signed up to Snack Trax I... tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="BlogAvatar.png" alt="Avatar" style="width:100%">
      <h3>Heelo, I'm John!</h3>
      <p>As a pet owner, I believed Snack Trax was the best option for...tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="BlogAvatar.png" alt="Avatar" style="width:100%">
      <h3>Hey Snack Trax Family, I'm Susan!</h3>
      <p>Before signing up to Snack Trax, keeping up with my babies feeding schedule was exhausting.. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="BlogAvatar.png" alt="Avatar" style="width:100%">
      <h3>I'm Jack!</h3>
      <p>Keeping up with all of my cat's feeding times was a experience I knew required great time and effort- and then I signed up to Snack Trax! tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="BlogAvatar.png" alt="Avatar" style="width:100%">
  <h3>Some More Sucess Stories!</h3>
  <p>Meet Claire.. sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
  <p>Meet Chad..dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
</div>

<!-- END MAIN -->
</div>

  
  
  
<?php
include 'footer.php';
?>
</body>
</html>
