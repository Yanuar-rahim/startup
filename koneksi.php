<?php
    $server ="localhost";
    $user = "root";
    $pass ="";
    $database ="startup";

    $koneksi = mysqli_connect($server, $user, $pass, $database);

    if ($koneksi){
        // echo "Koneksi Berhasil";
    } else {
        echo "Koneksi gagal";
    }
?>