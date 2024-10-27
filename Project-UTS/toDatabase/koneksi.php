<?php
    $server = "localhost";
    $user   = "root";
    $pw     = "";
    $namaDB = "uts";
    $port   = 3306;

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        //buat koneksi
        $koneksi = mysqli_connect($server, $user, $pw, $namaDB, $port); //hasil koneksi = true / false
    }
    catch (mysqli_sql_exception $erornih) {
        echo "Koneksi gagal" . $erornih->getMessage();
    }
    
?>