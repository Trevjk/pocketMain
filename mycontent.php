<?php include "includes/init.php" ?>
<?php 
    if (logged_in()) {
        $username=$_SESSION['username'];
    } else {
        redirect('index.php');
    } 
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "includes/header.php" ?>
    <body>
        <?php include "includes/nav.php" ?>

        <div class="container">
            <?php 
                show_msg();
            ?>
            <h1 class="text-center"><?php echo $username ?>'s Content</h1>
            <p>"Lorem ipsum dolor sit ame, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. "</p>
        </div> <!--Container-->
    
        <?php include "includes/footer.php" ?>
    </body>
</html>