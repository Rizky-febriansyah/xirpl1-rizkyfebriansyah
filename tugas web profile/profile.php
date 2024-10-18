<?php
$nama = "Rizky Febriansyah";
$absen = 33;
$Umur = "17";
$Tinggi = "170";
$Sekolah = "SMK Negeri 2 Bandung";
$Cita_cita = "Masuk Surga";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="profile-container">
        <h1>Profile of <?php echo $nama; ?></h1>
        <p><strong>Umur</strong> <?php echo $Umur;  ?></p>
        <p><strong>Tinggi:</strong> <?php echo $Tinggi; ?></p>
        <p><strong>Sekolah:</strong> <?php echo $Sekolah; ?></p>
        <p><strong>Cita-cita:</strong> <?php echo $Cita_cita;  ?></p>
        <p><strong>Absen:</strong> <?php echo $absen; ?></p>
        <a href="index.php" class="button">Back to Home</a>
    </div>
</body>
</html>
