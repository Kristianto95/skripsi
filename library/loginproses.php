<?php
//session_start();
include "../application/model/config.php";
session_start();
if(isset($_POST['login_btn'])){				
  	
  $username	  = $_POST['username'];
  $password   = $_POST['password'];
  $stmt=$db->prepare("SELECT * FROM pemohon WHERE username='$username' && password='$password'");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':password', $password);
  $stmt->execute();
    if($username=="") {
      ?>
			<script type="text/javascript">
				alert("Username Tidak Boleh Kosong")
				window.history.back();
			</script>
		<?php
   }
   else if($password=="") {
      ?>
			<script type="text/javascript">
				alert("Password salah")
				window.history.back();
			</script>
		<?php 
   }
	else if($stmt->rowCount() == 0)
	{
		?>
			<script type="text/javascript">
				alert("Username atau Password salah")
				window.history.back();
			</script>
		<?php
		//$error = "Username or Password is invalid";
	}
	else
	{
	if ($stmt->rowCount() > 0) {
			# code...
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION['username'] = $row['username'];
			echo"<script>alert('Selamat Datang, kini anda dapat mengajukan permohonan yang anda perlukan');</script>";
			echo "<script>window.location='../application/?module=home';</script>";
		}else{
			echo"<script>window.history.back();</script>";
		}
	}
}
?>