<?php
    include "database.php";

    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    mysqli_query($db, "insert into login values('$user','$pass')");
    header("location:tambahakun.php");

?> 

