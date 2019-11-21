    <nav class="navbar navbar-fixed-top navbar-light bg-faded">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand blue"><h4>Pocket Main<h4></span>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav blue">
                    <li class="active"><a href="/<?php echo $root_directory?>/index.php"><h4>Home</h4></a></li>
                    <li><a href="/<?php echo $root_directory?>/page1.php"><h4>Rulesets</h4></a></li>
                    <li><a href="/<?php echo $root_directory?>/characters/character_page.php"><h4>Characters</h4></a></li>
                    <li><a href="/<?php echo $root_directory?>/page3.php"><h4>Users</h4></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right blue">
                    <?php
                        if (logged_in()) {
                            echo "<li><a href='/{$root_directory}/mycontent.php'><h4>{$_SESSION['username']}'s Content</h4></a></li>";
                            echo "<li><a href='/{$root_directory}/logout.php'><h4>Logout</h4></a></li>";
                        } else {
                            echo "<li><a href='/{$root_directory}/login.php'><h4>Login</h4></a></li>";
                            echo "<li><a href='/{$root_directory}/register.php'><h4>Register</h4></a></li>";
                        }
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
