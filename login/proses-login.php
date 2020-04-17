<?php  
//session_start();
include '../koneksi.php';
// session_start();

				
				// if(isset($_POST['login'])){
				// 	include("koneksi.php");
					
				// 	$username	= $_POST['username'];
				// 	$password	= $_POST['password'];
				// 	$level		= $_POST['level'];
					
				// 	$query = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password'");
				// 	if(mysqli_num_rows($query) == 0){
				// 		echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
				// 	}else{
				// 		$row = mysqli_fetch_assoc($query);
						
				// 		if($row['level'] == 1 && $level == 1){
				// 			$_SESSION['username']=$username;
				// 			$_SESSION['level']='admin';
				// 			header("Location: user.php");
				// 		}else if($row['level'] == 2 && $level == 2){
				// 			$_SESSION['username']=$username;
				// 			$_SESSION['level']='dosen';
				// 			header("Location: user.php");
				// 		}else if($row['level'] == 3 && $level == 3){
				// 			$_SESSION['username']=$username;
				// 			$_SESSION['level']='mahasiswa';
				// 			header("Location: user.php");
				// 		}else{
				// 			echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
				// 		}
				// 	}
				// }
				
if(isset($_POST['btnlogin'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT id_petugas, nama_petugas FROM petugas WHERE username='$username' AND password='$password'";
	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);
	if($count == 1){
		$data_login = mysqli_fetch_assoc($res);

		$_SESSION['id_petugas'] = $data_login['id_petugas'];
		// nilainya digunakan waktu insert peminjaman
		$_SESSION['nama_petugas'] = $data_login['nama_petugas'];
		// nilainya bisa digunakan di navbar, mis.'Hai,[nama_petugas]'
		header("Location:http://localhost/siperpus/index.php");
		exit;
	}else{
		header("Location:http://localhost/siperpus/login/index.php");
		exit;
	}

 }
?>