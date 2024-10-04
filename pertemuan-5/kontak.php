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
    <form class="border" action="konfirmasi.php" method="post">
        <h1>Formulir Kontak:</h1>
        <ul>
            <li class="pb">
                <label for="">Nama: </label>
                <input type="text" name="name"> <br>
            </li>
            <li class="pb">
                <label for="">Kewarganegaraan: </label> <br>
                <input type="radio" name="kewarganegaraan" value="WNI"> WNI <br>
                <input type="radio" name="kewarganegaraan" value="Asing"> Asing <br>
            </li>
            <li class="pb">
                <label for="">Layanan: </label> <br>
                <input type="checkbox" name="layanan[]" value="Website"> Website <br>
                <input type="checkbox" name="layanan[]" value="Hosting"> Hosting <br>
            </li>
            <li class="pb">
                <label for="">Hobby: </label> <br>
                <input type="checkbox" name="hobby[]" value="Lari"> Lari <br>
                <input type="checkbox" name="hobby[]" value="Loncat"> Loncat <br>
                <input type="checkbox" name="hobby[]" value="Renang"> Renang <br>
            </li>
            <li class="pb">
                <label for="">Tanggal lahir: </label> <br>
                <input type="date" name="tanggallahir"> <br>
            </li>
        </ul>

        <button type="reset" name="reset" value="" class="btn btn-danger">Hapus</button>
        <button type="submit" name="submit" value="" class="btn btn-primary">Kirim</button>
    </form>
</body>
</html>