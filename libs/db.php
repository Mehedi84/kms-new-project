<?php
    session_start();
    date_default_timezone_set('Asia/Dhaka');
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "kms_10ms";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>