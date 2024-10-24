<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/font.css">
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    <?php
        $server = "localhost";
        $user   = "root";
        $pw     = "";
        $namaDB = "uts";
        $port   = 3306;
        $conn = mysqli_connect($server, $user, $pw, $namaDB, $port);

        // Cek koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql1 = "SELECT link FROM content WHERE namafoto='arduino'";
        $result1 = $conn->query($sql1);
        $sql2 = "SELECT namadepan FROM biodata WHERE id=1";
        $result2 = $conn->query($sql2);
        $sql3 = "SELECT skillname FROM skill LIMIT 3";
        $result3 = $conn->query($sql3);

        $link = '';
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                $link = $row["link"];
            }
        } else {
            $link = "default.jpg";
        }

        $namaDepan = '';
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                $namaDepan = $row["namadepan"];
            }
        } else {
            $namaDepan = "default.jpg";
        }

        $namaSkill = [];
        if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
                $namaSkill [] = $row["skillname"];
            }
        } else {
            $namaSkill = "default.jpg";
        }
        $allSkill = !empty($namaSkill) ? implode(', ', $namaSkill) : "default skill"; 

        $conn->close();
    ?>
    <div class="flex min-[320px]:flex-col max-[768px]:flex-col min-[769px]:flex-row h-screen signika">
        <div class="basis-2/5">
            <img src="<?php echo $link; ?>" class="h-full w-full"/>
        </div>
        <div class="basis-3/5 bg-slate-200 px-5 py-6 content-center">
            <h1 class="text-5xl">Hi There!</h1>
            <h1 class="text-7xl">I'm <span class="rubik"><?php echo $namaDepan;?></span></h1>
            <div class="py-2">
                <h3 class="bg-orange-400 px-2 py-1 w-max font-bold"><?php echo $allSkill;?></h3>
            </div>
            <div class="my-3">
                <a href="./about.php" class="bg-orange-300 p-2 rounded-lg hover:bg-orange-500 hover:text-black transition duration-400 ease-in-out">More about me</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>