<?php
include('../libs/db.php');

## destroy all session
session_destroy();

## redirect to login page
header('location: ./../login.php');
?>