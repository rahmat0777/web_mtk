
<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>hasil absensi</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <h3 class="delapan1">REKAP ABSENSI</h3>
    </header>

    
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">NIP</th>
      <th scope="col">BIDANG</th>
      <th scope="col">HARI</th>
      <th scope="col">JAM DATANG</th>
      <th scope="col">JAM DATANG</th>
    </tr>
  </thead>
<tbody>

        <?php
        $sql = "SELECT * FROM absensi";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while($absen = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$absen['nama']."</td>";
            echo "<td>".$absen['nip']."</td>";
            echo "<td>".$absen['bidang']."</td>";
            echo "<td>".$absen['hari']."</td>";
            echo "<td>".$absen['jam_datang']."</td>";
            echo "<td>".$absen['jam_pulang']."</td>";
            echo "</tr>";
            $no++;
        }
        ?>
       
    </tbody>
   </table>
   <a href="logout.php" > <button  class="lima" >kembali</button> </a> <br>
   </tbody>
</html>

   