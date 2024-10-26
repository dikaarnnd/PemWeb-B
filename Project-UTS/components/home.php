<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/output.css">
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

        // pp
        $sql1 = "SELECT link FROM content WHERE namafoto='orang'";
        $result1 = $conn->query($sql1);
        // nama
        $sql2 = "SELECT namadepan FROM biodata WHERE id=1";
        $result2 = $conn->query($sql2);
        // skill
        $sql3 = "SELECT skillname FROM skill LIMIT 3";
        $result3 = $conn->query($sql3);
        // image
        $sql4 = "SELECT link FROM content WHERE namafoto='ig'";
        $result4 = $conn->query($sql4);
        $sql5 = "SELECT link FROM content WHERE namafoto='linkedin'";
        $result5 = $conn->query($sql5);
        $sql6 = "SELECT link FROM content WHERE namafoto='github'";
        $result6 = $conn->query($sql6);
        // link
        $sql7 = "SELECT link FROM sosmed WHERE namasosmed='ig'";
        $result7 = $conn->query($sql7);
        $sql8 = "SELECT link FROM sosmed WHERE namasosmed='linkedin'";
        $result8 = $conn->query($sql8);
        $sql9 = "SELECT link FROM sosmed WHERE namasosmed='github'";
        $result9 = $conn->query($sql9);

        // pp
        $link = '';
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                $link = $row["link"];
            }
        }

        // nama
        $namaDepan = '';
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                $namaDepan = $row["namadepan"];
            }
        }

        // skill
        $namaSkill = [];
        if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
                $namaSkill [] = $row["skillname"];
            }
        }
        $allSkill = !empty($namaSkill) ? implode(', ', $namaSkill) : "default skill";

        // image
        $igimg = '';
        if ($result4->num_rows > 0) {
            while($row = $result4->fetch_assoc()) {
                $igimg = $row["link"];
            }
        }
        $linkedinimg = '';
        if ($result5->num_rows > 0) {
            while($row = $result5->fetch_assoc()) {
                $linkedinimg = $row["link"];
            }
        }
        $githubimg = '';
        if ($result6->num_rows > 0) {
            while($row = $result6->fetch_assoc()) {
                $githubimg = $row["link"];
            }
        }

        // link sosmed
        $iglink = '';
        if ($result7->num_rows > 0) {
            while($row = $result7->fetch_assoc()) {
                $iglink = $row["link"];
            }
        }
        $linkedinlink = '';
        if ($result8->num_rows > 0) {
            while($row = $result8->fetch_assoc()) {
                $linkedinlink = $row["link"];
            }
        }
        $githublink = '';
        if ($result9->num_rows > 0) {
            while($row = $result9->fetch_assoc()) {
                $githublink = $row["link"];
            }
        }

        $conn->close();
    ?>
    <div class="flex min-[320px]:flex-col max-[768px]:flex-col min-[769px]:flex-row h-screen signika bg-gray-200">
        <div class="flex justify-center items-center w-full bg-slate-500 rounded-r-3xl">
            <img src="<?php echo $link; ?>" class="object-cover h-auto w-auto max-w-[500px] aspect-square rounded-full bg-gray-400"/>
        </div>    
        <div class="flex flex-col pl-10 py-6 justify-center w-full">
            <h1 class="text-5xl">Hi There!</h1>
            <h1 class="text-7xl">I'm <span class="rubik"><?php echo $namaDepan;?></span></h1>
            <div class="py-2">
                <p class="bg-gray-400 px-2 py-1 w-max font-bold rounded-md m-0"><?php echo $allSkill;?></p>
            </div>
            <div class="flex gap-4 my-2">
                <a href="<?php echo $iglink;?>">
                    <img src="<?php echo $igimg;?>" class="object-cover h-auto w-auto max-w-[30px] my-1"/>
                </a>
                <a href="<?php echo $linkedinlink;?>">
                    <img src="<?php echo $linkedinimg;?>" class="object-cover h-auto w-auto max-w-[30px] my-1"/>
                </a>
                <a href="<?php echo $githublink;?>">
                    <img src="<?php echo $githubimg;?>" class="object-cover h-auto w-auto max-w-[30px] my-1"/>
                </a>
            </div>
            <div class="my-3">
                <a href="./about.php" class="bg-gray-500 p-2 rounded-lg hover:bg-gray-600 text-gray-200 hover:text-gray-200 transition duration-400 ease-in-out no-underline">More about me</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>