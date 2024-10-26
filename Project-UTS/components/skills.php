<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/output.css">
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>My Skills</title>
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

        // pp
        $sql1 = "SELECT link FROM content WHERE namafoto='orang'";
        $result1 = $conn->query($sql1);
        // image
        $sql2 = "SELECT link FROM content WHERE namafoto='html'";
        $result2 = $conn->query($sql2);
        $sql3 = "SELECT link FROM content WHERE namafoto='css'";
        $result3 = $conn->query($sql3);
        $sql4 = "SELECT link FROM content WHERE namafoto='php'";
        $result4 = $conn->query($sql4);
        $sql5 = "SELECT link FROM content WHERE namafoto='js'";
        $result5 = $conn->query($sql5);
        $sql6 = "SELECT link FROM content WHERE namafoto='react'";
        $result6 = $conn->query($sql6);
        $sql7 = "SELECT link FROM content WHERE namafoto='arduino'";
        $result7 = $conn->query($sql7);
        $sql8 = "SELECT link FROM content WHERE namafoto='firebase'";
        $result8 = $conn->query($sql8);
        $sql9 = "SELECT link FROM content WHERE namafoto='nodejs'";
        $result9 = $conn->query($sql9);
        $sql10 = "SELECT link FROM content WHERE namafoto='tailwind'";
        $result10 = $conn->query($sql10);
        // docs
        $sql11 = "SELECT link FROM content WHERE namafoto='html'";
        $result11 = $conn->query($sql11);
        $sql12 = "SELECT link FROM lang WHERE namabhs='css'";
        $result12 = $conn->query($sql12);
        $sql13 = "SELECT link FROM lang WHERE namabhs='php'";
        $result13 = $conn->query($sql13);
        $sql14 = "SELECT link FROM lang WHERE namabhs='js'";
        $result14 = $conn->query($sql14);
        $sql15 = "SELECT link FROM lang WHERE namabhs='react'";
        $result15 = $conn->query($sql15);
        $sql16 = "SELECT link FROM lang WHERE namabhs='arduino'";
        $result16 = $conn->query($sql16);
        $sql17 = "SELECT link FROM lang WHERE namabhs='firebase'";
        $result17 = $conn->query($sql17);
        $sql18 = "SELECT link FROM lang WHERE namabhs='nodejs'";
        $result18 = $conn->query($sql18);
        $sql19 = "SELECT link FROM lang WHERE namabhs='tailwind'";
        $result19 = $conn->query($sql19);
        // teks
        $sql20 = "SELECT txt FROM text WHERE nametext='skill'";
        $result20 = $conn->query($sql20);

        // foto
        $foto = '';
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                $foto = $row["link"];
            }
        }
        // skill
        $htmlimg = '';
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                $htmlimg = $row["link"];
            }
        }
        $cssimg = '';
        if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
                $cssimg = $row["link"];
            }
        }
        $phpimg = '';
        if ($result4->num_rows > 0) {
            while($row = $result4->fetch_assoc()) {
                $phpimg = $row["link"];
            }
        }
        $jsimg = '';
        if ($result5->num_rows > 0) {
            while($row = $result5->fetch_assoc()) {
                $jsimg = $row["link"];
            }
        }
        $reactimg = '';
        if ($result6->num_rows > 0) {
            while($row = $result6->fetch_assoc()) {
                $reactimg = $row["link"];
            }
        }
        $arduinoimg = '';
        if ($result7->num_rows > 0) {
            while($row = $result7->fetch_assoc()) {
                $arduinoimg = $row["link"];
            }
        }
        $firebaseimg = '';
        if ($result8->num_rows > 0) {
            while($row = $result8->fetch_assoc()) {
                $firebaseimg = $row["link"];
            }
        }
        $nodejsimg = '';
        if ($result9->num_rows > 0) {
            while($row = $result9->fetch_assoc()) {
                $nodejsimg = $row["link"];
            }
        }
        $tailwindimg = '';
        if ($result10->num_rows > 0) {
            while($row = $result10->fetch_assoc()) {
                $tailwindimg = $row["link"];
            }
        }
        // docs
        $htmldocs = '';
        if ($result11->num_rows > 0) {
            while($row = $result11->fetch_assoc()) {
                $htmldocs = $row["link"];
            }
        }
        $cssdocs = '';
        if ($result12->num_rows > 0) {
            while($row = $result12->fetch_assoc()) {
                $cssdocs = $row["link"];
            }
        }
        $phpdocs = '';
        if ($result13->num_rows > 0) {
            while($row = $result13->fetch_assoc()) {
                $phpdocs = $row["link"];
            }
        }
        $jsdocs = '';
        if ($result14->num_rows > 0) {
            while($row = $result14->fetch_assoc()) {
                $jsdocs = $row["link"];
            }
        }
        $reactdocs = '';
        if ($result15->num_rows > 0) {
            while($row = $result15->fetch_assoc()) {
                $reactdocs = $row["link"];
            }
        }
        $arduinodocs = '';
        if ($result16->num_rows > 0) {
            while($row = $result16->fetch_assoc()) {
                $arduinodocs = $row["link"];
            }
        }
        $firebasedocs = '';
        if ($result17->num_rows > 0) {
            while($row = $result17->fetch_assoc()) {
                $firebasedocs = $row["link"];
            }
        }
        $nodejsdocs = '';
        if ($result18->num_rows > 0) {
            while($row = $result18->fetch_assoc()) {
                $nodejsdocs = $row["link"];
            }
        }
        $tailwinddocs = '';
        if ($result19->num_rows > 0) {
            while($row = $result19->fetch_assoc()) {
                $tailwinddocs = $row["link"];
            }
        }
        // teks
        $teks = '';
        if ($result20->num_rows > 0) {
            while($row = $result20->fetch_assoc()) {
                $teks = $row["txt"];
            }
        }

        $conn->close();
    ?>
    <div class="flex min-[320px]:flex-col max-[768px]:flex-col min-[769px]:flex-row h-screen signika bg-slate-200">
        <div class="flex flex-col basis-1/6 bg-slate-500 rounded-r-3xl">
            <div class="flex justify-center items-center w-full p-4">
                <img src="<?php echo $foto;?>" class="object-cover h-auto w-auto aspect-square rounded-full outline-dashed bg-gray-400"/>
            </div>
            <nav class=" h-full flex flex-col justify-center items-center">
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
                <a href="./home.php" class="no-underline mb-3 text-black font-bold hover:text-white">HOME</a>
                <a href="./about.php" class="no-underline mb-3 text-black font-bold hover:text-white">ABOUT ME</a>
                <a href="./skills.php" class="no-underline mb-3 text-white font-bold hover:text-white">SKILL</a>
                <a href="./project.php" class="no-underline mb-3 text-black font-bold hover:text-white">MY PROJECT</a>
                <a href="./contact.php" class="no-underline mb-3 text-black font-bold hover:text-white">CONTACT</a>
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
            </nav>
        </div>
        <div class="flex flex-col basis-5/6 p-7">
            <div class="border-1 border-slate-500 py-2 text-6xl w-full mb-4 text-center">
                <h1 class="rubikmono m-0">SKILLS</h1>
            </div>
            <div>
                <p class="text-xl text-justify pt-2"><?php echo $teks;?></p>
            </div>
            <div class="flex justify-around my-3">
                <a href="<?php echo $htmldocs;?>">
                    <img src="<?php echo $htmlimg;?>" class="object-cover h-auto w-auto max-w-[80px] mt-2"/>
                </a>
                <a href="<?php echo $jsdocs;?>">
                    <img src="<?php echo $jsimg;?>" class="object-cover h-auto w-auto max-w-[80px] mt-2"/>
                </a>
                <a href="<?php echo $reactdocs;?>">
                    <img src="<?php echo $reactimg;?>" class="object-cover h-auto w-auto max-w-[80px] mt-2"/>
                </a>
                <a href="<?php echo $arduinodocs;?>">
                    <img src="<?php echo $arduinoimg;?>" class="object-cover h-auto w-auto max-w-[80px] mt-2"/>
                </a>
            </div>
            <div class="flex justify-around my-3">
                <a href="<?php echo $firebasedocs;?>">
                    <img src="<?php echo $firebaseimg;?>" class="object-cover h-auto w-auto max-w-[80px] mt-2"/>
                </a>
                <a href="<?php echo $nodejsdocs;?>">
                    <img src="<?php echo $nodejsimg;?>" class="object-cover h-auto w-auto max-w-[80px] mt-2"/>
                </a>
                <a href="<?php echo $phpdocs;?>">
                    <img src="<?php echo $phpimg;?>" class="object-cover h-auto w-auto max-w-[80px] mt-2"/>
                </a>
            </div>
            <div class="flex justify-around my-3">
                <a href="<?php echo $cssdocs;?>">
                    <img src="<?php echo $cssimg;?>" class="object-cover h-auto w-auto max-w-[80px] mt-2"/>
                </a>
                <a href="<?php echo $tailwinddocs;?>">
                    <img src="<?php echo $tailwindimg;?>" class="object-cover h-auto w-auto max-w-[80px] mt-2"/>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>