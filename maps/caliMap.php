<?php include "includes/nav.php" ?>
<!DOCTYPE html>

<html>
  <head>
    <style>
    body {
      font-size: 125%;
    }
    .row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 4px;
  vertical-align: middle;
}
input[type=submit] {
  width: 16em; height:2em;
  font-size: 15px;
}
</style>
</head>
<body>

  <h1>Starter Stages</h1>

  <div class="row">
    <div class="column">
      <img src="finalDest.jpg" width="800"></img>
      <img src="Battlefield.jpg" width="800"></img>
    </div>
    <div class="column">
      <img src="townCity.jpg" width="800"></img>
      <img src="smashville.jpg" width = "800"></img>
    </div>
    <div class="column">
      <img src="pokeStad2.jpg" width="800"></img>
    </div>
  </div>

  <h1>Counterpick Stages</h1>

  <div class="row">
    <div class="column">
      <img src="kalos.jpg" width="800"></img>
      <img src="yoshiIsland.jpg" width="800"></img>
    </div>
  </div>

  <?php
    if(isset($_POST["next"]))
      header("Location: california.php")
  ?>

  <br>
  <form method="post" action="caliMap.php">
    <input type="submit" name="next" value="Return to Rules">
  </form>

</body>

</html>
