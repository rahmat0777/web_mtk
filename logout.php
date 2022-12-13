
<?php
session_start();
$_SESSION["username"]="";
header ("location:form_login.php");
exit;
?>