<?php
    //aktifkan session
    session_start();
    include "database.php";
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    //cari data hasil login
    $datalogin = mysqli_query($db, "select * from login where user = '$user' and pass = '$pass'");
    $j=mysqli_num_rows($datalogin);
    //jika data ditemukan
    if($j>0){
        $isi = mysqli_fetch_array($datalogin);
        //buat varibel session untuk menampung nama user
        $_SESSION['user'] = $isi[0];
        header("location:barang.php");
        
    }
    else
    {
        header("location:gagallogin.php");
    }
?>