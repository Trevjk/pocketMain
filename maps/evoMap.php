<?php include "../includes/init.php" ?>
<!DOCTYPE html>

<html>
  <head>
    <style>
.picture-grid{
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
  justify-items:center;
  grid-gap:5px;
  grid-row:0px;
}

.grid-box img{
width:100%;
display: block;
}

.center {
  margin: auto;
  width: 60%;
  border: none;
  padding: 10px;
}

input[type=submit] {
  width: 16em; height:2em;
  font-size: 15px;
}
}
</style>
</head>
<?php include "../includes/header.php" ?>
<body>
<?php include "../includes/nav.php" ?>

<h1 style="text-align: center;">EVO - Starter Stages</h1>

<div class="center">
  <div class="picture-grid">
    <div class="grid-box"><img src="finalDest.jpg" id="finalDest" onclick="clickChange(this.id)"></img></div>
    <div class="grid-box"><img src="Battlefield.jpg" id="Battlefield" onclick="clickChange(this.id)"></img></div>
    <div class="grid-box"><img src="townCity.jpg" id="townCity" onclick="clickChange(this.id)"></img></div>
    <div class="grid-box"><img src="smashville.jpg" id="smashville" onclick="clickChange(this.id)"></img></div>
    <div class="grid-box"><img src="pokeStad2.jpg" id="pokeStad2" onclick="clickChange(this.id)"></img></div>
  </div>
</div>

  <h1 style="text-align: center;">Counterpick Stages</h1>

  <div class="center">
  <div class="picture-grid">
    <div class="grid-box"> <img src="yoshiStory.jpg" id="yoshiStory" onclick="clickChange(this.id)" width="800"></img></div>
    <div class="grid-box"><img src="lylatCruise.jpg" id="lylatCruise" onclick="clickChange(this.id)" width="800"></img></div>
    <div class="grid-box"><img src="kalos.jpg" id="kalos" onclick="clickChange(this.id)" width="800"></img></div>
    <div class="grid-box"><img src="yoshiIsland.jpg" id="yoshiIsland" onclick="clickChange(this.id)" width="800"></img></div>
  </div>
</div>

<script>
  function clickChange(id) {
    var image = document.getElementById(id);
    var source = document.getElementById(id).src;
    if (image.src.includes("Gray")) {
    	image.src = id + ".jpg";
    }
    else {
    	image.src = id + "Gray.jpg";
    }
  }
  </script>

  <?php
    if(isset($_POST["next"]))
      header("Location: evo.php")
  ?>

  <br>
  <form method="post" action="evoMap.php">
    <div class="center">
    <input type="submit" name="next" value="Return to Rules">
  </form>

</body>

</html>
