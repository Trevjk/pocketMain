    <nav class="navbar navbar-fixed-top navbar-light bg-faded">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand blue">Pocket Main</span>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav blue">
                    <li class="active"><a href="/<?php echo $root_directory?>/index.php">Home</a></li>
                    <li><a href="/<?php echo $root_directory?>/page1.php">Rulesets</a></li>
                    <li><a href="/<?php echo $root_directory?>/page2.php">Characters</a></li>
                    <li><a href="/<?php echo $root_directory?>/page3.php">Users</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right blue">
                    <?php
                        if (logged_in()) {
                            echo "<li><a href='/{$root_directory}/mycontent.php'>{$_SESSION['username']}'s Content</a></li>";
                            echo "<li><a href='/{$root_directory}/logout.php'>Logout</a></li>";
                        } else {
                            echo "<li><a href='/{$root_directory}/login.php'>Login</a></li>";
                            echo "<li><a href='/{$root_directory}/register.php'>Register</a></li>";
                        }
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
