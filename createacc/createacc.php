<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Account</title>
    <style>
        .error {
          color: #FF0000;
        }
    </style>
</head>

<?php
  $hn = 'localhost';
  $db = 'cjn146';
  $un = 'root';
  $pw = '';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
	 die($conn->connect_error);

  function sanitizeString($string){
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = htmlentities($string);
    return $string;
  }

  function randomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}\\/,.\`~';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  $username = '';
  $pass = '';
  $pass2 = '';
  $email = '';
  $nick = '';

  $usernameErr = '';
  $passErr = '';
  $pass2Err = '';
  $emailErr = '';
  $nickErr = '';
  $topErr = '';

  $proceed = true;
  $query = '';
  $passwordHash = '';
  $salt1 = '';
  $salt2 = '';

  if(isset($_POST["submit"])){

    //Populating variables
    $username = sanitizeString($_POST["username"]);
    $pass = sanitizeString($_POST["pass"]);
    $pass2 = sanitizeString($_POST["pass2"]);
    $email = sanitizeString($_POST["email"]);
    $nick = sanitizeString($_POST["nick"]);


    //CHecking if fields have been filled
    if(empty($username) || empty($pass) || empty($pass2) || empty($email) || empty($nick)) {
      $topErr = "All fields must be complete in order to proceed";
      $proceed = false;
    }

    //Checking if username is alphanumeric or if it has been taken
    if(!preg_match("/^[a-zA-Z0-9]+$/", $username, $matches)) {
      $usernameErr = "Your username must only consist of letters and numbers";
      $proceed = false;
    } else {
      $query = "SELECT username FROM accounts WHERE username = '$username'";
      $result = $conn->query($query);
      $row = $result->fetch_assoc();
      $name = $row['username'];
      if(!empty($name) && !is_null($name)) {
        $usernameErr = "Username \"$name\" is already taken";
        $proceed = false;
      }
    }

    //Checking if password is all good
    if(!preg_match("/^[a-zA-Z0-9\W]*$/", $pass, $matches)) {
      $nameErr = "Your password must consist of letters, numbers and special characters";
      $proceed = false;
    } else if(strlen($pass) < 8) {
      $nameErr = "Your password must be eight characters or longer and may consist of letters, numbers and special characters";
      $proceed = false;
    }

    //Checking password verification
    if ($pass2 != $pass) {
      $pass2Err = "Passwords do not match";
      $proceed = false;
    } else {
      $salt1 = randomString();
      $salt2 = randomString();
      $passwordHash = hash("sha256","$salt1$pass$salt2");
    }

    //Checking email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email address";
      $proceed = false;
    } else {
      $query = "SELECT email FROM accounts WHERE email = '$email'";
      $result = $conn->query($query);
      $row = $result->fetch_assoc();
      $mail = $row['email'];
      if(!empty($mail) && !is_null($mail)) {
        $emailErr = "Email address \"$mail\" is already in use";
        $proceed = false;
      }
    }

    //Checking nickname
    if(!preg_match("/^[a-zA-Z0-9]+$/", $nick, $matches)) {
      $nickErr = "Your nickname must only consist of letters and numbers";
      $proceed = false;
    } else {
      $query = "SELECT nickname FROM accounts WHERE nickname = '$nick'";
      $result = $conn->query($query);
      $row = $result->fetch_assoc();
      $nic = $row['nickname'];
      if(!empty($nic) && !is_null($nic)) {
        $nickErr = "Nickname \"$nic\" is already taken";
        $proceed = false;
      }
    }


    //Final step check to add items to database
    if($proceed) {
      $query = "INSERT INTO accounts (username, passwordhash, salt1, salt2, email, nickname) VALUES ('$username', '$passwordHash', '$salt1', '$salt2', '$email', '$nick')";
      $conn->query($query);
      header("Location: success.php");
    } else if($topErr != "All fields must be complete in order to proceed.") {
      $topErr = "An error has prevented you from signing up.";
    }

  }

?>

<body>

  <h1>Create an Account</h1>

  <p><span class="error"><?php echo "$topErr"?></span></p>

  <form method="post" action="createacc.php">

    Username <input type="text" size="35" name="username" value="<?php echo $username?>">
    <span class="error"><?php echo "$usernameErr";?></span>
    <br><br>

    Password <input type="password" size="35" name="pass" value="">
    <span class="error"><?php echo "$passErr";?></span>
    <br><br>

    Reenter Password <input type="password" size="35" name="pass2" value="">
    <span class="error"><?php echo "$pass2Err";?></span>
    <br><br>

    Email Address <input type="text" size="35" name="email" value="<?php echo $email?>">
    <span class="error"><?php echo "$emailErr";?></span>
    <br><br>

    Nickname <input type="text" size="35" name="nick" value="<?php echo $nick?>">
    <span class="error"><?php echo "$nickErr";?></span>
    <br><br>

    <input type="submit" name="submit" value="Create Account">

  </form>
</body>
