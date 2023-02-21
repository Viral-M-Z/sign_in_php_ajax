<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $database="stud";

    $con = new mysqli($hostname, $username, $password, $database);

    if(!$con) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // echo "Success to Connect";
    }

    #   glob var
    global $salt_in_pwd;
    $salt_in_pwd = "29Kreativ";

?>