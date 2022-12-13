<!DOCTYPE html>
<html>
<head>
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <h3 class="form">INPUT DATA PEGAWAI</h3>
    </header>

    <form action="proses_pegawai.php" method="POST">

        <fieldset class="form">

        <p>
            <label for="nama">NAMA</label>
            <input type="text" name="nama" class="form2"/>
        </p>
        <p>
            <label for="alamat">ALAMAT</label>
            <input type="text" name="alamat" class="form2"/>
        </p>
        <p>
            <label for="jabatan" >JABATAN</label>
            <select name="jabatan"  class="form2">
            <option value="ketua"  class="form2">ketua</option>
            <option value="sekertaris"  class="form2">sekertaris</option>
            <option value="bendahara"  class="form2">bendahara</option>
            <option value="kepala bidang" >kepala bidang</option>
            </select>
           
        </p>
        
        <p>
            <input type="submit" value="input" name="daftar" class="form1"/>
        </p>

        </fieldset>

    </form>
 

    </body>
</html>