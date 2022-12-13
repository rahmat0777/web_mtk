<?php

include("config.php");
if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jabatan'];
    
    $sql = "INSERT INTO data_pegawai (nama, alamat,jabatan) VALUE ('$nama', '$alamat', '$jk')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: data_pegawai1.php?status=sukses');
    } else {
        header('Location: data_pegawai1.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>