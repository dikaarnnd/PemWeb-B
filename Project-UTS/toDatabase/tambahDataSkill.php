<!DOCTYPE html>

<?php
  $judul = "Input Data About";
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

<div class="container mt-3">
  <h2><?php echo $judul ?></h2>
  <form action="simpanDataAbout.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="namadepan">Nama depan:</label>
      <input type="namadepan" class="form-control" id="namadepan" placeholder="Input nama depan" name="namadepan">
    </div>
    <div class="mb-3 mt-3">
      <label for="skill_name">Skill:</label>
      <input type="skill_name" class="form-control" id="skill_name" placeholder="Input nama skill_name" name="skill_name">
    </div>
    <button type="submit" class="btn btn-primary" name="tombol">Submit</button>
  </form>
</div>

</body>
</html>
