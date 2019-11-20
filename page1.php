<?php include "includes/init.php" ?>
<!DOCTYPE html>
<html lang="en">
    <?php include "includes/header.php" ?>
    <body>
        <?php include "includes/nav.php" ?>

        <div class="container">
            <?php 
                show_msg();
            ?>
            <head>
        <title>Rulesets</title>
            </head>


    <h1>Super Smash Bros. Ultimate Rulesets</h1>

    <p>Select a ruleset to view.</p>
<?php
   echo  "<a href='/{$root_directory}/maps/smashCon.php'>SmashCon Ruleset</a><br><br>";
   echo  "<a href='/{$root_directory}/maps/evo.php'>Evo Ruleset</a><br><br>";
   echo  "<a href='/{$root_directory}/maps/california.php'>California Ruleset</a><br><br>";

?>

<img src="">
</div> <!--Container-->
    
        <?php include "includes/footer.php" ?>
    </body>
</html>