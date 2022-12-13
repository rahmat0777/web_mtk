<?php include("config.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">

    <title>login</title>
</head>
<body>

    <form method="post" class="satu">
        <label >username : </label>
        <input type="text" name="username" class="dua"><br>
        <label>password : </label>
        <input type="password" name="password" class="dua"><br>
        <button class="tiga" type="submit" value="masuk" name="masuk" >login</button>
    </form>
    <?php 
    if (isset($_POST["masuk"])){
        $username = $_POST ["username"];
        $password = $_POST ["password"];
        $query = mysqli_query($db, "SELECT * FROM form_login_1 WHERE user_name = '$username' AND password = md5('$password')"); 
        $cek = mysqli_num_rows($query);
        if($cek==1){
            $_SESSION["username"]=$username;
            header("location:admin.php");
            exit;
        }
        else {
            echo "MAAF USER NAME DAN PASSWORD ANDA SALAH ";
        }
    }
    
    ?>
</body>
</html>