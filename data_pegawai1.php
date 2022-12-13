<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<title>pegawai baru</title>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand" href="form_login.php">login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">absensi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rekap.php">rekap  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form_pegawai.php">form pegawai</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="dat_pegawai.php">data pegawai</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <header>
        <h3 class="tabel">DATA PEGAWAI</h3>
    </header>

    <nav>
        <a href="form_pegawai.php">[+] Tambah Baru</a>
    </nav>

    <br>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">JABATAN</th>
    </tr>
  </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_pegawai";
        $query = mysqli_query($db,$sql);
        $no = 1;

        while($pegawai = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$no."</td>";
            echo "<td>".$pegawai['nama']."</td>";
            echo "<td>".$pegawai['alamat']."</td>";
            echo "<td>".$pegawai['jabatan']."</td>";
           
            echo "<td>";
            echo "<a href='edit_pegawai.php?id=".$pegawai['id']."'>Edit</a> | ";
            echo "<a href='hapus_pegawai.php?id=".$pegawai['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $no++;
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </tbody>
</html>