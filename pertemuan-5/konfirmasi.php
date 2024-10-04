<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>Kontak</title>
</head>
<body>
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
        <a class="nav-link" href="kontak.php">Kontak</a>
        <a class="nav-link" href="about.php">About</a>
    </nav>
    <hr>
    <div>
        <ul>
            <h1>Konfirmasi pilihan</h1>
            <li class="pb">
                <?php
                    echo 'Nama: ' .$_POST['name'];
                ?>
            </li>
            <li class="pb">
                <?php 
                    echo 'Kewarganegaraan: ' .$_POST['kewarganegaraan']; 
                ?>
            </li>
            <li class="pb">
                <?php 
                    echo 'Layanan: ';
                    if (isset($_POST['layanan']) && is_array($_POST['layanan'])) {
                        echo implode(' dan ', $_POST['layanan']);
                    } else {
                        echo 'Tidak ada layanan yang dipilih';
                    }
                ?>
            </li>
            <li class="pb">
                <?php
                    echo 'Hobby: ';
                    if (isset($_POST['hobby']) && is_array($_POST['hobby'])) {
                        $hobbies = $_POST['hobby']; // Salin array hobby ke variabel baru
                        $jumlahHobby = count($hobbies);
                        if ($jumlahHobby > 1) {
                            // Pisahkan hobi terakhir untuk ditambahkan kata "dan"
                            $hobiTerakhir = array_pop($hobbies);
                            echo implode(', ', $hobbies) . ', dan ' . $hobiTerakhir;
                        } else {
                            echo $hobbies[0];
                        }
                    } else {
                        echo 'Tidak ada hobby yang dipilih';
                    }
                ?>
            </li>
            <li class="pb">
                <?php
                    // Mengambil input tanggal dari form
                    $tanggalLahir = $_POST['tanggallahir'];

                    // Mengonversi format tanggal ke DateTime
                    $date = new DateTime($tanggalLahir);
                    
                    // Fungsi untuk mengubah nama bulan ke bahasa Indonesia
                    function namaBulanIndonesia($bulanInggris) {
                        $bulan = [
                            'January' => 'Januari',
                            'February' => 'Februari',
                            'March' => 'Maret',
                            'April' => 'April',
                            'May' => 'Mei',
                            'June' => 'Juni',
                            'July' => 'Juli',
                            'August' => 'Agustus',
                            'September' => 'September',
                            'October' => 'Oktober',
                            'November' => 'November',
                            'December' => 'Desember'
                        ];
                        return $bulan[$bulanInggris];
                    }

                    // Mengubah format tanggal dengan bulan dalam bahasa Indonesia
                    $bulanIndo = namaBulanIndonesia($date->format('F'));
                    echo 'Tanggal lahir: ' . $date->format('j') . ' ' . $bulanIndo . ' ' . $date->format('Y') . ',<br>';

                    // Menghitung umur berdasarkan tanggal lahir hingga hari ini
                    $today = new DateTime(); // Tanggal hari ini
                    $umur = $today->diff($date); // Hitung selisih

                    // Tampilkan hasil umur dalam tahun, bulan, dan hari
                    echo 'berarti umur Anda sudah ' . $umur->y . ' tahun ' . $umur->m . ' bulan ' . $umur->d . ' hari.';
                ?>
            </li>
        </ul>
        <button type="submit" name="submit" value="" class="btn btn-primary">Konfirmasi</button>
    </div> <br>
</body>
</html>