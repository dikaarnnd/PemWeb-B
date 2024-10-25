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

        // pp
        $sql1 = "SELECT link FROM content WHERE namafoto='orang'";
        $result1 = $conn->query($sql1);
        // teks
        $sql2 = "SELECT txt FROM text WHERE nametext='about'";
        $result2 = $conn->query($sql2);
        // image
        $sql3 = "SELECT link FROM content WHERE namafoto='webimg'";
        $result3 = $conn->query($sql3);
        $sql4 = "SELECT link FROM content WHERE namafoto='dbimg'";
        $result4 = $conn->query($sql4);
        $sql5 = "SELECT link FROM content WHERE namafoto='iotimg'";
        $result5 = $conn->query($sql5);
        // skill
        $sql6 = "SELECT skillname FROM skill WHERE id=4";
        $result6 = $conn->query($sql6);
        $sql7 = "SELECT skillname FROM skill WHERE id=5";
        $result7 = $conn->query($sql7);
        $sql8 = "SELECT skillname FROM skill WHERE id=6";
        $result8 = $conn->query($sql8);
        // nama
        $sql9 = "SELECT CONCAT(namadepan, ' ', namabelakang) AS nama_lengkap FROM biodata WHERE id=1";
        $result9 = $conn->query($sql9);

        // pp
        $link1 = '';
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                $link1 = $row["link"];
            }
        }
        // teks
        $teks = '';
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                $teks = $row["txt"];
            }
        } 
        // image
        $link2 = '';
        if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
                $link2 = $row["link"];
            }
        } 
        $link3 = '';
        if ($result4->num_rows > 0) {
            while($row = $result4->fetch_assoc()) {
                $link3 = $row["link"];
            }
        } 
        $link4 = '';
        if ($result5->num_rows > 0) {
            while($row = $result5->fetch_assoc()) {
                $link4 = $row["link"];
            }
        } 
        // skill
        $skill1 = '';
        if ($result6->num_rows > 0) {
            while($row = $result6->fetch_assoc()) {
                $skill1 = $row["skillname"];
            }
        } 
        $skill2 = '';
        if ($result7->num_rows > 0) {
            while($row = $result7->fetch_assoc()) {
                $skill2 = $row["skillname"];
            }
        } 
        $skill3 = '';
        if ($result8->num_rows > 0) {
            while($row = $result8->fetch_assoc()) {
                $skill3 = $row["skillname"];
            }
        } 
        // nama
        $nama = '';
        if ($result9->num_rows > 0) {
            while($row = $result9->fetch_assoc()) {
                $nama = $row["nama_lengkap"];
            }
        } 

        $conn->close();
    ?>
    <div class="flex min-[320px]:flex-col max-[768px]:flex-col min-[769px]:flex-row h-screen signika bg-slate-200">
        <div class="flex flex-col basis-1/6 bg-slate-500 rounded-r-3xl">
            <div class="flex justify-center items-center w-full p-4">
                <img src="<?php echo $link1; ?>" class="object-cover h-auto w-auto aspect-square rounded-full border border-black outline-dashed bg-gray-400"/>
            </div>
            <nav class=" h-full flex flex-col justify-center items-center">
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
                <a href="./home.php" class="mb-3 text-black font-bold hover:text-white">HOME</a>
                <a href="./about.php" class="mb-3 text-white font-bold hover:text-white">ABOUT ME</a>
                <a href="./skills.php" class="mb-3 text-black font-bold hover:text-white">SKILL</a>
                <a href="./project.php" class="mb-3 text-black font-bold hover:text-white">MY PROJECT</a>
                <a href="./contact.php" class="mb-3 text-black font-bold hover:text-white">CONTACT</a>
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
            </nav>
        </div>
        <div class="flex flex-col basis-5/6 p-7">
            <div class="border-1 border-slate-500 py-2 text-6xl w-full mb-4 text-center">
                <h1 class="rubikmono">ABOUT ME</h1>
            </div>
            <div class="mb-4">
                <h2 class="text-4xl text-left pt-1">I'm <span class=" font-bold"><?php echo $nama?>.</span></h2>
                <p class="text-lg text-justify pt-2"><?php echo $teks?></p>
            </div>
            <div class="mt-4 mb-3">
                <h2 class="text-2xl text-center font-bold">What I Do?</h2>
            </div>
            <div class="flex justify-evenly">
                <div class="basis-1/3 place-items-center m-2">
                    <img src="<?php echo $link2?>" class="w-1/3"/>
                    <h5 class="text-center font-bold pt-2"><?php echo $skill1?></h5>
                </div>
                <div class="basis-1/3 place-items-center m-2">
                    <img src="<?php echo $link3?>" class="w-1/3"/>
                    <h5 class="text-center font-bold pt-2"><?php echo $skill2?></h5>
                </div>
                <div class="basis-1/3 place-items-center m-2">
                    <img src="<?php echo $link4?>" class="w-1/3"/>
                    <h5 class="text-center font-bold pt-2"><?php echo $skill3?></h5>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>