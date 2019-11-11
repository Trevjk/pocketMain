<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Log in to Website</title>
        <style>
            input {
                margin-bottom: 0.5em;
            }
            .error {
                color: #FF0000;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();
          require_once('login.php');
          $conn = new mysqli($hn, $un, $pw, $db);
            if ($conn->connect_error)
                die($conn->connect_error);
          // Is someone already logged in? If so, forward them to the correct
          // page. (HINT: Implement this last, you cannot test this until
          //              someone can log in.)
        if (!$_SESSION){
            goto a;
        }
        if ($_SESSION['type'] == 'user'){
            header("Location: user_page.php");
            }
        elseif ($_SESSION['type'] == 'admin'){
            header("Location: admin_page.php");
            }
        else{
          a:
          // Were a username and password provided? If so check them against
          // the database.
          $type = "";
          $_SESSION['type'] = $type;
          $username = "";
          $password = "";
          $userError = "";
          $passError = "";
          $salt1    = "qm&h*";
          $salt2    = "pg!@";
          if(!isset($_POST["button"])){
            $userError = "Please enter a valid username.";
            $passError = "Please enter a valid password.";
          }
          if(isset($_POST["button"])){
              $username = $_POST["username"];
              $password = $_POST["password"];
              $protectPsswrd = hash('ripemd128', "$salt1$password$salt2");
              $queryOne = "SELECT * FROM lab4_users WHERE username = '$username' and password = '$protectPsswrd'";
              if($result1 = $conn->query($queryOne)){
                // $row = $result1->fetch_assoc();
                $_SESSION['username'] = $username;
                $row = $result1->fetch_assoc();
                echo "<p>".$row['type']."</p>";
                $forename = $row['forename'];
                $type = $row['type'];
                if(mysqli_num_rows($result1) > 0){
                    echo "<p>tester</p>";
                    if ($type == 'user'){
                        $_SESSION['type'] = $type;
                        $_SESSION['forename'] = $forename;
                        header("Location: user_page.php");
                    }
                    elseif ($type == 'admin'){
                        $_SESSION['type'] = $type;
                        $_SESSION['forename'] = $forename;
                        header("Location: admin_page.php");
                    }
                }
                if (mysqli_num_rows($result1) <= 0){
                    $userError = "Please enter a valid username.";
                    $passError = "Please enter a valid password.";
                }
              }
              if(!$result1){
                  echo "<span class='error'>invalid username/password</span>";
              }
              
          
          
               //If username / password were valid, set session variables
              // and forward them to the correct page
          
               //If the username / password were not valid, show error message
               //and populate form with the original inputs
          
            }
        }
        ?>
        <h1>Welcome to <span style="font-style:italic; font-weight:bold; color: maroon">
                Great Web Application</span>!</h1>
                
        <p style="color: red">
        <!--Placeholder for error messages-->
        </p>
        
        <form method="post" action="login_page.php">
            <label>Username: </label>
            <input type="text" name="username" value = "<?php echo $username ?>"> 
            <span class="error"><?php echo $userError; ?></span> <br>
            <label>Password: </label>
            <input type="password" name="password" value = "<?php echo $password ?>">
            <span class="error"><?php echo $passError; ?></span> <br>
            <input type="submit" name = "button" value="Log in">
        </form>
        
        <p style="font-style:italic">
            Placeholder for "forgot password" link<br><br>
            Placeholder for "create account" link
        </p>
</html>
<?php
// place useful functions here
// examples: salt and hash a string
//           check to see if a username/password combination is valid
//           forward user or admin to the correct page


?>
