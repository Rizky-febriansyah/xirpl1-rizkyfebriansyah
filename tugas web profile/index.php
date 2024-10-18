<?php
$nama = "Rizky Febriansyah";
$absen = 33;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $nama; ?>!</h1>
        <p>Absen: <?php echo $absen; ?></p>
        <a href="profile.php" class="button">View Profile</a>
    </div>
</body>
</html>
