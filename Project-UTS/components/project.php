<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/output.css">
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>My Project</title>
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
        // foto
        $sql2 = "SELECT link FROM content WHERE namafoto='project1'";
        $result2 = $conn->query($sql2);
        $sql3 = "SELECT link FROM content WHERE namafoto='project2'";
        $result3 = $conn->query($sql3);
        $sql4 = "SELECT link FROM content WHERE namafoto='project3'";
        $result4 = $conn->query($sql4);
        // teks
        $sql5 = "SELECT txt FROM text WHERE nametext='p1'";
        $result5 = $conn->query($sql5);
        $sql6 = "SELECT txt FROM text WHERE nametext='p2'";
        $result6 = $conn->query($sql6);
        $sql7 = "SELECT txt FROM text WHERE nametext='p3'";
        $result7 = $conn->query($sql7);

        // pp
        $link = '';
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                $link = $row["link"];
            }
        }
        // foto
        $p1img = '';
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                $p1img = $row["link"];
            }
        }
        $p2img = '';
        if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
                $p2img = $row["link"];
            }
        }
        $p3img = '';
        if ($result4->num_rows > 0) {
            while($row = $result4->fetch_assoc()) {
                $p3img = $row["link"];
            }
        }
        // teks
        $p1txt = '';
        if ($result5->num_rows > 0) {
            while($row = $result5->fetch_assoc()) {
                $p1txt = $row["txt"];
            }
        }
        $p2txt = '';
        if ($result6->num_rows > 0) {
            while($row = $result6->fetch_assoc()) {
                $p2txt = $row["txt"];
            }
        }
        $p3txt = '';
        if ($result7->num_rows > 0) {
            while($row = $result7->fetch_assoc()) {
                $p3txt = $row["txt"];
            }
        }

        $conn->close();
    ?>
    <div class="flex min-[320px]:flex-col max-[768px]:flex-col min-[769px]:flex-row h-screen signika bg-slate-200">
        <div class="flex flex-col basis-1/6 bg-slate-500 rounded-r-3xl">
            <div class="flex justify-center items-center w-full p-4">
                <img src="<?php echo $link;?>" class="object-cover h-auto w-auto aspect-square rounded-full outline-dashed bg-gray-400"/>
            </div>
            <nav class=" h-full flex flex-col justify-center items-center">
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
                <a href="./home.php" class="no-underline mb-3 text-black font-bold hover:text-white">HOME</a>
                <a href="./about.php" class="no-underline mb-3 text-black font-bold hover:text-white">ABOUT ME</a>
                <a href="./skills.php" class="no-underline mb-3 text-black font-bold hover:text-white">SKILL</a>
                <a href="./project.php" class="no-underline mb-3 text-white font-bold hover:text-white">MY PROJECT</a>
                <a href="./contact.php" class="no-underline mb-3 text-black font-bold hover:text-white">CONTACT</a>
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
            </nav>
        </div>
        <div class="flex flex-col basis-5/6 p-7">
            <div class="border-1 border-slate-500 py-2 text-6xl w-full mb-4 text-center">
                <h1 class="rubikmono m-0">MY PROJECT</h1>
            </div>
            <div class="flex justify-evenly items-center h-full">
                <div class="card rounded-lg h-full" style="width: 18rem;">
                    <img src="<?php echo $p1img?>" class="card-img-top max-h-[190px] rounded-t-lg bg-black">
                    <div class="card-body rounded-2xl">
                        <h5 class="card-title font-bold">Detection System</h5>
                        <p class="card-text"><?php echo $p1txt?></p>
                    </div>
                </div>
                <div class="card rounded-lg h-full" style="width: 18rem;">
                    <img src="<?php echo $p2img?>" class="card-img-top max-h-[190px] rounded-t-lg bg-black p-4">
                    <div class="card-body">
                        <h5 class="card-title font-bold">Regrant</h5>
                        <p class="card-text"><?php echo $p2txt?></p>
                    </div>
                </div>
                <div class="card rounded-lg h-full" style="width: 18rem;">
                    <img src="<?php echo $p3img?>" class="card-img-top max-h-[190px] rounded-t-lg bg-black p-4">
                    <div class="card-body">
                        <h5 class="card-title font-bold">Water Wise</h5>
                        <p class="card-text"><?php echo $p3txt?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>