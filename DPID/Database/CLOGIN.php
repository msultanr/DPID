<?php

include '../database/connection.php';

session_start();

if (isset($_POST['login'])) {
	// username
	$user = $_POST['username'];
	// password
	$pass = $_POST['password'];
	// $hashpass = md5($pass);
	// sql query
	$sql = mysqli_query($koneksi, "SELECT PASSWORD, ID, ID_VENDOR FROM MST_USER_VENDOR WHERE flag_active = 'Y' and (username ='$user' or email = '$user')");
	$cek2 = mysqli_num_rows($sql);
	$cek3 = mysqli_fetch_assoc($sql);
	
	if ($cek2 > 0)
	{
		if ($pass == $cek3['PASSWORD'])
		{
		$_SESSION['is_login'] = true;
		$_SESSION['username'] = $user;
		$_SESSION['id_user'] = $cek3['ID'];
		$_SESSION['type_user'] = "Vendor";
		$_SESSION['id_vendor'] = $cek3['ID_VENDOR'];
		
		echo "<script>document.location.href='../index.php';</script>";
		}
		else{
			echo "<script> alert('username atau password salah!')</script>";
			echo "<script>document.location.href='../login.php';</script>";	
		}
	}
	else if ($cek2 < 1)
	{
		$sql = mysqli_query($koneksi, "SELECT PASSWORD, ID FROM MST_USER_DPID WHERE FLAG_ACTIVE = 'Y' and (username = '$user' or email = '$user')");
		$cek4 = mysqli_num_rows($sql);
		$cek5 = mysqli_fetch_assoc($sql);
		if ($cek4 > 0)
		{
			if ($pass == $cek5['PASSWORD'])
			{
			$_SESSION['is_login'] = true;
			$_SESSION['username'] = $user;
			$_SESSION['id_user'] = $cek5['ID'];
			$_SESSION['type_user'] = "DPID"; 
			echo "<script>document.location.href='../index.php';</script>";
			}
			else{
				echo "<script> alert('username atau password salah!!')</script>";
				echo "<script>document.location.href='../login.php';</script>";	
			}
		}
	}
}
else {
	echo "<script> alert('ERROR!);</script>";
}



?>