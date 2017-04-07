<?php 
include '../model/model_pemohon.php';
/////////////////////////////////////////Ijin Gangguan\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
$aksi = $_GET['aksi'];
if($aksi == "tambah_ho")
{
	try{		
		$db->tambah_ho(
			$_POST['id_ho'], 			
			$_POST['perihal'], 		
			$_POST['daftar_ke'], 
			$_POST['namausaha'], 
			$_POST['jenisusaha'], 
			$_POST['alamatusaha'], 
			$_POST['luas'], 
			$_POST['modal'],  
			$_POST['karyawan'], 
			$_POST['modal']);
	
	  }catch(Exception $eror){
	echo 'Koneksi Gagal Terjadi Kesalahan : '.$eror;
} 
	
}

///////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////Dispensasi///////////////////////////////////////////////////////////
else if($aksi == "tambah_dispensasi")
{
	try{		
		$db->tambah_dispensasi(
			 $_POST['id_dispensasi'],
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
			 $_POST['alasan']);

	
	  }catch(Exception $eror){
	echo 'Koneksi Gagal Terjadi Kesalahan : '.$eror;
  }
} 

///////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////Domisili///////////////////////////////////////////////////////////
else if ($aksi == "tambah_domisili") {
	try{
		$db->tambah_domisili(
		  $_POST['id_domisili'],
		  $_POST['nama'],
		  $_POST['tempat'],
		  $_POST['tanggal'],
		  $_POST['jekel'],
		  $_POST['alamat'],
		  $_POST['rt'],
		  $_POST['rw'],
		  $_POST['desa'],
		  $_POST['kecamatan'],
		  $_POST['kabupaten'],
		  $_POST['provinsi'],
		  $_POST['agama'],
		  $_POST['pekerjaan'],
		  $_POST['status'],
		  $_POST['kewarganegaraan']);
	}catch(Exception $error){
		echo "Terjadi Kesaslahan".$error;
	}
}

///////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////IMB///////////////////////////////////////////////////
else if($aksi== "tambah_imb")
{
	try
	{
		$db->tambah_imb(
			  $_POST['id_imb'],
			  $_POST['daftar_ke'],
			  $_POST['maksud'],
			  $_POST['penggunaan'],
			  $_POST['lokasi'],
			  $_POST['luastanah'],
			  $_POST['luasbangunan'],
			  $_POST['status']);
	}catch(Exception $eror){
		echo "Koneksi Gagal:".$error;
	}
}


///////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////SIUP///////////////////////////////////////////////////////////
elseif ($aksi == "tambah_siup") {
	try{
		$db->tambah_siup(
			  $_POST['id_siup'],
			  $_POST['pengajuan'],
			  $_POST['daftar_ke'],
			  $_POST['namaperusahaan'],
			  $_POST['jenis'],
			  $_POST['jabatan'],
			  $_POST['npwp'],
			  $_POST['alamatperusahaan'],
			  $_POST['provinsi'],
			  $_POST['kota'],
			  $_POST['kecamatan'],
			  $_POST['desa'],
			  $_POST['notelp'],
			  $_POST['nofax'],
			  $_POST['pos'],
			  $_POST['penanamanmodal'],
			  $_POST['nopendirian'],
			  $_POST['tglpendirian'],
			  $_POST['noperubahan'],
			  $_POST['tglperubahan'],
			  $_POST['modal'],
			  $_POST['saham'],
			  $_POST['sahamnasional'],
			  $_POST['sahamasing'],
			  $_POST['carapemasaran'],
			  $_POST['barjas'],
			  $_POST['modal']);
  	}catch(Exception $error){
  		echo "Terjadi Kesalahan";
  	}
}

///////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////TDP///////////////////////////////////////////////////////////
else if($aksi == "tambah_tdi")
{
	try{		
		$db->tambah_tdi(
		  $_POST['id_tdi'],
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
		  $_POST['nomerk']); 
	  }catch(Exception $eror){
	echo 'Koneksi Gagal Terjadi Kesalahan : '.$eror;
  }
} 

///////////////////////////////////////////////////////////////////////////////////////
else if($aksi == "tambah_iumk")
{
 try{
	$db->tambah_iumk(
		  $_POST['id_iumk'],
		  $_POST['daftar_ke'],
		  $_POST['namausaha'],
		  $_POST['jenisusaha'],
		  $_POST['bentukusaha'],
		  $_POST['saranausaha'],
		  $_POST['alamatusaha'],
		  $_POST['notelp'],
		  $_POST['modal'],
		  $_POST['npwp']);
 }catch(Exception $error){
	echo "Terjadi Kesalahan".$error;
  }
}

////////////////////////////////////////////////////////////////////////////////////////
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

else if($aksi == "tambah_tdp")
{
	try{
	$db->tambah_tdp(
		  $_POST['id_tdp'],
		  $_POST['daftar_ke'],
		  $_POST['namaperusahaan'],
		  $_POST['alamatperusahaan'],
		  $_POST['desa'],
		  $_POST['kecamatan'],
		  $_POST['kabupaten'],
		  $_POST['provinsi'],
		  $_POST['kodepos'],
		  $_POST['notelp'],
		  $_POST['nofax'],
		  $_POST['email'],
		  $_POST['namakelompok'],
		  $_POST['statusperusahaan'],
		  $_POST['induk'],
		  $_POST['tdp_no'],
		  $_POST['alper'],
		  $_POST['kelper'],
		  $_POST['kecper'],
		  $_POST['kabper'],
		  $_POST['provper'],
		  $_POST['lokasi'],
		  $_POST['desapab'],
		  $_POST['kecamatanpab'],
		  $_POST['kabupab'],
		  $_POST['provinsipab'],
		  $_POST['bank1'],
		  $_POST['bank2'],
		  $_POST['jumlahbank'],
		  $_POST['npwp'],
		  $_POST['bentukmodal'],
		  $_POST['tanggal_berdiri'],
		  $_POST['tanggal_kegiatan'],
		  $_POST['jangka'],
		  $_POST['kerjasama'],
		  $_POST['merk'],
		  $_POST['nomerk'],
		  $_POST['hakpaten'],
		  $_POST['nohakpaten'],
		  $_POST['nomor'],
		  $_POST['tglpengesahan'],
		  $_POST['namanotaris'],
		  $_POST['noubah'],
		  $_POST['tglubah'],
		  $_POST['namanotaris2'],
		  $_POST['nomenkuham'],
		  $_POST['tglmenkuham'],
		  $_POST['nomenkuhamatas'],
		  $_POST['nomenkuhamatas'],
		  $_POST['tglmenkuhamatas'],
		  $_POST['nolaporan'],
		  $_POST['tgllaporan'],
		  $_POST['nodireksi'],
		  $_POST['tgldireksi'],
		  $_POST['jenisijin1'],
		  $_POST['noijin1'],
		  $_POST['oleh1'],
		  $_POST['tglkeluar1'],
		  $_POST['masber1'],
		  $_POST['jenisijin2'],
		  $_POST['noijin2'],
		  $_POST['oleh2'],
		  $_POST['tglkeluar2'],
		  $_POST['masber2'],
		  $_POST['jenisijin3'],
		  $_POST['noijin3'],
		  $_POST['oleh3'],
		  $_POST['tglkeluar3'],
		  $_POST['masber3'],
		  $_POST['jenisijin4'],
		  $_POST['noijin4'],
		  $_POST['oleh4'],
		  $_POST['tglkeluar4'],
		  $_POST['masber4'],
		  $_POST['jenisijin5'],
		  $_POST['noijin5'],
		  $_POST['oleh5'],
		  $_POST['tglkeluar5'],
		  $_POST['masber5'],
		  $_POST['jenisijin6'],
		  $_POST['noijin6'],
		  $_POST['oleh6'],
		  $_POST['tglkeluar6'],
		  $_POST['masber6'],
		  $_POST['jenisijin7'],
		  $_POST['noijin7'],
		  $_POST['oleh7'],
		  $_POST['tglkeluar7'],
		  $_POST['masber7'],
		  $_POST['jenisijin8'],
		  $_POST['noijin8'],
		  $_POST['oleh8'],
		  $_POST['tglkeluar8'],
		  $_POST['masber8'],
		  $_POST['jenisijin9'],
		  $_POST['noijin9'],
		  $_POST['oleh9'],
		  $_POST['tglkeluar9'],
		  $_POST['masber9'],
		  $_POST['jenisijin10'],
		  $_POST['noijin10'],
		  $_POST['oleh10'],
		  $_POST['tglkeluar10'],
		  $_POST['masber10'],
		  $_POST['jumlahpimpinan'],
		  $_POST['dirut'],
		  $_POST['direktur'],
		  $_POST['komisaris'],
		  $_POST['kedudukan1'],
		  $_POST['namapejabat1'],
		  $_POST['tempatpejabat1'],
		  $_POST['tanggalpejabat1'],
		  $_POST['alamatpejabat1'],
		  $_POST['kodepospejabat1'],
		  $_POST['notelppejabat1'],
		  $_POST['kewarganegaraanpejabat1'],
		  $_POST['tanggalmenjabat1'],
		  $_POST['sahamdimiliki1'],
		  $_POST['modaldisetor1'],
		  $_POST['jabatanperusahaanlain1'],
		  $_POST['namaperusahaanlain1'],
		  $_POST['alamatperusahaanlain1'],
		  $_POST['kodeposperusahaanlain1'],
		  $_POST['notelpperusahaanlain1'],
		  $_POST['tanggalmenjabataperusahaanlain1'],
		  $_POST['kedudukan2'],
		  $_POST['namapejabat2'],
		  $_POST['tempatpejabat2'],
		  $_POST['tanggalpejabat2'],
		  $_POST['alamatpejabat2'],
		  $_POST['kodepospejabat2'],
		  $_POST['notelppejabat2'],
		  $_POST['kewarganegaraanpejabat2'],
		  $_POST['tanggalmenjabat2'],
		  $_POST['sahamdimiliki2'],
		  $_POST['modaldisetor2'],
		  $_POST['jabatanperusahaanlain2'],
		  $_POST['namaperusahaanlain2'],
		  $_POST['alamatperusahaanlain2'],
		  $_POST['kodeposperusahaanlain2'],
		  $_POST['notelpperusahaanlain2'],
		  $_POST['tanggalmenjabataperusahaanlain2'],
		  $_POST['kedudukan3'],
		  $_POST['namapejabat3'],
		  $_POST['tempatpejabat3'],
		  $_POST['tanggalpejabat3'],
		  $_POST['alamatpejabat3'],
		  $_POST['kodepospejabat3'],
		  $_POST['notelppejabat3'],
		  $_POST['kewarganegaraanpejabat3'],
		  $_POST['tanggalmenjabat3'],
		  $_POST['sahamdimiliki3'],
		  $_POST['modaldisetor3'],
		  $_POST['jabatanperusahaanlain3'],
		  $_POST['namaperusahaanlain3'],
		  $_POST['alamatperusahaanlain3'],
		  $_POST['kodeposperusahaanlain3'],
		  $_POST['notelpperusahaanlain3'],
		  $_POST['tanggalmenjabataperusahaanlain3'],
		  $_POST['kedudukan4'],
		  $_POST['namapejabat4'],
		  $_POST['tempatpejabat4'],
		  $_POST['tanggalpejabat4'],
		  $_POST['alamatpejabat4'],
		  $_POST['kodepospejabat4'],
		  $_POST['notelppejabat4'],
		  $_POST['kewarganegaraanpejabat4'],
		  $_POST['tanggalmenjabat4'],
		  $_POST['sahamdimiliki4'],
		  $_POST['modaldisetor4'],
		  $_POST['jabatanperusahaanlain4'],
		  $_POST['namaperusahaanlain4'],
		  $_POST['alamatperusahaanlain4'],
		  $_POST['kodeposperusahaanlain4'],
		  $_POST['notelpperusahaanlain4'],
		  $_POST['tanggalmenjabataperusahaanlain4'],
		  $_POST['kedudukan5'],
		  $_POST['namapejabat5'],
		  $_POST['tempatpejabat5'],
		  $_POST['tanggalpejabat5'],
		  $_POST['alamatpejabat5'],
		  $_POST['kodepospejabat5'],
		  $_POST['notelppejabat5'],
		  $_POST['kewarganegaraanpejabat5'],
		  $_POST['tanggalmenjabat5'],
		  $_POST['sahamdimiliki5'],
		  $_POST['modaldisetor5'],
		  $_POST['jabatanperusahaanlain5'],
		  $_POST['namaperusahaanlain5'],
		  $_POST['alamatperusahaanlain5'],
		  $_POST['kodeposperusahaanlain5'],
		  $_POST['notelpperusahaanlain5'],
		  $_POST['tanggalmenjabataperusahaanlain5'],
		  $_POST['namasaham1'],
		  $_POST['alamatsaham1'],
		  $_POST['kodesaham1'],
		  $_POST['notelpsaham1'],
		  $_POST['kewarganegaraansaham1'],
		  $_POST['npwpsaham1'],
		  $_POST['lembarsaham1'],
		  $_POST['rpsaham1'],
		  $_POST['namasaham2'],
		  $_POST['alamatsaham2'],
		  $_POST['kodesaham2'],
		  $_POST['notelpsaham2'],
		  $_POST['kewarganegaraansaham2'],
		  $_POST['npwpsaham2'],
		  $_POST['lembarsaham2'],
		  $_POST['rpsaham2'],
		  $_POST['namasaham3'],
		  $_POST['alamatsaham3'],
		  $_POST['kodesaham3'],
		  $_POST['notelpsaham3'],
		  $_POST['kewarganegaraansaham3'],
		  $_POST['npwpsaham3'],
		  $_POST['lembarsaham3'],
		  $_POST['rpsaham3'],
		  $_POST['namasaham4'],
		  $_POST['alamatsaham4'],
		  $_POST['kodesaham4'],
		  $_POST['notelpsaham4'],
		  $_POST['kewarganegaraansaham4'],
		  $_POST['npwpsaham4'],
		  $_POST['lembarsaham4'],
		  $_POST['rpsaham4'],
		  $_POST['namasaham5'],
		  $_POST['alamatsaham5'],
		  $_POST['kodesaham5'],
		  $_POST['notelpsaham5'],
		  $_POST['kewarganegaraansaham5'],
		  $_POST['npwpsaham5'],
		  $_POST['lembarsaham5'],
		  $_POST['rpsaham5'],
		  $_POST['namasaham6'],
		  $_POST['alamatsaham6'],
		  $_POST['kodesaham6'],
		  $_POST['notelpsaham6'],
		  $_POST['kewarganegaraansaham6'],
		  $_POST['npwpsaham6'],
		  $_POST['lembarsaham6'],
		  $_POST['rpsaham6'],
		  $_POST['namasaham7'],
		  $_POST['alamatsaham7'],
		  $_POST['kodesaham7'],
		  $_POST['notelpsaham7'],
		  $_POST['kewarganegaraansaham7'],
		  $_POST['npwpsaham7'],
		  $_POST['lembarsaham7'],
		  $_POST['rpsaham7'],
		  $_POST['namasaham8'],
		  $_POST['alamatsaham8'],
		  $_POST['kodesaham8'],
		  $_POST['notelpsaham8'],
		  $_POST['kewarganegaraansaham8'],
		  $_POST['npwpsaham9'],
		  $_POST['lembarsaham9'],
		  $_POST['rpsaham9'],
		  $_POST['namasaham10'],
		  $_POST['alamatsaham10'],
		  $_POST['kodesaham10'],
		  $_POST['notelpsaham10'],
		  $_POST['kewarganegaraansaham10'],
		  $_POST['npwpsaham10'],
		  $_POST['lembarsaham10'],
		  $_POST['rpsaham10'],
		  $_POST['usahapokok'],
		  $_POST['usahalain1'],
		  $_POST['usahalain2'],
		  $_POST['usahalain3'],
		  $_POST['usahalain4'],
		  $_POST['usahalain5'],
		  $_POST['produkutama'],
		  $_POST['produklain1'],
		  $_POST['produklain2'],
		  $_POST['produklain3'],
		  $_POST['produklain4'],
		  $_POST['produklain5'],
		  $_POST['rp'],
		  $_POST['modaldasar'],
		  $_POST['modalditempatkan'],
		  $_POST['modaldisetor'],
		  $_POST['banyaksaham'],
		  $_POST['nominalsaham'],
		  $_POST['asset'],
		  $_POST['wni'],
		  $_POST['wna'],
		  $_POST['totaltenaga'],
		  $_POST['rantai'],
		  $_POST['pihak3'],
		  $_POST['napercab1'],
		  $_POST['notdpcab1'],
		  $_POST['alpercab1'],
		  $_POST['kabcap1'],
		  $_POST['provcab1'],
		  $_POST['poscab1'],
		  $_POST['notelp1'],
		  $_POST['statuscab1'],
		  $_POST['kegiatancab1'],
		  $_POST['napercab2'],
		  $_POST['notdpcab2'],
		  $_POST['alpercab2'],
		  $_POST['kabcap2'],
		  $_POST['provcab2'],
		  $_POST['poscab2'],
		  $_POST['notelp2'],
		  $_POST['statuscab2'],
		  $_POST['kegiatancab2'],
		  $_POST['napercab3'],
		  $_POST['notdpcab3'],
		  $_POST['alpercab3'],
		  $_POST['kabcap3'],
		  $_POST['provcab3'],
		  $_POST['poscab3'],
		  $_POST['notelp3'],
		  $_POST['statuscab3'],
		  $_POST['kegiatancab3'],
		  $_POST['napercab4'],
		  $_POST['notdpcab4'],
		  $_POST['alpercab4'],
		  $_POST['kabcap4'],
		  $_POST['provcab4'],
		  $_POST['poscab4'],
		  $_POST['notelp4'],
		  $_POST['statuscab4'],
		  $_POST['kegiatancab4'],
		  $_POST['napercab5'],
		  $_POST['notdpcab5'],
		  $_POST['alpercab5'],
		  $_POST['kabcap5'],
		  $_POST['provcab5'],
		  $_POST['poscab5'],
		  $_POST['notelp5'],
		  $_POST['statuscab5'],
		  $_POST['kegiatancab5']);
 }catch(Exception $error){
	echo "Terjadi Kesalahan".$error;
  }
}
 ?>