<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        $server = "localhost";
        $user   = "root";
        $pw     = "";
        $namaDB = "uts";
        $port   = 3306;

        //buat koneksi
        // $koneksi = mysqli_connect($server, $user, $pw, $namaDB, $port) //hasil koneksi = true / false

        // if (!$koneksi){
        //     die ("Koneksi gagal: ". mysqli_connect_error());
        // }
        // aktifin mode exception untuk mysqli
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
            //buat koneksi
            $koneksi = mysqli_connect($server, $user, $pw, $namaDB, $port); //hasil koneksi = true / false
            echo "Koneksi berhasil"; // tampilkan pesan sukses
        }
        catch (mysqli_sql_exception $erornih) {
            echo "Koneksi gagal<br>" . $erornih->getMessage();
        }
    ?>
    <br>
    <a class="btn btn-primary" href="tambahDataAbout.php" role="button">Tambah Data About</a>
    <a class="btn btn-primary" href="tambahDataSkill.php" role="button">Tambah Data Skill</a>
</body>
</html>