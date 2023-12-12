<?php
session_start();
if ($_SESSION['is_login'] == true) {
    unset($_SESSION['is_login']);
    unset($_SESSION['username']);
    unset($_SESSION['type_user']);
	session_destroy();
    echo "<script>document.location.href='../login.php';</script>";
}
else{
    echo "<script>document.location.href='../index.php';</script>";
}

?>