
<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>selesai</title>
</head>
<body>
    
<div class="tujuh">
        
            <?php echo "<h1>absensi berhasil selamat bekerja dan terimakasih , " . $_SESSION['username'] ."". "</h1>"; ?>
    <a href="rekap.php" > <button  class="lima" >lihat absen</button> </a> <br><br>
    <a href="logout.php" > <button  class="lima" >kembali</button> </a> <br>
</div>