<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        $name = $email = $desc = "";
        $showModal = false;
        include "koneksi.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnSubmit"])){
            if (isset($_POST["name"])){
                $name = $_POST["name"];
            }
            if (isset($_POST["email"])){
                $email = $_POST["email"];
            }
            if (isset($_POST["desc"])){
                $desc = $_POST["desc"];
            }
            $sql = "INSERT INTO savedata (name, email, description) VALUES ('$name', '$email', '$desc')";
            if (mysqli_query($koneksi, $sql)) {
                $showModal = true;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($koneksi);
        }
    ?>

    <?php if ($showModal): ?>
        <div class="modal show d-block" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Message has been sent.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Your message has been sent, please allow about 1 week for a response.</p>
                </div>
                <div class="modal-footer">
                    <a href="../components/about.php">
                        <button type="button" class="btn btn-primary">Close</button>
                    </a>
                </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</body>
</html>
