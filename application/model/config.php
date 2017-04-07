<?php
try{
	$db = new PDO('mysql:host=localhost;dbname=dbpaten',"root");
	//echo 'Koneksi Berhasil';
}catch(Exception $eror){
	echo 'Koneksi Gagal Terjadi Kesalahan : '.$eror;
} 
?>
