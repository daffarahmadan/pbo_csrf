<?php
    error_reporting(0);
    $Koneksi = mysqli_connect("localhost","root","","pbo");
 
    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi Database Gagal : " . mysqli_connect_error();
    }
?>