<?php
    $username = "root";
    $password = "test";
    $server = "db";
    $database = "hotel";

    $con = mysqli_connect($server,$username,$password,$database)or die(mysql_error());
?>