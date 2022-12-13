<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk= $_POST['jabatan'];
    
    $sql = "UPDATE data_pegawai SET nama='$nama', alamat='$alamat', jabatan='$jk'  WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: data_pegawai1.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}

?>