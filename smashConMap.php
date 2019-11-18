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
      <img src="finalDest.jpg" id="finalDest" onclick="clickChange(this.id)" width="800"></img>
      <img src="Battlefield.jpg" id="Battlefield" onclick="clickChange(this.id)" width="800"></img>
    </div>
    <div class="column">
      <img src="townCity.jpg" id="townCity" onclick="clickChange(this.id)" width="800"></img>
      <img src="smashville.jpg" id="smashville" onclick="clickChange(this.id)" width = "800"></img>
    </div>
    <div class="column">
      <img src="pokeStad2.jpg" id="pokeStad2" onclick="clickChange(this.id)" width="800"></img>
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

  <h1>Counterpick Stages</h1>

  <div class="row">
    <div class="column">
      <img src="yoshiStory.jpg" id="yoshiStory" onclick="clickChange(this.id)" width="800"></img>
      <img src="lylatCruise.jpg" id="lylatCruise" onclick="clickChange(this.id)" width="800"></img>
    </div>
    <div class="column">
      <img src="kalos.jpg" id="kalos" onclick="clickChange(this.id)" width="800"></img>
    </div>
  </div>

  <?php
    if(isset($_POST["next"]))
      header("Location: smashCon.php")
  ?>

  <br>
  <form method="post" action="smashConMap.php">
    <input type="submit" name="next" value="Return to Rules">
  </form>

</body>

</html>
