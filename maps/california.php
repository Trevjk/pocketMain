<?php include "../includes/init.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>California Ruleset</title>
        <style>
          body {
            font-size: 125%;
          }
          input[type=submit] {
            width: 16em; height:2em;
            font-size: 15px;
          }
        </style>
    </head>
    <?php include "../includes/header.php" ?>
    <body>
    <?php include "../includes/nav.php" ?>

 <h1>Super Smash Bros. Ultimate California Ruleset</h1>

 <h2>Game Settings</h2>

 <ul>
   <li>Stock and time are set to 3 stock and 8 minutes for Singles and Doubles</li>
   <li>Handicap: Off</li>
   <li>Team Attack: On</li>
   <li>Damage Ratio: 1.0x</li>
   <li>Items: Off and None</li>
   <li>Pause: Off</li>
   <li>Hazard Toggle: Off</li>
   <li>Mii: All moveset combination are legal</li>
 </ul>

 <h2>Stage List</h2>

 <ul>
   <li>Battlefield*</li>
   <li>Final Destination**</li>
   <li>Pokemon Stadium 2</li>
   <li>Smashville</li>
   <li>Town & City</li>
 </ul>

 <ul><b style="font-size: 120%;">Counterpick</b><p></p>
   <li>Kalos Pokemon League</li>
   <li>Yoshi's Island</li>
 </ul>

 <p>* Battlefield variations of the stages are allowed in place of Battlefield.<br>
   ** Omega variations of the stages are allowed in place of Final Destination.</p>

<p>The following stages are not allowed for Battlefield and Omega variations due to the changing in the Z Axis:</p>
<ul>
  <li>Dream Land GB</li>
  <li>Flatzone X</li>
  <li>Hanebow</li>
  <li>Mario Maker</li>
  <li>Mute City SNES</li>
  <li>Pac-Land</li>
  <li>Duck Hunt</li>
</ul>

<h2>Additional Rules</h2>
<h3>Starter Stage Striking</h3>
<p>Players play a best-of-1 Rock-Paper-Scissors, and winner may choose to either strike a stage first or select a port first. Stages are stuck in a P1-P2-P2-P1 order.
  Players may strike from the legal stages (each person strikes stages in a 1-2-1 format) to determine the starting stage for the first game. If battlefield or final destination is chosen and both parties agree, a variant can be used.</p>

<h3>Counterpick Stage Striking</h3>
<p>After each game of the set, before counterpicking, the player who won the previous game may strike two stages from the starter list. This strike does not persist throughout the set. If final destination or battlefield is chosen as a counterpick, a variant may be chosen by the loser of the previous game.</p>

<h3>Controllers</h3>
<p>For ease of access, Tournament Staff recommends the use of the Nintendo Gamecube controller, however, The Switch Pro controller (wired) and Joy cons are all permitted control options. Turbo/Macro options on controllers are banned. Box variants of the gcc are currently permitted so long as they do not have macros/turbo enabled.</p>

<h3>Controller Interference</h3>
<p>If your controller is found to be the cause of disruption to the tournament (mid-game or otherwise), you are subject to complete disqualification from the event. </p>

<h3>Mii Fighter Clause</h3>
<p>Mii Fighters must be created using Guest Miis and their name should contain the moves being used in the format ‘xxxx’. Any combination of moves may be used, but once a player has selected a Special Move Set for a specific Mii Fighter type (Brawler/Swordfighter/Gunner) that Set must be paired with that Fighter type for the remainder of the set.</p>

<?php
  if(isset($_POST["next"]))
    header("Location: caliMap.php")
?>

<br>
<form method="post" action="california.php">
  <input type="submit" name="next" value="Continue to Map Selection">
</form>

 <br>
 <p style="font-size: 80%;">Click <a href="rulesets.html">here</a> to return to the rulesets page.</p>

    </body>

</html>
