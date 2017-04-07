<?php 
include '../model/model_admin.php';
/////////////////////////////////////////Ijin Gangguan\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
$aksi = $_GET['aksi'];
if($aksi == "tambah_ho")
{
	try{		
		$db->tambah_ho(
			$_POST['id_ho'], 	 
			$_POST['noktp'], 		
			$_POST['perihal'],
			$_POST['daftar_ke'],
			$_POST['namausaha'], 
			$_POST['jenisusaha'], 
			$_POST['alamatusaha'], 
			$_POST['luas'], 
			$_POST['modal'],  
			$_POST['karyawan'],
			$target = $_FILES['syarat']['name'],
			$_POST['proses'], 
			$_POST['no_ho'],  
			$_POST['terbit'],
			$_POST['paraf']);
	
	  }catch(Exception $eror){
	echo 'Koneksi Gagal Terjadi Kesalahan : '.$eror;
} 
	
}
else if($aksi == "update_ho")
{
	$db->update_ho(
  @$_POST['id_ho'],
  @$_POST['noktp'],
  @$_POST['registrasi'],
  @$_POST['perihal'],
  @$_POST['daftar_ke'],
  @$_POST['namausaha'],
  @$_POST['jenisusaha'],
  @$_POST['alamatusaha'],
  @$_POST['luas'],
  @$_POST['modal'],
  @$_POST['karyawan'],
  @$_POST['proses'],
  @$_POST['terbit'],
  @$_POST['paraf']);
	header('location:../../admin/media.php?module=izin-gangguan&id=1');
}
else if($aksi == "hapus_ho")
{
	$db->hapus_ho(@$_GET['registrasi']);
	header("Location:../../admin/media.php?module=izin-gangguan&id=1");
}

///////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////Dispensasi///////////////////////////////////////////////////////////
else if($aksi == "tambah_dispensasi")
{
	try{		
		$db->tambah_dispensasi(
			 $_POST['id_dispensasi'],
			 $_POST['noktp'],
			 $_POST['kades'],
			 $_POST['tgldes'],
			 $_POST['nodes'],
			 $_POST['namawanita'],
			 $_POST['tempatwanita'],
			 $_POST['tanggalwanita'],
			 $_POST['usiawanita'],
			 $_POST['pekerjaanwanita'],
			 $_POST['statuswanita'],
			 $_POST['alamatwanita'],
			 $_POST['namapria'],
			 $_POST['tempatpria'],
			 $_POST['tanggalpria'],
			 $_POST['usiapria'],
			 $_POST['pekerjaanpria'],
			 $_POST['statuspria'],
			 $_POST['alamatpria'],
			 $_POST['tanggalakad'],
			 $_POST['tempatakad'],
			 $_POST['alasan'],
			$target = $_FILES['syarat']['name'],
			$_POST['proses'],
			$_POST['paraf'],  
			$_POST['no_dispensasi'],  
			$_POST['terbit']);

	
	  }catch(Exception $eror){
	echo 'Koneksi Gagal Terjadi Kesalahan : '.$eror;
  }
} 
else if($aksi == "update_dispensasi")
{
	try{
	$db->update_dispensasi(
			@$_POST['id_dispensasi'],
			@$_POST['noktp'],
			@$_POST['registrasi'],
			@$_POST['kades'],
			@$_POST['tgldes'],
			@$_POST['nodes'],
			@$_POST['namawanita'],
			@$_POST['tempatwanita'],
			@$_POST['tanggalwanita'],
			@$_POST['usiawanita'],
			@$_POST['pekerjaanwanita'],
			@$_POST['statuswanita'],
			@$_POST['alamatwanita'],
			@$_POST['namapria'],
			@$_POST['tempatpria'],
			@$_POST['tanggalpria'],
			@$_POST['usiapria'],
			@$_POST['pekerjaanpria'],
			@$_POST['statuspria'],
			@$_POST['alamatpria'],
			@$_POST['tanggalakad'],
			@$_POST['tempatakad'],
			@$_POST['alasan'],
			@$_POST['proses'],
			@$_POST['paraf'],
			@$_POST['no_dispensasi'],
			@$_POST['terbit']);
	header('location:../../admin/media.php?module=dispensasi&id=1');
	}catch(Exception $eror){}
}
else if($aksi == "hapus_dispensasi")
{
	$db->hapus_dispensasi(@$_GET['registrasi']);
	header("Location: ../../admin/media.php?module=dispensasi&id=1");
}


///////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////Domisili///////////////////////////////////////////////////////////
else if ($aksi == "tambah_domisili") {
	try{
		$db->tambah_domisili(
		  $_POST['id_domisili'],
		  $_POST['noktp'],
		  $target = $_FILES['syarat']['name'],
		  $_POST['proses'],
		  $_POST['paraf'],  
		  $_POST['no_domisili'],  
		  $_POST['terbit']);
	}catch(Exception $error){
		echo "Terjadi Kesaslahan".$error;
	}
}
else if($aksi == "update_domisili")
{
	try{
	$db->update_domisili(
		@$_POST['id_domisili'],
		@$_POST['noktp'],
		@$_POST['registrasi'],
		@$_POST['proses'],
		@$_POST['no_domisili'],
		@$_POST['terbit'],
		@$_POST['paraf']);
	header('location:../../admin/media.php?module=domisili&id=1');
	}catch(Exception $eror){}
}
else if($aksi == "hapus_domisili")
{
	$db->hapus_domisili(@$_GET['registrasi']);
	header("Location: ../../admin/media.php?module=domisili&id=1");
}


///////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////IMB///////////////////////////////////////////////////
else if($aksi== "tambah_imb")
{
	try
	{
		$db->tambah_imb(
			  $_POST['id_imb'],
			  $_POST['noktp'],
			  $_POST['maksud'],
			  $_POST['daftar_ke'],
			  $_POST['penggunaan'],
			  $_POST['lokasi'],
			  $_POST['luastanah'],
			  $_POST['luasbangunan'],
			  $_POST['status'],
			  $target = $_FILES['syarat']['name'],
			  $_POST['proses'],
			  $_POST['paraf'],  
			  $_POST['terbit']);
	}catch(Exception $eror){
		echo "Koneksi Gagal:".$error;
	}
}

else if($aksi == "hapus_imb")
{
	$db->hapus_imb(@$_GET['registrasi']);
	header("Location: ../../admin/media.php?module=izin-mendirikan-bangunan&id=1");
}
else if($aksi == "update_imb")
{
	try{
		$db->update_imb(
		   @$_POST['id_imb'],
		   @$_POST['noktp'],
		   @$_POST['registrasi'],
		   @$_POST['maksud'],
		   @$_POST['penggunaan'],
		   @$_POST['lokasi'],
		   @$_POST['luastanah'],
		   @$_POST['luasbangunan'],
		   @$_POST['status'], 
		   @$_POST['proses'],
		   @$_POST['terbit'],
		   @$_POST['paraf']);  
			header('location:../../admin/media.php?module=izin-mendirikan-bangunan&id=1');
		}catch(Exception $eror){}
}

///////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////SIUP///////////////////////////////////////////////////////////
elseif ($aksi == "tambah_siup") {
	try{
		$db->tambah_siup(
			  $_POST['id_siup'],
			  $_POST['noktp'],
			  $_POST['daftar_ke'],
			  $_POST['namaperusahaan'],
			  $_POST['jenis'],
			  $_POST['alamatperusahaan'],
			  $_POST['jabatan'],
			  $_POST['notelp'],
			  $_POST['nofax'],
			  $_POST['modal'],
			  $_POST['carapemasaran'],
			  $_POST['kbli'],
			  $_POST['barjas'],
			  $_POST['masber'],
			  $target = $_FILES['syarat']['name'],
			  $_POST['proses'], 
			  $_POST['terbit'],
			  $_POST['paraf']);
  	}catch(Exception $error){
  		echo "Terjadi Kesalahan";
  	}
}

else if($aksi == "update_siup")
{
	try{
	$db->update_siup(
 			  @$_POST['id_siup'],
			  @$_POST['noktp'],
 			  @$_POST['registrasi'],
			  @$_POST['namaperusahaan'],
			  @$_POST['jenis'],
			  @$_POST['alamatperusahaan'],
			  @$_POST['jabatan'],
			  @$_POST['notelp'],
			  @$_POST['nofax'],
			  @$_POST['modal'],
			  @$_POST['carapemasaran'],
			  @$_POST['kbli'],
			  @$_POST['barjas'],
			  @$_POST['masber'],
			  @$_POST['proses'],
			  @$_POST['no_siup'],  
			  @$_POST['terbit'],
			  @$_POST['paraf']);
	header('location:../../admin/media.php?module=surat-izin-usaha-perdagangan&id=1');
	}catch(Exception $eror){}
}
else if($aksi == "hapus_siup")
{
	$db->hapus_siup(@$_GET['registrasi']);
	header("Location: ../../admin/media.php?module=siup&id=1");
}


///////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////TDP///////////////////////////////////////////////////////////
else if($aksi == "tambah_tdi")
{
	try{		
		$db->tambah_tdi(
		  $_POST['id_tdi'],
		  $_POST['noktp'],
			  $_POST['daftar_ke'],
		  $_POST['namaperusahaan'],
		  $_POST['alamatperusahaan'],
		  $_POST['notelp'],
		  $_POST['nofax'],
		  $_POST['npwp'],
		  $_POST['nipik'],
		  $_POST['lokasi'],
		  $_POST['desa'],
		  $_POST['kecamatan'],
		  $_POST['kabupaten'],
		  $_POST['provinsi'],
		  $_POST['kepemilikan'],
		  $_POST['luasbangunan'],
		  $_POST['luastanah'],
		  $_POST['mesinutama'],
		  $_POST['mesinpembantu'],
		  $_POST['tenaga'],
		  $_POST['kbli'],
		  $_POST['komoditi'],
		  $_POST['kapasitas'],
		  $_POST['kebutuhan'],
		  $_POST['jumlah'],
		  $_POST['laki'],
		  $_POST['wanita'],
		  $_POST['nilai'],
		  $_POST['merk'],
		  $_POST['nomerk'],
		  $target = $_FILES['syarat']['name'],
		  $_POST['proses'],
		  $_POST['paraf'],  
		  $_POST['no_tdi'],  
		  $_POST['terbit']); 
	  }catch(Exception $eror){
	echo 'Koneksi Gagal Terjadi Kesalahan : '.$eror;
  }
} 
else if($aksi == "update_tdi")
{
	try{
	$db->update_tdi(
	 	@$_POST['id_tdi'],
	  	@$_POST['noktp'],
		@$_POST['registrasi'],
	  	@$_POST['namaperusahaan'],
	  	@$_POST['alamatperusahaan'],
	  	@$_POST['notelp'],
	  	@$_POST['nofax'],
	  	@$_POST['npwp'],
		@$_POST['nipik'],
		@$_POST['lokasi'],
		@$_POST['desa'],
		@$_POST['kecamatan'],
		@$_POST['kabupaten'],
		@$_POST['provinsi'],
		@$_POST['kepemilikan'],
		@$_POST['luasbangunan'],
		@$_POST['luastanah'],
		@$_POST['mesinutama'],
		@$_POST['mesinpembantu'],
		@$_POST['tenaga'],
		@$_POST['kbli'],
		@$_POST['komoditi'],
		@$_POST['kapasitas'],
		@$_POST['kebutuhan'],
		@$_POST['jumlah'],
		@$_POST['laki'],
		@$_POST['wanita'],
		@$_POST['nilai'],
		@$_POST['merk'],
		@$_POST['nomerk'],
		@$_POST['proses'],
		@$_POST['no_tdi'],
		@$_POST['terbit'],
	  	@$_POST['paraf']);
	}catch(Exception $eror){}
}

else if($aksi == "hapus_tdi")
{
	$db->hapus_tdi(@$_GET['registrasi']);
	header("Location: ../../admin/media.php?module=tanda-daftar-industri&id=1");
}

///////////////////////////////////////////////////////////////////////////////////////
else if($aksi == "tambah_iumk")
{
 try{
	$db->tambah_iumk(
		  $_POST['id_iumk'],
		  $_POST['noktp'],
		  $_POST['daftar_ke'],
		  $_POST['namausaha'],
		  $_POST['jenisusaha'],
		  $_POST['bentukusaha'],
		  $_POST['saranausaha'],
		  $_POST['alamatusaha'],
		  $_POST['notelp'],
		  $_POST['modal'],
		  $target = $_FILES['syarat']['name'],
		  $_POST['proses'],
		  $_POST['paraf'],  
		  $_POST['no_iumk'],  
		  $_POST['terbit']);
 }catch(Exception $error){
	echo "Terjadi Kesalahan".$error;
  }
}

else if($aksi == "hapus_iumk")
{
	$db->hapus_iumk(@$_GET['registrasi']);
	header("Location: ../../admin/media.php?module=izin-usaha-mikro-dan-kecil&id=1");
}
else if($aksi == "update_iumk")
{
	try{
		$db->update_iumk(
		 @$_POST['id_iumk'],
		 @$_POST['noktp'],
		 @$_POST['registrasi'],
		 @$_POST['namausaha'],
		 @$_POST['jenisusaha'],
		 @$_POST['bentukusaha'],
		 @$_POST['saranausaha'],
		 @$_POST['alamatusaha'],
		 @$_POST['notelp'],
		 @$_POST['modal'],
		 @$_POST['proses'],
		 @$_POST['paraf'],
		 @$_POST['no_iumk'],
		 @$_POST['terbit']);  
		}catch(Exception $eror){}
}

////////////////////////////////////////////////////////////////////////////////////////
else if($aksi== "tambah_admin")
{
	try
	{
		$db->tambah_admin(
			  $_POST['nik'],
			  $_POST['noktp'],
			  $_POST['nama'],
			  $_POST['alamat'],
			  $_POST['nohp'],
			  $_POST['username'],
			  $_POST['password'],
			  $_POST['akses']);
	}catch(Exception $eror){
		echo "Koneksi Gagal:".$error;
	}
}

elseif ($aksi == "hapus_admin") 
{
	$db->hapus_admin(@$_GET['nik']);
	header("Location: ../../admin/media.php?module=data-admin&id=1");
}

else if($aksi == "update_admin")
{
	try{
		$db->update_admin(
			  $_POST['nik'],
			  $_POST['noktp'],
			  $_POST['nama'],
			  $_POST['alamat'],
			  $_POST['nohp'],
			  $_POST['username'],
			  $_POST['password'],
			  $_POST['akses']);
			header('location:../../admin/media.php?module=data-admin&id=1');
		}catch(Exception $eror){}
}

////////////////////////////////////////DASAR HUKUm///////////////////////////////////////////////////
else if($aksi== "tambah_hukum")
{
	try
	{
		$db->tambah_hukum(
			  $_POST['id'],
			  $_POST['isi'],
			  $_POST['kategori']);
	}catch(Exception $eror){
		echo "Koneksi Gagal:".$error;
	}
}

else if($aksi == "hapus_hukum")
{
	$db->hapus_hukum(@$_GET['id']);
	header("Location: ../../admin/media.php?module=dasar-hukum&id=1");
}
else if($aksi == "update_hukum")
{
	try{
		$db->update_hukum(
		   @$_POST['id'],
		   @$_POST['isi'],
		   @$_POST['kategori']);  
			header('location:../../admin/media.php?module=dasar-hukum&id=1');
			
		}catch(Exception $eror){}
}

///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////DASAR HUKUm///////////////////////////////////////////////////
else if($aksi== "tambah_faq")
{
	try
	{
		$db->tambah_faq(
			  $_POST['id'],
			  $_POST['pertanyaan'],
			  $_POST['jawaban'],
			  $_POST['kategori']);
	}catch(Exception $eror){
		echo "Koneksi Gagal:".$error;
	}
}

else if($aksi == "hapus_faq")
{
	$db->hapus_faq(@$_GET['id']);
	header("Location: ../../admin/media.php?module=faq&id=1");
}
else if($aksi == "update_faq")
{
	try{
		$db->update_faq(
		   @$_POST['id'],
		   @$_POST['pertanyaan'],
		   @$_POST['jawaban'],
		   @$_POST['kategori']);  
			header('location:../../admin/media.php?module=faq&id=1');
		}catch(Exception $eror){}
}

///////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////PERSYARATAN///////////////////////////////////////////////////
else if($aksi== "tambah_persyaratan")
{
	try
	{
		$db->tambah_persyaratan(
			  $_POST['id'],
			  $_POST['isi'],
			  $_POST['kategori']);
	}catch(Exception $eror){
		echo "Koneksi Gagal:".$error;
	}
}

else if($aksi == "hapus_persyaratan")
{
	$db->hapus_persyaratan(@$_GET['id']);
	header("Location: ../../admin/media.php?module=persyaratan&id=1");
}
else if($aksi == "update_persyaratan")
{
	try{
		$db->update_persyaratan(
		   @$_POST['id'],
		   @$_POST['isi'],
		   @$_POST['kategori']);  
			header('location:../../admin/media.php?module=persyaratan&id=1');
			
		}catch(Exception $eror){}
}
////////////////////////////////////////PENANDA TANGAN///////////////////////////////////////////////////
else if($aksi== "tambah_penanda")
{
	try
	{
		$db->tambah_penanda(
			  $_POST['id'],
			  $_POST['nip'],
			  $_POST['nama'],
			  $_POST['jabatan'],
			  $target = $_FILES['tanda_tangan']['name']
			  );
	}catch(Exception $eror){
		echo "Koneksi Gagal:".$error;
	}
}

else if($aksi == "hapus_penanda")
{
	$db->hapus_penanda(@$_GET['id']);
	header("Location: ../../admin/media.php?module=penanda-tangan&id=1");
}
else if($aksi == "update_penanda")
{
	try{
		$db->update_penanda(
		   @$_POST['id'],
		   @$_POST['nip'],
		   @$_POST['nama'],
		   @$_POST['jabatan'],
		   $target = $_FILES['tanda_tangan']['name']);  
			header('location:../../admin/media.php?module=penanda-tangan&id=1');
			
		}catch(Exception $eror){}
}

////////////////////////////////////////Regulasi///////////////////////////////////////////////////
else if($aksi== "tambah_regulasi")
{
	try
	{
		$db->tambah_regulasi(
			  $_POST['id_regulasi'],
			  $_POST['judul'],
			  $_POST['kategori'],
			  $_POST['deskripsi'],
			  $target = $_FILES['file']['name']
			  );
	}catch(Exception $eror){
		echo "Koneksi Gagal:".$error;
	}
}

else if($aksi == "hapus_regulasi")
{
	$db->hapus_regulasi(@$_GET['id_regulasi']);
	header("Location: ../../admin/media.php?module=regulasi&id=1");
}
else if($aksi == "update_regulasi")
{
	try{
		$db->update_regulasi(
		   @$_POST['id_regulasi'],
		   @$_POST['judul'],
		   @$_POST['kategori'],
		   @$_POST['deskripsi'],
		   $target = $_FILES['file']['name']);  
			header('location:../../admin/media.php?module=regulasi&id=1');
			
		}catch(Exception $eror){}
}

else if($aksi == "tambah_pemohon")
{
 try{
	$db->tambah_pemohon(
		  $_POST['noktp'],
		  $_POST['nama'],
		  $_POST['alamat'],
		  $_POST['tmp_lahir'],
		  $_POST['tgl_lahir'],
		  $_POST['npwp'],
		  $_POST['nohp'],
		  $_POST['username'],
		  $_POST['password']);
 }catch(Exception $error){
	echo "Terjadi Kesalahan".$error;
  }
}

else if($aksi == "hapus_pemohon")
{
	$db->hapus_pemohon(@$_GET['noktp']);
	header("Location: ../../admin/media.php?module=data-pemohon&id=1");
}

else if($aksi == "update_pemohon")
{
 try{
	$db->update_pemohon(
		  $_POST['noktp'],
		  $_POST['nama'],
		  $_POST['alamat'],
		  $_POST['tmp_lahir'],
		  $_POST['tgl_lahir'],
		  $_POST['npwp'],
		  $_POST['nohp'],
		  $_POST['username'],
		  $_POST['password']);
			header('location:../../admin/media.php?module=data-pemohon&id=1');
 }catch(Exception $error){
	echo "Terjadi Kesalahan".$error;
  }
}
 ?>