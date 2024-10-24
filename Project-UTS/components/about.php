<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/font.css  ">
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>About Me</title>
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

        $sql1 = "SELECT link FROM content WHERE namafoto='orang'";
        $result1 = $conn->query($sql1);
        $sql2 = "SELECT txt FROM text WHERE nametext='about'";
        $result2 = $conn->query($sql2);

        $link = '';
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                $link = $row["link"];
            }
        } else {
            $link = "default.jpg";
        }

        $teks = '';
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                $teks = $row["txt"];
            }
        } else {
            $link = "default.jpg";
        }

        $conn->close();
    ?>
    <div class="flex min-[320px]:flex-col max-[768px]:flex-col min-[769px]:flex-row h-screen signika">
        <div class="flex flex-col basis-1/5">
            <div class="">
                <img src="<?php echo $link; ?>" class="w-full"/>
            </div>
            <nav class="bg-yellow-400 text-white h-full flex flex-col justify-center items-center">
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
                <a href="./home.php" class="mb-3 text-black font-bold hover:text-white">HOME</a>
                <a href="./about.php" class="mb-3 text-white font-bold hover:text-white">ABOUT ME</a>
                <a href="./skills.php" class="mb-3 text-black font-bold hover:text-white">SKILL</a>
                <a href="./project.php" class="mb-3 text-black font-bold hover:text-white">MY PROJECT</a>
                <a href="./contact.php" class="mb-3 text-black font-bold hover:text-white">CONTACT</a>
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
            </nav>
        </div>
        <div class="flex flex-col basis-4/5 bg-slate-200 p-7">
            <div class="border-1 border-slate-500 py-2 text-6xl w-full mb-4 text-center">
                <h1 class="rubikmono">ABOUT ME</h1>
            </div>
            <div class="mb-4">
                <h2 class="text-4xl text-left">I'm <span class=" font-bold">Dika Arnanda Putra.</span></h2>
                <p class="text-lg text-justify"><?php echo $teks?></p>
            </div>
            <div class="mt-2 mb-3">
                <h2 class="text-2xl text-center font-bold">What I Do?</h2>
            </div>
            <div class="flex justify-evenly">
                <div class="basis-1/3 place-items-center bg-yellow-300 m-2">
                    <img src="./images/iwak_200.jpeg" class="w-1/3"/>
                    <h5 class="text-center font-bold pt-1">Web Design</h5>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="basis-1/3 place-items-center bg-yellow-300 m-2">
                    <img src="./images/iwak_200.jpeg" class="w-1/3"/>
                    <h5 class="text-center font-bold pt-1">Web Design</h5>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="basis-1/3 place-items-center bg-yellow-300 m-2">
                    <img src="./images/iwak_200.jpeg" class="w-1/3"/>
                    <h5 class="text-center font-bold pt-1">Web Design</h5>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>