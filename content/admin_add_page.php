<?php include("../includes/init.php");?>
<?php 
    if (logged_in()) {
        $username=$_SESSION['username'];
        if (!verify_user_group($pdo, $username, "Admin")) {
            set_msg("User '{$username}' does not have permission to view this page");
            redirect('../index.php');
        }
    } else {
        set_msg("Please log-in and try again");
        redirect('../index.php');
    } 
    ?>
    <?php 
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $name=$_POST['name'];
        $description=$_POST['description'];
        $url=$_POST['url'];
        $group_id=$_POST['group_id'];
        //has to have at least .php
        if (strlen($url)<3) {
            $error[]="URL = example.php";
        }
        if(count_field_val($pdo,"groups","id", $group_id)==0){
            $error[] = "Group not found";
        }
        if (!isset($error)) {
            try {
                $stmnt=$pdo->prepare("INSERT INTO pages (name, description, url, group_id) VALUES (:name, :description, :url, :group_id)");
                $stmnt->execute([":name"=>$name, ":description"=>$description, ":url"=>$url, ":group_id"=>$group_id]);
                set_msg("Page '{$name}' added", "success");
                redirect("admin.php?tab=pages");
            } catch(PDOException $e){
                echo "Error: ".$e->getMessage();
            }
        }
    }
    else{
        $name="";
        $description="";
        $url="";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "../includes/header.php" ?>
    <body>
        <?php include "../includes/nav.php" ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="register-form" method="post" role="form" >
                                        <div class="form-group">
                                            <input type="text" name="name" value="<?php echo $name ?>" id="name" tabindex="1" class="form-control" placeholder="Page Name" required >
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="url"  id="url" tabindex="2" class="form-control" placeholder="Page URL" require value = "<?php echo $url ?>">
                                        </div>
                                        <div class="form-group">
                                            <select type="text" name="group_id" id="group_id" class="form-control" required >
                                            <?php
                                                    try {
                                                        $result=$pdo->query("SELECT id, name FROM groups ORDER BY name");
                                                        foreach ($result as $row) {
                                                            echo "<option value={$row['id']}>{$row['name']}</option>";
                                                        }
                                                    } catch(PDOException $e) {
                                                        echo "Error: ".$e->getMessage();
                                                    }
                                                ?>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="description" id="description" tabindex="8" class="form-control" placeholder="Description" ><?php echo $description ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-custom" value="Add Page">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../includes/footer.php" ?>
    </body>
</html>
