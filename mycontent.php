<?php include "includes/init.php" ?>
<?php 
    if (logged_in()) {
        $username=$_SESSION['username'];
    } else {
        set_msg("Try again");
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
            <?php
                try {
                    $sql="SELECT u.username, g.name AS group_name, g.description AS group_description, p.name ";
                    $sql.="as page_name, p.description as page_description, p.url ";
                    $sql.="FROM users u JOIN user_group_link gu ON u.id=gu.user_id ";
                    $sql.="JOIN groups g ON gu.group_id=g.id ";
                    $sql.="JOIN pages p ON g.id=p.group_id ";
                    $sql.="WHERE username='{$username}' ";
                    $sql.="ORDER BY group_name";
                    $result = $pdo->query($sql);
                    if ($result->rowCount()>0) {
                        $prev_group=" ";
                        echo "<div style='display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));justify-items:center;grid-gap:5px;grid-row:0px;'>";
                        foreach ($result as $row) {
                            // if ($prev_group!=$row['group_name']) {
                            //     echo "<tr class='tbl-group-head'><td>{$row['group_name']}</td><td>{$row['group_description']}</td><td></td></tr>";
                            // }
                            echo "<div style='background-color: white;height:100%;width:100%;'><a style='display: flex;justify-content: center;align-items: center;' href='content/{$row['url']}'>{$row['page_name']}</a></div><br>";
                            $prev_group=$row['group_name'];
                        }
                        echo "</div>";
                        $row=return_field_data($pdo, "users", "username", $username);
                        $user_id=$row['id'];
                       
                    } else {
                        echo "<h4>No content available for {$username}</h4>";
                    }
                } catch(PDOException $e){
                    echo "Oops there was an error<br><br>".$e->getMessage();
                }
            ?>
        
        
        
        </div> <!--Container-->

        
    
        <?php include "includes/footer.php" ?>
    </body>
</html>