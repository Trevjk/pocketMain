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
