<!DOCTYPE html>

<?php
  $judul = "Simpan Data Skill";

?>

<html lang="en">
<head>
  <title><?= $judul; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
    $skill = "";
    include "koneksi.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tombol"])){
        if (isset($_POST["skill_name"])){
            $skill = $_POST["sskill_name"];
        }
        $sql = "INSERT INTO about (skill_name) VALUES ('$skill')";
        if (mysqli_query($koneksi, $sql)) {
            echo "New record created successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($koneksi);
        }

        mysqli_close($koneksi);
    }
?>
<div class="container mt-3">
    <h2><?php echo $judul ?></h2>
    <div class="mb-3 mt-3">
        <label for="skill">Skill: <?= $skill ?></label>
    </div>
</div>

</body>
</html>
