<?php include "includes/nav.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Evo Ruleset</title>
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
    <body>

 <h1>Super Smash Bros. Ultimate Evo Ruleset</h1>

 <ul>
   <li>Game version: US Nintendo Switch</li>
   <li>Game Settings:
     <ul>
        <li>3 Stock, 7 Minutes</li>
        <li>Final Smash Meter: Off</li>
        <li>Spirits: Off</li>
        <li>Damage Handicap: Off</li>
        <li>Stage Selection: Anyone</li>
        <li>Items: Off and None</li>
        <li>First to: 1 Win</li>
        <li>Stage Morph: Off</li>
        <li>Stage Hazards: Off</li>
        <li>Team Attack: On</li>
        <li>Launch Rate: 1.0x</li>
        <li>Underdog Boost: Off</li>
        <li>Pausing: Off</li>
        <li>Score Display: Off</li>
        <li>% Show Damage: Yes</li>
        <li>Custom Balance: Off</li>
        <li>Echo Fighters: Separate</li>
        <li>Radar: Big</li>
        <li>2/3 Games</li>
     </ul>
   </li>
   <li>Allowed Controllers: Nintendo GameCube, Nintendo Pro Controller, Nintendo Joy-Con, SmashBox</li>
   <li>Mii Fighters: All moveset combinations are legal</li>
   <li>Amiibo’s are banned.</li>
   <li>Starter stages: Battlefield, Final Destination, Pokémon Stadium 2, Smashville, Town And City</li>
   <li>Counter-pick stages: Kalos Pokémon League, Lylat Cruise, Yoshi’s Island (Brawl), Yoshi’s Story</li>
   <li>First stage is decided by (Rock Paper Scissors) best of 1. Winner may choose to either strike a stage first or select a port first. Stages are struck in a P1-P2-P2-P1 order.</li>
   <li>Following stages decided by winner striking two stages from all stages and then loser choosing.</li>
   <li>Winning player is not locked into the same character for the next match, but has to pick before loser selects character.</li>
   <li>You may not pick any stage you have previously won on during the set unless mutually agreed to.</li>
   <li>You may not play on a stage that is not on the available stages list. This will result in a double disqualification.</li>
   <li>If a game ends with a self-destruct move, the results screen will determine the winner.</li>
   <li>Sudden Death with tied percentage/stock will result in a 1 stock/2 minutes playoff match.</li>
   <li>There will be no loading anything on to the tournament consoles.</li>
 </ul>

 <?php
   if(isset($_POST["next"]))
     header("Location: evoMap.php")
 ?>

 <br>
 <form method="post" action="evo.php">
   <input type="submit" name="next" value="Continue to Map Selection">
 </form>

 <br>
 <p style="font-size: 80%;">Click <a href="rulesets.html">here</a> to return to the rulesets page.</p>

    </body>

</html>
