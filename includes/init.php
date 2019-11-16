<?php
    //output buffering, start in order to redirect a page
     session_start();
     ob_start();
   
     $hn = 'localhost';
     $db = 'pocketMain';
     $un = 'root';
     $pw = '';
    // $charset = "utf8mb4";

    $dsn = "mysql:host=$hn;dbname=$db";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];
    $pdo = new PDO($dsn, $un, $pw, $opt);
    
    $root_directory = "pocketMain2";
    $from_email = "tjk154@msstate.edu";
    $reply_email = "tjk154@msstate.edu";
    include "php_functions.php";
?>
