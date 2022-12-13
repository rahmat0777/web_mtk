<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Selamat Datang Di Halaman Admin</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="form_login.php">LOGIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">ABSENSI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rekap.php">REKAP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form_pegawai.php">FORM PEGAWAI</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="data_pegawai1.php">DATA PEGAWAI</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="empat">
        
            <?php echo "<h1> terimakasih silahkan isi absensi , " . $_SESSION['username'] ."". "</h1>"; ?>
    
</div>
<header>
        <h3 class="delapan">ABSENSI PEGAWAI</h3>
    </header>

    <form action="proses.php" method="POST">

        <fieldset>
            <table class="latar">

        <tr>
            <td>
            <label for="nama" class="absen2">NAMA : </label>
            <input type="text" name="nama"  class="absen21"/>
            </td>
        </tr>
        <tr>
            <td>
            <label for="nip" class="absen3">ID PEGAWAI : </label>
            <input type="text" name="nip"  class="absen31"/>
            </td>
        </tr> 
        <tr>
            <td>
            <label for="bidang" class="absen4">BIDANG: </label>
            <select name="bidang" class="absen41">
                <option >Programer</option>
                <option >Keuangan</option>
                <option >Marketing</option>
                <option >Kebersihan</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>
             <label for="hari" class="absen1">TANGGAL: </label>
             <input type="date" name="date"  class="absen11"/><br>
            </td>
        </tr>
        <tr>
            <td>
            <label  for="jam_datang" class="absen5"> JAM DATANG  :  </label>
            <input type="time" name="time1" class="absen51"><br>
            </td>
        </tr>
        <tr>
             <td>
            <label for="jam_pulang"  class="absen6">JAM PULANG :   </label>
            <input type="time" name="time2" class="absen61"><br>
            </td>
        </tr>
        <tr>
             <td>
            <button class="absen71" type="submit" value="submit" name="submit" >SUBMIT</button>
            </td>
        </tr>

            </table>
        </fieldset>
    </form>
</header>
</div>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "absensi berhasil!";
            } else {
                echo "absensi gagal!";
            }
        ?>
    </p>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
