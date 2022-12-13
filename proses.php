<?php

include("config.php");

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $nip = $_POST['nip'];  
    $bidang = $_POST['bidang'];
    $hari = $_POST['date'];
    $jam_datang = $_POST['time1'];
    $jam_pulang = $_POST['time2'];

    $sql = "INSERT INTO absensi (nama, nip, bidang, hari, jam_datang, jam_pulang) VALUE ('$nama', '$nip', '$bidang', '$hari', '$jam_datang', '$jam_pulang')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: selesai.php?status=sukses');
    } else {
    
        header('Location: selesai.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>