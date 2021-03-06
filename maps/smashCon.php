<?php include "../includes/init.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SmashCon Ruleset</title>
        <style>
          body {
            font-size: 125%;
          }
          input[type=submit] {
            width: 16em; height:2em;
            font-size: 15px;
          }

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
        </style>
    </head>
    <?php include "../includes/header.php" ?>
    <body>
    <?php include "../includes/nav.php" ?>
<div class="center">
 <h1>Super Smash Bros. Ultimate SmashCon Ruleset</h1>

 <p>Rules for Super Smash Bros. Ultimate are subject to change. Updates to the rules will be
included in this Official Rulebook as long as those updates are published prior to
registration closing.
</p>

<h2>Game Version</h2>

<p>The Tournament will use any updates (including characters) to the game that are
publicly available in North America by 2:00 PM Eastern Time on August 6, 2019.
The console language must be set to English.</p>

<h2>Game Settings</h2>

<ul>
  <li>Stock: 3</li>
  <li>Timer: 7:00</li>
  <li>Handicap: Off</li>
  <li>Team Attack: On</li>
  <li>Launch Rate: 1.0x</li>
  <li>Items: Off and None</li>
  <li>FS Meter: Off</li>
  <li>Damage Handicap: Off</li>
  <li>Custom Balance: Off</li>
  <li>Spirits: Off</li>
  <li>Pause: Off</li>
  <li>Stage Selection: Loser’s Pick</li>
  <li>Stage Hazards: Off</li>
  <li>Stage Morph: Off</li>
  <li>Underdog Boost: Off</li>
  <li>Score Display: Off</li>
  <li>Show Damage: Yes</li>
</ul>

<h2>Options</h2>

<ul>
  <li>Radar: Small</li>
  <li>Echo Fighters: Separate</li>
  <li>Custom Balance: Off</li>
  <li>Mii Fighters are permitted with any combination of specials</li>
</ul>

<h2>Stage List</h2>
<h3>Starter Stages</h3>

<ul>
  <li>Battlefield*</li>
  <li>Final Destination**</li>
  <li>Town & City</li>
  <li>Smashville</li>
  <li>Pokemon Stadium 2</li>
</ul>

<h3>Counterpick Stages</h3>

<ul>
  <li>Yoshi's Story</li>
  <li>Kalos Pokemon League</li>
  <li>Lylat Cruise</li>
</ul>

<p style="font-style: italic; font-size: 75%;">* On Counterpick, any version Battlefield may be used, so long as it was not banned by
the opponent
</p><p style="font-style: italic; font-size: 75%;">** On Counterpick, any version of Final Destination may be used, so long as it was not
banned by the opponent</p>
<p style="font-style: italic; font-size: 75%;">*** Lylat Cruise Battlefield form is banned, as well as both versions of Gamer.
</p>

<h2>Additional Rules</h2>
<h3>Stage Striking</h3>

<p>Players play a best-of-1 Rock-Paper-Scissors, and winner may choose to
either strike a stage first or select a port first. Stages are struck in a
1-2-2-1 order.
</p>

<h3>Stage Bans</h3>

<p>After each Game, before counterpicking, the player who won the previous
Game may ban up to two stages from either the Starter or Counterpick
list. These bans do not persist throughout the Set.</p>

<h3>Broadcast Review</h3>

<p>If you are playing on the broadcast, you may be asked to refrain from
using certain Battlefield/Omega form stages at their discretion</p>

<?php
  if(isset($_POST["next"]))
    header("Location: smashConMap.php")
?>

<br>
<form method="post" action="smashCon.php">
  <input type="submit" name="next" value="Continue to Map Selection">
</form>

        </div>

    </body>

</html>
