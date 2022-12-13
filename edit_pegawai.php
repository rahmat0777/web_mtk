<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: data_pegawai1.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_pegawai WHERE id=$id";
$query = mysqli_query($db, $sql);
$pegawai = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>edit</title>
</head>

<body>
    <header>
        <h3>Edit pegawai</h3>
    </header>

    <form action="update_pegawai.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $pegawai['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $pegawai['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">alamat </label>
            <textarea name="alamat"><?php echo $pegawai['alamat'] ?></textarea>
        </p>
        
        <p>
            <label for="jabatan">jabatan </label>
            <?php $jabatan = $pegawai['jabatan']; ?>
            <select name="jabatan">
                <option <?php echo ($jabatan == 1) ? "selected": "" ?>>ketua</option>
                <option <?php echo ($jabatan == 2) ? "selected": "" ?>>sekertaris</option>
                <option <?php echo ($jabatan == 3) ? "selected": "" ?>>bendahara</option>
                <option <?php echo ($jabatan == 4) ? "selected": "" ?>>kepala divisi</option>
                <option <?php echo ($jabatan == 5) ? "selected": "" ?>>wakil kepala divisi</option>
                <option <?php echo ($jabatan == 6) ? "selected": "" ?>>staf</option>
            </select>
        </p>
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>