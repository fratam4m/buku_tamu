<?php
    $host ="localhost";
    $user ="root";
    $pasword ="";
    $db ="buku_tamu_meindra";

    //membuat koneksi
    $koneksi = mysqli_connect($host,$user,$pasword,$db) or die ("koneksi Gagal");
    echo "koneksi Berhasil";


  ?>


