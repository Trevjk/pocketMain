<?php include "../includes/init.php" ?>


<!DOCTYPE html>
<html lang="en">
<?php include "../includes/header.php" ?>
    <head>
        <title>Character Data</title>
        <style>
        
        .center {
            margin: auto;
            width: 60%;
            border: none;
            padding: 10px;
          }
        .header_ {
                position: center;
                text-align: center;

        }
        
        </style>
    </head>

    <body>
    <?php include "../includes/nav.php" ?>
        <h2 class="header_">CHOOSE YOUR CHARACTER</h2>

        <div id="form" class="header_">
            Search for character<br>
            <input style="f-bottom:40px;" type="text" name="character" id="character" onkeyup="myFunction()" placeholder="Enter name"><br>

            <table id="chartable" class="center">
                <tr>
                    <td class="Mario"><a href="character.php?character=Mario"><img src="renders/Mario.png" height="200" alt = "Error loading image"></a></td>
                    <td class="Donkey%20Kong"><a href="character.php?character=Donkey%20Kong"><img src="renders/Donkey%20Kong.png" height="200" alt = "Error loading image"></a></td>
                    <td class="Link"><a href="character.php?character=Link"><img src="renders/Link.png" height="200" alt = "Error loading image"></a></td>
                    <td class="Samus"><a href="character.php?character=Samus"><img src="renders/Samus.png" height="200" alt = "Error loading image"></a></td>
                    <td class="Dark%20Samus"><a href="character.php?character=Dark%20Samus"><img src="renders/Dark%20Samus.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Yoshi"><a href="character.php?character=Yoshi"><img src="renders/Yoshi.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Kirby"><a href="character.php?character=Kirby"><img src="renders/Kirby.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Fox"><a href="character.php?character=Fox"><img src="renders/Fox.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Pikachu"><a href="character.php?character=Pikachu"><img src="renders/Pikachu.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Luigi"><a href="character.php?character=Luigi"><img src="renders/Luigi.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Ness"><a href="character.php?character=Ness"><img src="renders/Ness.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Captain%20Falcon"><a href="character.php?character=Captain%20Falcon"><img src="renders/Captain%20Falcon.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Jigglypuff"><a href="character.php?character=Jigglypuff"><img src="renders/Jigglypuff.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Peach"><a href="character.php?character=Peach"><img src="renders/Peach.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Daisy"><a href="character.php?character=Daisy"><img src="renders/Daisy.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Bowser"><a href="character.php?character=Bowser"><img src="renders/Bowser.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Ice%20Climbers"><a href="character.php?character=Ice%20Climbers"><img src="renders/Ice%20Climbers.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Sheik"><a href="character.php?character=Sheik"><img src="renders/Sheik.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Zelda"><a href="character.php?character=Zelda"><img src="renders/Zelda.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Dr.%20Mario"><a href="character.php?character=Dr.%20Mario"><img src="renders/Dr.%20Mario.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Pichu"><a href="character.php?character=Pichu"><img src="renders/Pichu.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Falco"><a href="character.php?character=Falco"><img src="renders/Falco.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Marth"><a href="character.php?character=Marth"><img src="renders/Marth.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Lucina"><a href="character.php?character=Lucina"><img src="renders/Lucina.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Young%20Link"><a href="character.php?character=Young%20Link"><img src="renders/Young%20Link.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Ganondorf"><a href="character.php?character=Ganondorf"><img src="renders/Ganondorf.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Mewtwo"><a href="character.php?character=Mewtwo"><img src="renders/Mewtwo.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Roy"><a href="character.php?character=Roy"><img src="renders/Roy.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Chrom"><a href="character.php?character=Chrom"><img src="renders/Chrom.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Mr.%20Game%20&%20Watch"><a href="character.php?character=Mr.%20Game%20&%20Watch"><img src="renders/Mr.%20Game%20&%20Watch.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Meta%20Knight"><a href="character.php?character=Meta%20Knight"><img src="renders/Meta%20Knight.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Pit"><a href="character.php?character=Pit"><img src="renders/Pit.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Dark%20Pit"><a href="character.php?character=Dark%20Pit"><img src="renders/Dark%20Pit.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Zero%20Suit%20Samus"><a href="character.php?character=Zero%20Suit%20Samus"><img src="renders/Zero%20Suit%20Samus.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Wario"><a href="character.php?character=Wario"><img src="renders/Wario.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Snake"><a href="character.php?character=Snake"><img src="renders/Snake.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Ike"><a href="character.php?character=Ike"><img src="renders/Ike.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Squirtle"><a href="character.php?character=Squirtle"><img src="renders/Squirtle.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Ivysaur"><a href="character.php?character=Ivysaur"><img src="renders/Ivysaur.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Charizard"><a href="character.php?character=Charizard"><img src="renders/Charizard.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Diddy%20Kong"><a href="character.php?character=Diddy%20Kong"><img src="renders/Diddy%20Kong.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Lucas"><a href="character.php?character=Lucas"><img src="renders/Lucas.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Sonic"><a href="character.php?character=Sonic"><img src="renders/Sonic.png" height="200" alt = "Error loading image"></a></td>
                        <td class="King%20Dedede"><a href="character.php?character=King%20Dedede"><img src="renders/King%20Dedede.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Olimar"><a href="character.php?character=Olimar"><img src="renders/Olimar.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Lucario"><a href="character.php?character=Lucario"><img src="renders/Lucario.png" height="200" alt = "Error loading image"></a></td>
                        <td class="R.O.B."><a href="character.php?character=R.O.B."><img src="renders/R.O.B..png" height="200" alt = "Error loading image"></a></td>
                        <td class="Toon%20Link"><a href="character.php?character=Toon%20Link"><img src="renders/Toon%20Link.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Wolf"><a href="character.php?character=Wolf"><img src="renders/Wolf.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Villager"><a href="character.php?character=Villager"><img src="renders/Villager.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Mega%20Man"><a href="character.php?character=Mega%20Man"><img src="renders/Mega%20Man.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Wii%20Fit%20Trainer"><a href="character.php?character=Wii%20Fit%20Trainer"><img src="renders/Wii%20Fit%20Trainer.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Rosalina%20&%20Luma"><a href="character.php?character=Rosalina%20&%20Luma"><img src="renders/Rosalina%20&%20Luma.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Little%20Mac"><a href="character.php?character=Little%20Mac"><img src="renders/Little%20Mac.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Greninja"><a href="character.php?character=Greninja"><img src="renders/Greninja.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Mii%20Brawler"><a href="character.php?character=Mii%20Brawler"><img src="renders/Mii%20Brawler.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Mii%20Swordfighter"><a href="character.php?character=Mii%20Swordfighter"><img src="renders/Mii%20Swordfighter.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Mii%20Gunner"><a href="character.php?character=Mii%20Gunner"><img src="renders/Mii%20Gunner.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Palutena"><a href="character.php?character=Palutena"><img src="renders/Palutena.png" height="200" alt = "Error loading image"></a></td>
                        <td class="PAC-MAN"><a href="character.php?character=PAC-MAN"><img src="renders/PAC-MAN.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Robin"><a href="character.php?character=Robin"><img src="renders/Robin.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Shulk"><a href="character.php?character=Shulk"><img src="renders/Shulk.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Bowser%20Jr"><a href="character.php?character=Bowser%20Jr"><img src="renders/Bowser%20Jr.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Duck%20Hunt"><a href="character.php?character=Duck%20Hunt"><img src="renders/Duck%20Hunt.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Ryu"><a href="character.php?character=Ryu"><img src="renders/Ryu.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Ken"><a href="character.php?character=Ken"><img src="renders/Ken.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Cloud"><a href="character.php?character=Cloud"><img src="renders/Cloud.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Corrin"><a href="character.php?character=Corrin"><img src="renders/Corrin.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Bayonetta"><a href="character.php?character=Bayonetta"><img src="renders/Bayonetta.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Inkling"><a href="character.php?character=Inkling"><img src="renders/Inkling.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Ridley"><a href="character.php?character=Ridley"><img src="renders/Ridley.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Simon"><a href="character.php?character=Simon"><img src="renders/Simon.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Richter"><a href="character.php?character=Richter"><img src="renders/Richter.png" height="200" alt = "Error loading image"></a></td>
                        <td class="King%20K%20Rool"><a href="character.php?character=King%20K%20Rool"><img src="renders/King%20K%20Rool.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Isabelle"><a href="character.php?character=Isabelle"><img src="renders/Isabelle.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Incineroar"><a href="character.php?character=Incineroar"><img src="renders/Incineroar.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Piranha%20Plant"><a href="character.php?character=Piranha%20Plant"><img src="renders/Piranha%20Plant.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Joker"><a href="character.php?character=Joker"><img src="renders/Joker.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Hero"><a href="character.php?character=Hero"><img src="renders/Hero.png" height="200" alt = "Error loading image"></a></td>
                        <td class="Banjo%20&%20Kazooie"><a href="character.php?character=Banjo%20&%20Kazooie"><img src="renders/Banjo%20&%20Kazooie.png" height="200" alt = "Error loading image"></a></td>
                </tr>
                <tr>
                        <td class="Terry"><a href="character.php?character=Terry"><img src="renders/Terry.png" height="200" alt = "Error loading image"></a></td>
                </tr>
            </table>
        </div>

        <br><br>

        <script>
            function myFunction() {
            // Declare variables
            var input, filter, table, tr, i, txtValue;
            input = document.getElementById("character");
            filter = input.value.toUpperCase();
            table = document.getElementById("chartable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                var td = tr[i].getElementsByTagName("td")
                for (j = 0; j < td.length; j++) {
                    txtValue = td[j].getAttribute("class");
                    if (txtValue.toUpperCase().includes(filter)) {
                        td[j].style.display = "";
                    } else {
                        td[j].style.display = "none";
                    }
                }
            }
            }
            </script>
        
    </body>

</html>