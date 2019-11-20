<<?php include "../includes/init.php" ?>
<?php 
 if (logged_in()) {
    $username=$_SESSION['username'];
    if (!verify_user_group($pdo, $username, "Users") || !verify_user_group($pdo, $username, "Admin")) {
        set_msg("User '{$username}' does not have permission to view this page");
        redirect('../index.php');
    }
} else {
    set_msg("Please log-in and try again");
    redirect('../index.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "../includes/header.php" ?>
    <body>
        <?php include "../includes/nav.php" ?>

        <div class="container">
            <?php 
                show_msg();
            ?>
            <h1 class="text-center">Notes</h1>
            <p>"Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. "</p>
        </div> <!--Container-->
        
        <?php include "../includes/footer.php" ?>
    </body>
</html>