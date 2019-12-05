<?php
    //output buffering, start in order to redirect a page
    ob_start();
    session_start();

   
    // $hn = 'pluto.cse.msstate.edu';
    // $db = 'cjn146';
    // $un = 'cjn146';
    // $pw = 'pepperjackcheeseplease';

    $hn = 'localhost';
    $db = 'pocketmain';
    $un = 'root';
    $pw = '';

    // $charset = "utf8mb4";

    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error)
        die($conn->connect_error);

    if (!$conn->query("SELECT * FROM groups")) {
        $query = "CREATE TABLE groups (
            id bigint(20) UNSIGNED AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL,
            description text NOT NULL,
            PRIMARY KEY (id));";
            
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if (!$conn->query("SELECT * FROM pages")) {
        $query = "CREATE TABLE pages (
            id bigint(20) UNSIGNED AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL,
            description text NOT NULL,
            url VARCHAR(255) NOT NULL,
            group_id INT NOT NULL,
            PRIMARY KEY (id));";
            
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if (!$conn->query("SELECT * FROM users")) {
        $query = "CREATE TABLE users (
            id bigint(20) UNSIGNED AUTO_INCREMENT,
            firstname VARCHAR(25) NOT NULL,
            lastname VARCHAR(25) NOT NULL,
            username VARCHAR(20) NOT NULL,
            password VARCHAR(255) NOT NULL,
            validationCode VARCHAR(255) NOT NULL,
            active smallint(6) NOT NULL,
            email VARCHAR(100) NOT NULL,
            comments text NOT NULL,
            joined date NOT NULL,
            last_login date NOT NULL,
            PRIMARY KEY (id));";
            
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if (!$conn->query("SELECT * FROM user_group_link")) {
        $query = "CREATE TABLE user_group_link (
            id bigint(20) UNSIGNED AUTO_INCREMENT,
            group_id INT NOT NULL,
            user_id INT NOT NULL,
            PRIMARY KEY (id));";
            
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM users WHERE username = 'adminaccount'")->num_rows === 0) {
        $query = 'INSERT INTO users (id, firstname, lastname, username, password, validationCode, active, email, comments, joined, last_login)
                VALUES ("1", "admin", "name", "adminaccount", "$2y$10$vEa.6wdpAh0inoZPBYBmwui.NdqG2foloBtI6GF26iI5HiSEmGw.C", "nothinlul1", "1", "noemail1@none.com", "", "2019-01-01", "2019-01-01");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM users WHERE username = 'useraccount'")->num_rows === 0) {
        $query = 'INSERT INTO users (id, firstname, lastname, username, password, validationCode, active, email, comments, joined, last_login)
                VALUES ("2", "user", "name", "useraccount", "$2y$10$vEa.6wdpAh0inoZPBYBmwui.NdqG2foloBtI6GF26iI5HiSEmGw.C", "nothinlul2", "1", "noemail2@none.com", "", "2019-01-01", "2019-01-01");';

        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM groups WHERE name = 'Admin'")->num_rows === 0) {
        $query = 'INSERT INTO groups (id, name, description)
                VALUES ("1", "Admin", "CRUD users, groups, pages");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM groups WHERE name = 'Users'")->num_rows === 0) {
        $query = 'INSERT INTO groups (id, name, description)
                VALUES ("2", "Users", "User Exclusive Content");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM groups WHERE name = 'Peasants'")->num_rows === 0) {
        $query = 'INSERT INTO groups (id, name, description)
                VALUES ("3", "Peasants", "NON-PREMIUM USERS");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM user_group_link WHERE id = '1'")->num_rows === 0) {
        $query = 'INSERT INTO user_group_link (id, group_id, user_id)
                VALUES ("1", "1", "1");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM user_group_link WHERE id = '2'")->num_rows === 0) {
        $query = 'INSERT INTO user_group_link (id, group_id, user_id)
                VALUES ("2", "2", "1");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM user_group_link WHERE id = '3'")->num_rows === 0) {
        $query = 'INSERT INTO user_group_link (id, group_id, user_id)
                VALUES ("3", "2", "2");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM user_group_link WHERE id = '4'")->num_rows === 0) {
        $query = 'INSERT INTO user_group_link (id, group_id, user_id)
                VALUES ("4", "3", "2");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM pages WHERE name = 'Admin'")->num_rows === 0) {
        $query = 'INSERT INTO pages (id, name, description, url, group_id)
                VALUES ("1", "Admin", "CRUD", "admin.php", "1");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM pages WHERE name = 'Notes'")->num_rows === 0) {
        $query = 'INSERT INTO pages (id, name, description, url, group_id)
                VALUES ("3", "Notes", "", "notes.php", "2");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }

    if ($conn->query("SELECT * FROM pages WHERE name = 'Nothing'")->num_rows === 0) {
        $query = 'INSERT INTO pages (id, name, description, url, group_id)
                VALUES ("4", "Nothing", "Nothing", "nothing.php", "3");';
                
        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
    }


    

    $conn->close();

    $dsn = "mysql:host=$hn;dbname=$db";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];
    $pdo = new PDO($dsn, $un, $pw, $opt);
    
    $root_directory = "pocketMain";
    $from_email = "fake_email@mail.com";
    $reply_email = "fake_email@mail.com";
    include "php_functions.php";
?>
