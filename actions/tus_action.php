<?php 

    $filename = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];

    echo move_uploaded_file($tmp_name, './../uploads/' . $filename);
?>