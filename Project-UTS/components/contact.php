<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/output.css">
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact</title>
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
        $sq1 = "SELECT link FROM content WHERE namafoto='orang'";
        $result1 = $conn->query($sq1);
        // teks
        $sql2 = "SELECT txt FROM text WHERE nametext='contact1'";
        $result2 = $conn->query($sql2);
        $sql3 = "SELECT txt FROM text WHERE nametext='contact2'";
        $result3 = $conn->query($sql3);
        $sql4 = "SELECT no_tlp FROM biodata WHERE id=1";
        $result4 = $conn->query($sql4);
        $sql5 = "SELECT gmail FROM biodata WHERE id=1";
        $result5 = $conn->query($sql5);
        // image
        $sql6 = "SELECT link FROM content WHERE namafoto='gmail'";
        $result6 = $conn->query($sql6);
        $sql7 = "SELECT link FROM content WHERE namafoto='wa'";
        $result7 = $conn->query($sql7);

        // pp
        $link = '';
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                $link = $row["link"];
            }
        }
        //teks
        $txt1 = '';
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                $txt1 = $row["txt"];
            }
        }
        $txt2 = '';
        if ($result3->num_rows > 0) {
            while($row = $result3->fetch_assoc()) {
                $txt2 = $row["txt"];
            }
        }
        $txt3 = '';
        if ($result4->num_rows > 0) {
            while($row = $result4->fetch_assoc()) {
                $txt3 = $row["no_tlp"];
            }
        }
        $txt4 = '';
        if ($result5->num_rows > 0) {
            while($row = $result5->fetch_assoc()) {
                $txt4 = $row["gmail"];
            }
        }
        // image
        $gmailimg = '';
        if ($result6->num_rows > 0) {
            while($row = $result6->fetch_assoc()) {
                $gmailimg = $row["link"];
            }
        }
        $waimg = '';
        if ($result7->num_rows > 0) {
            while($row = $result7->fetch_assoc()) {
                $waimg = $row["link"];
            }
        }

        $conn->close();
    ?>
    <div class="flex min-[320px]:flex-col max-[768px]:flex-col min-[769px]:flex-row min-h-screen signika bg-slate-200">
        <div class="flex flex-col basis-1/6 bg-slate-500 rounded-r-3xl">
            <div class="flex justify-center items-center w-full p-4">
                <img src="<?php echo $link;?>" class="object-cover h-auto w-auto aspect-square rounded-full outline-dashed bg-gray-400"/>
            </div>
            <nav class=" h-full flex flex-col justify-center items-center">
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
                <a href="./home.php" class="no-underline mb-3 text-black font-bold hover:text-white">HOME</a>
                <a href="./about.php" class="no-underline mb-3 text-black font-bold hover:text-white">ABOUT ME</a>
                <a href="./skills.php" class="no-underline mb-3 text-black font-bold hover:text-white">SKILL</a>
                <a href="./project.php" class="no-underline mb-3 text-black font-bold hover:text-white">MY PROJECT</a>
                <a href="./contact.php" class="no-underline mb-3 text-white font-bold hover:text-white">CONTACT</a>
                <div class="w-1 h-1 rounded-full bg-black my-8"></div>
            </nav>
        </div>
        <div class="flex flex-col basis-5/6 p-7">
            <div class="border-1 border-slate-500 py-2 text-6xl w-full mb-4 text-center">
                <h1 class="rubikmono m-0">CONTACT ME</h1>
            </div>
            <div class="mt-2 mb-3">
                <h1 class="text-2xl font-bold"><?php echo $txt1;?></h1>
                <p class="text-lg"><?php echo $txt2;?></p>
            </div>
            <div class="flex flex-col ml-2">
                <div class="flex gap-3">
                    <img src="<?php echo $gmailimg;?>" class="object-cover h-auto w-auto max-w-[40px]"/>
                    <p class="text-md content-center m-0"><?php echo $txt4;?></p>
                </div>
                <div class="flex mt-3 gap-3">
                    <img src="<?php echo $waimg;?>" class="object-cover h-auto w-auto max-w-[40px]"/>
                    <p class="text-md content-center m-0"><?php echo $txt3;?></p>
                </div>
            </div>
            <div class="flex items-center my-3">
                <div class="flex-grow border-t border-black mx-2"></div>
                <span class="font-semibold">or</span>
                <div class="flex-grow border-t border-black mx-2"></div>
            </div>
            <form action="../toDatabase/simpandata.php" method="POST">
                <div class="mb-3">
                    <label for="name">Your name:</label>
                    <input type="name" class="form-control" id="name" placeholder="Your name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Your email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="desc">Description:</label>
                    <textarea type="desc" class="form-control" id="desc" placeholder="Description" name="desc" required></textarea>
                </div>
                <div class="flex gap-2">
                    <div class="border border-1 rounded-lg bg-slate-500 hover:bg-slate-600 w-max p-2">
                        <button type="submit" class=" text-white" name="btnSubmit">Submit</button>
                    </div>
                    <div class="border border-1 rounded-lg bg-slate-500 hover:bg-slate-600 w-max p-2">
                        <button type="reset" class="text-white" name="btnCancel ">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>