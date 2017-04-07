<?php 

class database
{
	//membuat properti pada class database bersifat protected
	
	protected $user = "root";
	protected $pass = "";

	public function __construct()
	{
		try {
			$this->db = new PDO('mysql:host=localhost;dbname=dbpaten',$this->user,$this->pass);
		} catch (Exception $e) {
			error_reporting("error");
		}		
	}
  
	  public function hapus_ho($registrasi)
	  {
	    $stmt = $this->db->prepare("DELETE FROM ijin_ho WHERE registrasi=:registrasi");

	    $stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_imb($registrasi)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM ijin_imb WHERE registrasi=:registrasi");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_iumk($registrasi)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM ijin_iumk WHERE registrasi=:registrasi");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_siup($registrasi)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM ijin_siup WHERE registrasi=:registrasi");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_tdi($registrasi)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM ijin_tdi WHERE registrasi=:registrasi");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_domisili($registrasi)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM nonijin_domisili WHERE registrasi=:registrasi");
	  	$stmt->execute(array(':registrasi' => $registrasi)); 
	  }

	  public function hapus_dispensasi($registrasi)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM nonijin_dispensasi WHERE registrasi=:registrasi");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_admin($username)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM admin WHERE username=:username");
	  	$stmt->execute(array(':username' => $username));
	  }

	  public function no_ho()
	  {
		$no_urut ="SELECT * FROM ijin_ho WHERE registrasi=:'registrasi'";
	    $query = $this->db->query($no_urut);
	    $cek = "SELECT registrasi FROM ijin_ho ORDER BY id_ho DESC LIMIT 1";
	    $cek = $this->db->query($cek);
	    $ex = explode('/', $cek['registrasi']);
	    if (date('d')=='01'){
	        $a = str_pad(1,3,'0', STR_PAD_LEFT);
	    }
	    else{
	        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
	    }

	    $b = 'HO/PATEN/Bojong/KabPekalongan';
	    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
	    $d = date('Y');
	    $registrasi = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;
   
  
	  }

	  public function tambah_ho($id_ho, $perihal, $daftar_ke, $namausaha, $jenisusaha, $alamatusaha, $luas, $modal, $karyawan)
	  {
		$cek =  $this->db->query("SELECT registrasi FROM ijin_ho ORDER BY id_ho DESC LIMIT 1");
  		$cek = $cek->fetch(PDO::FETCH_ASSOC);
  		$ex = explode('/', $cek['registrasi']);
 			if (date('d')=='01'){
      			$a = str_pad(1,3,'0', STR_PAD_LEFT);
  			}
   			else{
       			$a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);       
  		 	}
  		$b = 'Reg_HO/PATEN/Bojong/KabPekalongan';
  		$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
  		$d = date('Y');
  		$registrasi   = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;

  		$stmt=$this->db->prepare('SELECT * FROM ijin_ho WHERE daftar_ke=:daftar_ke AND namausaha=:namausaha AND jenisusaha=:jenisusaha');
  		$stmt->execute(array(
  			':daftar_ke' => $daftar_ke,
			':namausaha' => $namausaha,
			':jenisusaha' => $jenisusaha));
		  //cek validasi 
		if($stmt->rowCount() > 0){ //jika sudah ada
		  ?>
		  <script>
		    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
		    window.location="../?module=pengajuan-izin-gangguan";
		  </script>

		    <?php
		  }else{ //jika belum ada

				$stmt = $this->db->prepare("INSERT INTO ijin_ho VALUES(:id_ho, :registrasi,:perihal, :daftar_ke,:noktp,:nama,:alamat,:pekerjaan,:nohp,:namausaha,:jenisusaha,:alamatusaha,:luas,:modal,:karyawan,:pendaftaran,:proses,:no_ho,:terbit,:paraf)");		

				$simpan = $stmt->execute(array(
					':id_ho' => $id_ho,
					':registrasi' => $registrasi,
					':perihal' => $perihal,
					':noktp' => '',
					':daftar_ke' => $daftar_ke,
					':nama' => '',
					':alamat' => '',
					':pekerjaan' => '',
					':nohp' => '',
					':namausaha' => $namausaha,
					':jenisusaha' => $jenisusaha,
					':alamatusaha' => $alamatusaha,
					':luas' => $luas,
					':modal' => $modal,
					':karyawan' => $karyawan,
					':pendaftaran' => date("Y-m-d"),
					':proses' => '',
					':no_ho' => '',
					':terbit' => '',
					':paraf' => ''));

					if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../?module=detail-izin-gangguan-saya&registrasi=$enc_reg");
					}
		    }
		 }

		 public function tambah_dispensasi($id_dispensasi,$namawanita, $tempatwanita, $tanggalwanita, $usiawanita, $pekerjaanwanita, $statuswanita, $alamatwanita, $namapria, $tempatpria, $tanggalpria, $usiapria, $pekerjaanpria, $statuspria, $alamatpria, $tanggalakad, $tempatakad,  $alasan)
		{
			$cek = $this->db->query("SELECT registrasi FROM nonijin_dispensasi ORDER BY id_dispensasi DESC LIMIT 1");
	        $cek = $cek->fetch(PDO::FETCH_ASSOC);
	        $ex = explode('/', $cek['registrasi']);
		        if (date('d')=='01'){
		            $a = str_pad(1,3,'0', STR_PAD_LEFT);
		        }
		        else{
		            $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
		        }
	        $b = 'Reg_Dispensasi/PATEN/Bojong/KabPekalongan';
	        $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
	        $d = date('Y');
	        $registrasi   = $a.'/'.$b.'/'.$c[date('n')].'/'.$d; 

	        $stmt=$this->db->prepare('SELECT * FROM nonijin_dispensasi WHERE namapria=:namapria AND namawanita=:namawanita');
	  		$stmt->execute(array(
				':namapria' => $namapria,
				':namawanita' => $namawanita));
	 		 //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../?module=pengajuan-dispensasi-nikah";
			  </script>

			    <?php
			  }else{ //jika belum ada

		        $stmt= $this->db->prepare('INSERT INTO nonijin_dispensasi VALUES(:id_dispensasi, :registrasi, :noktp, :namapemohon, :alamatpemohon,  :nohp, :kades, :tgldes, :nodes, :namawanita, :tempatwanita, :tanggalwanita, :usiawanita, :pekerjaanwanita, :statuswanita, :alamatwanita, :namapria, :tempatpria, :tanggalpria, :usiapria, :pekerjaanpria, :statuspria, :alamatpria, :tanggalakad, :tempatakad, :alasan, :pendaftaran, :proses, :no_dispensasi, :terbit, :paraf)');

		        $simpan = $stmt->execute(array(
					 ':id_dispensasi' => $id_dispensasi,
					 ':registrasi' => $registrasi,
					 ':noktp' => ' ',
					 ':namapemohon' => ' ',
					 ':alamatpemohon' => ' ',
					 ':nohp' => ' ', 
					 ':kades' => ' ',
					 ':tgldes' => ' ', 
					 ':nodes' => ' ',
					 ':namawanita' => $namawanita,
					 ':tempatwanita' => $tempatwanita,
					 ':tanggalwanita' => $tanggalwanita,
					 ':usiawanita' => $usiawanita,
					 ':pekerjaanwanita' => $pekerjaanwanita,
					 ':statuswanita' => $statuswanita,
					 ':alamatwanita' => $alamatwanita,
					 ':namapria' => $namapria,
					 ':tempatpria' => $tempatpria,
					 ':tanggalpria' => $tanggalpria,
					 ':usiapria' => $usiapria,
					 ':pekerjaanpria' => $pekerjaanpria,
					 ':statuspria' => $statuspria,
					 ':alamatpria' => $alamatpria,
					 ':tanggalakad' => $tanggalakad,
					 ':tempatakad' => $tempatakad,
					 ':alasan' => $alasan,
					 ':pendaftaran' => date("Y-m-d"),
					 ':proses' => 'Dalam Proses',
					 ':no_dispensasi' => ' ', 
					 ':terbit' => '',
					 ':paraf' => 'Validasi Formulir'));
		        if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../?module=detail-dispensasi-nikah-saya&registrasi=$enc_reg");
				}
  			}
		}

		public function tambah_domisili( $id_domisili,  $nama, $tempat, $tanggal, $jekel, $alamat, $rt, $rw, $desa, $kecamatan, $kabupaten, $provinsi, $agama, $pekerjaan, $status, $kewarganegaraan)
		{
			$cek = $this->db->query("SELECT registrasi FROM nonijin_domisili ORDER BY id_domisili DESC LIMIT 1");
	  		$cek = $cek->fetch(PDO::FETCH_ASSOC);
	  		$ex = explode('/', $cek['registrasi']);
		  		if (date('d')=='01'){
		      		$a = str_pad(1,3,'0', STR_PAD_LEFT);
		  		}
		   		else{
		       		$a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
		      	}
	  		$b = 'Reg_domisili/PATEN/Bojong/KabPekalongan';
	  		$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
	  		$d = date('Y');
	  		$registrasi   = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;
			
		  		$stmt= $this->db->prepare('INSERT INTO nonijin_domisili VALUES(:id_domisili, :registrasi,  :noktp, :nama, :tempat, :tanggal, :jekel, :alamat,  :rt, :rw, :desa, :kecamatan, :kabupaten, :provinsi, :agama, :pekerjaan, :status, :kewarganegaraan, :nohp, :pendaftaran, :proses, :no_domisili, :terbit, :paraf)');

		  		$simpan = $stmt->execute(array(
					  ':id_domisili' => $id_domisili,
					  ':registrasi' => $registrasi,
					  ':noktp' => ' ',
					  ':nama' =>  ' ',
					  ':tempat' => $tempat,
					  ':tanggal' => $tanggal,
					  ':jekel' => $jekel,
					  ':alamat' => $alamat,
					  ':rt' => $rt,
					  ':rw' => $rw,
					  ':desa' => $desa,
					  ':kecamatan' => $kecamatan,
					  ':kabupaten' => $kabupaten,
					  ':provinsi' => $provinsi,
					  ':agama' => $agama,
					  ':pekerjaan' => $pekerjaan,
					  ':status' => $status,
					  ':kewarganegaraan' => $kewarganegaraan,
					  ':nohp' => '',
					  ':pendaftaran' => date('Y-m-d'),
					  ':proses' => 'Dalam Proses',
					  ':no_domisili' => ' ',
					  ':terbit' => '',
					  ':paraf' => 'Validasi Formulir'));

		  		if($simpan) {
						$enc_reg = base64_encode($registrasi);		
						header("location:../?module=detail-domisili-saya&registrasi=$enc_reg");
				}
			}
		

		public function tambah_imb($id_imb, $daftar_ke, $maksud, $penggunaan, $lokasi,  $luastanah, $luasbangunan, $status)
		{
			$cek = $this->db->query("SELECT registrasi FROM ijin_imb ORDER BY id_imb DESC LIMIT 1");
	  		$cek = $cek->fetch(PDO::FETCH_ASSOC);
	  		$ex = explode('/', $cek['registrasi']);
		  		if (date('d')=='01'){
		      		$a = str_pad(1,3,'0', STR_PAD_LEFT);
		  		}
		   		else{
		       		$a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
		        }
	  		$b = 'Reg_IMB/PATEN/Bojong/KabPekalongan';
	  		$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
	  		$d = date('Y');
	  		$registrasi   = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;

	  		$stmt=$this->db->prepare('SELECT * FROM ijin_imb WHERE daftar_ke=:daftar_ke AND maksud=:maksud AND lokasi=:lokasi');
	  		$stmt->execute(array(
	  			':daftar_ke' => $daftar_ke,
				':maksud' => $maksud,
				':lokasi' => $lokasi));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../?module=pengajuan-izin-mendirikan-bangunan";
			  </script>

			    <?php
			  }else{ //jika belum ada

		  		$stmt= $this->db->prepare('INSERT INTO ijin_imb VALUES(:id_imb, :registrasi, :daftar_ke, :noktp, :nama, :alamat,  :maksud, :penggunaan, :lokasi, :nohp, :luastanah, :luasbangunan, :status, :pendaftaran, :proses, :no_imb, :terbit, :paraf)');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id_imb'=> $id_imb,
					  ':registrasi'=> $registrasi,
					  ':daftar_ke'=> $daftar_ke,
					  ':noktp'=> ' ',
					  ':nama'=> ' ',
					  ':alamat'=> ' ',
					   ':maksud'=> $maksud,
					  ':penggunaan'=> $penggunaan,
					  ':lokasi'=> $lokasi,
					   ':nohp'=> ' ',
					  ':luastanah'=> $luastanah,
					  ':luasbangunan'=> $luasbangunan,
					  ':status'=> $status,
					  ':pendaftaran'=> date('Y-m-d'),
					  ':proses'=> 'Dalam Proses',
					  ':paraf'=> 'Validasi Formulir',
					  ':no_imb'=> ' ',
					  ':terbit'=> ''));

		  		if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../?module=detail-izin-mendirikan-bangunan-saya&registrasi=$enc_reg");
			   }
			}
		}

		public function tambah_iumk($id_iumk, $daftar_ke, $namausaha, $jenisusaha, $bentukusaha, $saranausaha, $alamatusaha, $notelp, $modal, $npwp)
		{
			$cek = $this->db->query("SELECT registrasi FROM ijin_iumk ORDER BY id_iumk DESC LIMIT 1");
	    	$cek = $cek->fetch(PDO::FETCH_ASSOC);
	    	$ex = explode('/', $cek['registrasi']);
		    	if (date('d')=='01'){
		        	$a = str_pad(1,3,'0', STR_PAD_LEFT);
		    	}
		    	else{
		        	$a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
		    	}
		    $b = 'Reg_IUMK/PATEN/Bojong/KabPekalongan';
	    	$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
	    	$d = date('Y');
	    	$registrasi = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;

	    	$stmt=$this->db->prepare('SELECT * FROM ijin_iumk WHERE daftar_ke=:daftar_ke AND namausaha=:namausaha AND jenisusaha=:jenisusaha AND bentukusaha=:bentukusaha');
	  		$stmt->execute(array(
	  			':daftar_ke' => $daftar_ke,
				':namausaha' => $namausaha,
				':jenisusaha' => $jenisusaha,
				':bentukusaha' => $bentukusaha));
			//cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../?module=pengajuan-izin-usaha-mikro-dan-kecil";
			  </script>

			    <?php
			  }else{ //jika belum ada
		
				$stmt= $this->db->prepare('INSERT INTO ijin_iumk VALUES(:id_iumk, :registrasi, :daftar_ke, :noktp, :namapemohon, :alamatpemohon,  :nohp, :namausaha, :jenisusaha, :bentukusaha, :saranausaha, :alamatusaha, :notelp, :modal, :npwp, :pendaftaran, :proses, :no_iumk, :terbit, :paraf)');

				$simpan = $stmt->execute(array(
					  ':id_iumk' => $id_iumk,
					  ':registrasi' => $registrasi,
					  ':daftar_ke' => $daftar_ke,
					  ':noktp' => ' ',
					  ':namapemohon' => ' ',
					  ':alamatpemohon' => '',
					  ':nohp' => ' ',
					  ':namausaha' => $namausaha,
					  ':jenisusaha' => $jenisusaha,
					  ':bentukusaha' => $bentukusaha,
					  ':saranausaha' => $saranausaha,
					  ':alamatusaha' => $alamatusaha,
					  ':notelp' => $notelp,
					  ':modal' => $modal,
					  ':npwp' => $npwp,
					  ':pendaftaran' => date('Y-m-d'),
					  ':proses' => 'Dalam Proses',
					  ':no_iumk' => '',
					  ':terbit' => '',
					  ':paraf' => 'Validasi Formulir'));

				if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../?module=detail-izin-usaha-mikro-dan-kecil-saya&registrasi=$enc_reg");
			   }		
			}
		}

		public function tambah_siup( $id_siup, $pengajuan, $daftar_ke, $namaperusahaan, $jenis,  $jabatan, $npwp, $alamatperusahaan, $provinsi, $kota, $kecamatan, $desa, $notelp, $nofax, $pos, $penanamanmodal, $nopendirian, $tglpendirian, $noperubahan, $tglperubahan, $modal, $saham, $sahamnasional, $sahamasing, $carapemasaran, $kbli, $barjas)
		{
			$cek = $this->db->query("SELECT registrasi FROM ijin_siup ORDER BY id_siup DESC LIMIT 1");
	 		$cek = $cek->fetch(PDO::FETCH_ASSOC);
	  		$ex = explode('/', $cek['registrasi']);
		  		if (date('d')=='01'){
		      		$a = str_pad(1,3,'0', STR_PAD_LEFT);
		  		}
		   		else{
		       		$a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
		     	}
	  		$b = 'Reg_SIUP/PATEN/Bojong/KabPekalongan';
	  		$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
	  		$d = date('Y');
	  		$registrasi   = $a.'/'.$b.'/'.$c[date('n')].'/'.$d; 

	  		$stmt=$this->db->prepare('SELECT * FROM ijin_siup WHERE daftar_ke=:daftar_ke AND namaperusahaan=:namaperusahaan AND jenis=:jenis AND alamatperusahaan=:alamatperusahaan');
	  		$stmt->execute(array(
	  			':daftar_ke' => $daftar_ke,
				':namaperusahaan' => $namaperusahaan,
				':jenis' => $jenis,
				':alamatperusahaan' => $alamatperusahaan));
			//cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../?module=pengajuan-surat-izin-usaha-perdagangan";
			  </script>

			    <?php
			  }else{ //jika belum ada
		
		  		$stmt= $this->db->prepare('INSERT INTO ijin_siup VALUES(:id_siup, :registrasi, :pengajuan, :daftar_ke, :noktp, :namapemohon, :alamatpemohon, :nohp, :namaperusahaan, :jenis, :jabatan, :npwp, :alamatperusahaan, :provinsi, :kota, :kecamatan, :desa, :notelp, :nofax, :pos, :penanamanmodal, :nopendirian, :tglpendirian, :noperubahan, :tglperubahan, :modal, :saham, :sahamnasional, :sahamasing, :carapemasaran, :kbli, :barjas, :masber, :pendaftaran, :proses, :no_siup, :terbit, :paraf)');
				$simpan = $stmt->execute(array(	  
					  ':id_siup' => $id_siup,
					  ':registrasi' => $registrasi,
					  ':pengajuan' => $pengajuan,
					  ':daftar_ke' => $daftar_ke,
					  ':noktp' => ' ',
					  ':namapemohon' => ' ',
					  ':alamatpemohon' => ' ' ,
					   ':nohp' => ' ',
					  ':namaperusahaan' => $namaperusahaan,
					  ':jenis' => $jenis,
					  ':jabatan' => $jabatan,
					  ':npwp' => $npwp,
					  ':alamatperusahaan' => $alamatperusahaan,
					   ':provinsi' => $provinsi,
					  ':kota' => $kota,
					  ':kecamatan' => $kecamatan,
					  ':desa' => $desa,
					  ':notelp' => $notelp,
					  ':nofax' => $nofax,
					  ':pos' => $pos,
					  ':penanamanmodal' => $penanamanmodal,
					  ':nopendirian' => $nopendirian,
					  ':tglpendirian' => $tglpendirian,
					  ':noperubahan' => $noperubahan,
					  ':tglperubahan' => $tglperubahan,
					  ':modal' => $modal,
					  ':saham' => $saham,
					  ':sahamnasional' => $sahamnasional,
					  ':sahamasing' => $sahamasing,
					  ':carapemasaran' => $carapemasaran,
					  ':kbli' => $kbli,
					  ':barjas' => $barjas,
					  ':masber' =>  ' ',
					  ':pendaftaran' => date('Y-m-d'),
					  ':proses' => 'Dalam Proses',
					  ':no_siup' => ' ',
					  ':terbit' => '',
					  ':paraf' => 'Validasi Formulir'));
				if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../?module=detail-surat-izin-usaha-perdagangan-saya&registrasi=$enc_reg");
			   }
			}
		}

		public function tambah_tdi($id_tdi, $daftar_ke, $namaperusahaan, $alamatperusahaan, $notelp, $nofax, $npwp, $nipik, $lokasi, $desa, $kecamatan,  $kabupaten, $provinsi, $kepemilikan, $luasbangunan, $luastanah, $mesinutama, $mesinpembantu, $tenaga, $kbli, $komoditi, $kapasitas, $kebutuhan, $jumlah, $laki, $wanita, $nilai, $merk, $nomerk)
		{
			 $cek = $this->db->query("SELECT registrasi FROM ijin_tdi ORDER BY id_tdi DESC LIMIT 1");
		     $cek = $cek->fetch(PDO::FETCH_ASSOC);
		     $ex = explode('/', $cek['registrasi']);
		     if (date('Y')=='01'){
		       $a = str_pad(1,3,'0', STR_PAD_LEFT);
		     }
		     else{
		       $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
		     }
		     $b = 'TDI/PATEN/Bojong/KabPekalongan';
		     $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
		     $d = date('Y');
		     $registrasi = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;

		     $stmt=$this->db->prepare('SELECT * FROM ijin_tdi WHERE daftar_ke=:daftar_ke AND namaperusahaan=:namaperusahaan AND nipik=:nipik AND npwp=:npwp');
		  		$stmt->execute(array(
		  			':daftar_ke' => $daftar_ke,
					':namaperusahaan' => $namaperusahaan,
					':nipik' => $nipik,
					':npwp' => $npwp));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../?module=pengajuan-tanda-daftar-industri";
			  </script>

			    <?php
			  }else{ //jika belum ada
		
			     $stmt= $this->db->prepare('INSERT INTO ijin_tdi VALUES(:id_tdi, :registrasi, :daftar_ke, :noktp, :nama, :alamat,  :nohp, :namaperusahaan, :alamatperusahaan, :notelp, :nofax, :npwp, :nipik, :lokasi, :desa, :kecamatan, :kabupaten, :provinsi, :kepemilikan, :luasbangunan, :luastanah, :mesinutama, :mesinpembantu, :tenaga, :kbli, :komoditi, :kapasitas, :kebutuhan, :jumlah, :laki, :wanita, :nilai, :merk, :nomerk,  :pendaftaran,  :proses, :no_tdi, :terbit, :paraf)');
			     $simpan = $stmt->execute(array(
					  ':id_tdi'=> $id_tdi,
					  ':registrasi'=> $registrasi,
					  ':daftar_ke'=> $daftar_ke,
					  ':noktp'=> ' ',
					  ':nama'=> ' ',
					  ':alamat'=> ' ',
					  ':nohp'=> ' ',
					  ':namaperusahaan'=> $namaperusahaan,
					  ':alamatperusahaan'=> $alamatperusahaan,
					  ':notelp'=> $notelp,
					  ':nofax'=> $nofax,
					  ':npwp'=> $npwp,
					  ':nipik'=> $nipik,
					  ':lokasi'=> $lokasi,
					  ':desa'=> $desa,
					  ':kecamatan'=> $kecamatan,
					  ':kabupaten'=> $kabupaten,
					  ':provinsi'=> $provinsi,
					  ':kepemilikan'=> $kepemilikan,
					  ':luasbangunan'=> $luasbangunan,
					  ':luastanah'=> $luastanah,
					  ':mesinutama'=> $mesinutama,
					  ':mesinpembantu'=> $mesinpembantu,
					  ':tenaga'=> $tenaga,
					  ':kbli'=> $kbli,
					  ':komoditi'=> $komoditi,
					  ':kapasitas'=> $kapasitas,
					  ':kebutuhan'=> $kebutuhan,
					  ':jumlah'=> $jumlah,
					  ':laki'=> $laki,
					  ':wanita'=> $wanita,
					  ':nilai'=> $nilai,
					  ':merk'=> $merk,
					  ':nomerk'=> $nomerk,
					  ':pendaftaran'=> date("Y-m-d"),
					  ':proses'=> 'Dalam Proses',
					  ':no_tdi'=> ' ',
					  ':terbit'=> '',
					  ':paraf'=> 'Validasi Formulir'));

	     		if($simpan) {
					$enc_reg = base64_encode($registrasi);		
					header("location:../?module=detail-tanda-daftar-industri-saya&registrasi=$enc_reg");
				}
			}
		}

		public function tambah_tdp($id_tdp, $daftar_ke, $namaperusahaan, $alamatperusahaan, $desa, $kecamatan, $kabupaten, $provinsi, $kodepos, $notelp, $nofax, $email, $namakelompok, $statusperusahaan, $namainduk, $tdp_no, $alper, $kelper, $kecper, $kabper, $provper, $lokasi, $desapab, $kecamatanpab, $kabupab, $provinsipab, $bank1, $bank2, $jumlahbank, $npwp, $bentukmodal, $tanggal_berdiri, $tanggal_kegiatan, $jangka, $kerjasama, $merk, $nomerk, $hakpaten, $nohakpaten, $nomor, $tglpengesahan, $namanotaris, $noubah, $tglubah, $namanotaris2, $nomenkuham, $tglmenkuham, $nomenkuhamatas, $nomenkuhamatas, $tglmenkuhamatas, $nolaporan, $tgllaporan, $nodireksi, $tgldireksi, $jenisijin1, $noijin1, $oleh1, $tglkeluar1, $masber1, $jenisijin2, $noijin2, $oleh2, $tglkeluar2, $masber2, $jenisijin3, $noijin3, $oleh3, $tglkeluar3, $masber3, $jenisijin4, $noijin4, $oleh4, $tglkeluar4, $masber4, $jenisijin5, $noijin5, $oleh5, $tglkeluar5, $masber5, $jenisijin6, $noijin6, $oleh6, $tglkeluar6, $masber6, $jenisijin7, $noijin7, $oleh7, $tglkeluar7, $masber7, $jenisijin8, $noijin8, $oleh8, $tglkeluar8, $masber8, $jenisijin9, $noijin9, $oleh9, $tglkeluar9, $masber9, $jenisijin10, $noijin10, $oleh10, $tglkeluar10, $masber10, $jumlahpimpinan, $dirut, $direktur, $komisaris, $kedudukan1, $namapejabat1, $tempatpejabat1, $tanggalpejabat1, $alamatpejabat1, $kodepospejabat1, $notelppejabat1, $kewarganegaraanpejabat1, $tanggalmenjabat1, $sahamdimiliki1, $modaldisetor1, $jabatanperusahaanlain1, $namaperusahaanlain1, $alamatperusahaanlain1, $kodeposperusahaanlain1, $notelpperusahaanlain1, $tanggalmenjabataperusahaanlain1, $kedudukan2, $namapejabat2, $tempatpejabat2, $tanggalpejabat2, $alamatpejabat2, $kodepospejabat2, $notelppejabat2, $kewarganegaraanpejabat2, $tanggalmenjabat2, $sahamdimiliki2, $modaldisetor2, $jabatanperusahaanlain2, $namaperusahaanlain2, $alamatperusahaanlain2, $kodeposperusahaanlain2, $notelpperusahaanlain2, $tanggalmenjabataperusahaanlain2, $kedudukan3, $namapejabat3, $tempatpejabat3, $tanggalpejabat3, $alamatpejabat3, $kodepospejabat3, $notelppejabat3, $kewarganegaraanpejabat3, $tanggalmenjabat3, $sahamdimiliki3, $modaldisetor3, $jabatanperusahaanlain3, $namaperusahaanlain3, $alamatperusahaanlain3, $kodeposperusahaanlain3, $notelpperusahaanlain3, $tanggalmenjabataperusahaanlain3, $kedudukan4, $namapejabat4, $tempatpejabat4, $tanggalpejabat4, $alamatpejabat4, $kodepospejabat4, $notelppejabat4, $kewarganegaraanpejabat4, $tanggalmenjabat4, $sahamdimiliki4, $modaldisetor4, $jabatanperusahaanlain4, $namaperusahaanlain4, $alamatperusahaanlain4, $kodeposperusahaanlain4, $notelpperusahaanlain4, $tanggalmenjabataperusahaanlain4, $kedudukan5, $namapejabat5, $tempatpejabat5, $tanggalpejabat5, $alamatpejabat5, $kodepospejabat5, $notelppejabat5, $kewarganegaraanpejabat5, $tanggalmenjabat5, $sahamdimiliki5, $modaldisetor5, $jabatanperusahaanlain5, $namaperusahaanlain5, $alamatperusahaanlain5, $kodeposperusahaanlain5, $notelpperusahaanlain5, $tanggalmenjabataperusahaanlain5, $namasaham1, $alamatsaham1, $kodesaham1, $notelpsaham1, $kewarganegaraansaham1, $npwpsaham1, $lembarsaham1, $rpsaham1, $namasaham2, $alamatsaham2, $kodesaham2, $notelpsaham2, $kewarganegaraansaham2, $npwpsaham2, $lembarsaham2, $rpsaham2, $namasaham3, $alamatsaham3, $kodesaham3, $notelpsaham3, $kewarganegaraansaham3, $npwpsaham3, $lembarsaham3, $rpsaham3, $namasaham4, $alamatsaham4, $kodesaham4, $notelpsaham4, $kewarganegaraansaham4, $npwpsaham4, $lembarsaham4, $rpsaham4, $namasaham5, $alamatsaham5, $kodesaham5, $notelpsaham5, $kewarganegaraansaham5, $npwpsaham5, $lembarsaham5, $rpsaham5, $namasaham6, $alamatsaham6, $kodesaham6, $notelpsaham6, $kewarganegaraansaham6, $npwpsaham6, $lembarsaham6, $rpsaham6, $namasaham7, $alamatsaham7, $kodesaham7, $notelpsaham7, $kewarganegaraansaham7, $npwpsaham7, $lembarsaham7, $rpsaham7, $namasaham8, $alamatsaham8, $kodesaham8, $notelpsaham8, $kewarganegaraansaham8, $npwpsaham9, $lembarsaham9, $rpsaham9, $namasaham10, $alamatsaham10, $kodesaham10, $notelpsaham10, $kewarganegaraansaham10, $npwpsaham10, $lembarsaham10, $rpsaham10, $usahapokok, $usahalain1, $usahalain2, $usahalain3, $usahalain4, $usahalain5, $produkutama, $produklain1, $produklain2, $produklain3, $produklain4, $produklain5, $rp, $modaldasar, $modalditempatkan, $modaldisetor, $banyaksaham, $nominalsaham, $asset, $wni, $wna, $totaltenaga, $rantai, $pihak3, $napercab1, $notdpcab1, $alpercab1, $kabcap1, $provcab1, $poscab1, $notelp1, $statuscab1, $kegiatancab1, $napercab2, $notdpcab2, $alpercab2, $kabcap2, $provcab2, $poscab2, $notelp2, $statuscab2, $kegiatancab2, $napercab3, $notdpcab3, $alpercab3, $kabcap3, $provcab3, $poscab3, $notelp3, $statuscab3, $kegiatancab3, $napercab4, $notdpcab4, $alpercab4, $kabcap4, $provcab4, $poscab4, $notelp4, $statuscab4, $kegiatancab4, $napercab5, $notdpcab5, $alpercab5, $kabcap5, $provcab5, $poscab5, $notelp5, $statuscab5, $kegiatancab5) 
		{
			 $cek = $this->db->query("SELECT registrasi FROM ijin_tdp ORDER BY id_tdp DESC LIMIT 1");
		     $cek = $cek->fetch(PDO::FETCH_ASSOC);
		     $ex = explode('/', $cek['registrasi']);
		     if (date('Y')=='01'){
		       $a = str_pad(1,3,'0', STR_PAD_LEFT);
		     }
		     else{
		       $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
		     }
		     $b = 'TDI/PATEN/Bojong/KabPekalongan';
		     $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
		     $d = date('Y');
		     $registrasi = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;

		     $stmt=$this->db->prepare('SELECT * FROM ijin_tdp WHERE daftar_ke=:daftar_ke AND namaperusahaan=:namaperusahaan');
		  		$stmt->execute(array(
		  			':daftar_ke' => $daftar_ke,
					':namaperusahaan' => $namaperusahaan));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../?module=pengajuan-tanda-daftar-perusahaan";
			  </script>

			    <?php
			  }else{ //jika belum ada
		
			     $stmt= $this->db->prepare('INSERT INTO ijin_tdp VALUES(:id_tdp, :registrasi,:daftar_ke,:noktp,:nama,:tempat,:lahir,:alamat,:desapemohon,:kecamatanpemohon,:kabpemohon,:provinsipemohon,:kewarganegaraan,:nohp, :namaperusahaan, :alamatperusahaan, :desa, :kecamatan, :kab, :provinsi, :kodepos, :notelp, :nofax, :email, :namakelompok, :statusperusahaan, :induk, :tdp_no, :alper, :kelper, :kecper, :kabper, :provper, :lokasi, :desapab, :kecamatanpab, :kabupab, :provinsipab, :bank1, :bank2, :jumlahbank, :npwp, :bentukmodal, :tanggal_berdiri, :tanggal_kegiatan, :jangka, :kerjasama, :merk, :nomerk, :hakpaten, :nohakpaten, :nomor, :tglpengesahan, :namanotaris, :noubah, :tglubah, :namanotaris2, :nomenkuham, :tglmenkuham, :nomenkuhamatas, :nomenkuhamatas, :tglmenkuhamatas, :nolaporan, :tgllaporan, :nodireksi, :tgldireksi, :jenisijin1, :noijin1, :oleh1, :tglkeluar1, :masber1, :jenisijin2, :noijin2, :oleh2, :tglkeluar2, :masber2, :jenisijin3, :noijin3, :oleh3, :tglkeluar3, :masber3, :jenisijin4, :noijin4, :oleh4, :tglkeluar4, :masber4, :jenisijin5, :noijin5, :oleh5, :tglkeluar5, :masber5, :jenisijin6, :noijin6, :oleh6, :tglkeluar6, :masber6, :jenisijin7, :noijin7, :oleh7, :tglkeluar7, :masber7, :jenisijin8, :noijin8, :oleh8, :tglkeluar8, :masber8, :jenisijin9, :noijin9, :oleh9, :tglkeluar9, :masber9, :jenisijin10, :noijin10, :oleh10, :tglkeluar10, :masber10, :jumlahpimpinan, :dirut, :direktur, :komisaris, :kedudukan1, :namapejabat1, :tempatpejabat1, :tanggalpejabat1, :alamatpejabat1, :kodepospejabat1, :notelppejabat1, :kewarganegaraanpejabat1, :tanggalmenjabat1, :sahamdimiliki1, :modaldisetor1, :jabatanperusahaanlain1, :namaperusahaanlain1, :alamatperusahaanlain1, :kodeposperusahaanlain1, :notelpperusahaanlain1, :tanggalmenjabataperusahaanlain1, :kedudukan2, :namapejabat2, :tempatpejabat2, :tanggalpejabat2, :alamatpejabat2, :kodepospejabat2, :notelppejabat2, :kewarganegaraanpejabat2, :tanggalmenjabat2, :sahamdimiliki2, :modaldisetor2, :jabatanperusahaanlain2, :namaperusahaanlain2, :alamatperusahaanlain2, :kodeposperusahaanlain2, :notelpperusahaanlain2, :tanggalmenjabataperusahaanlain2, :kedudukan3, :namapejabat3, :tempatpejabat3, :tanggalpejabat3, :alamatpejabat3, :kodepospejabat3, :notelppejabat3, :kewarganegaraanpejabat3, :tanggalmenjabat3, :sahamdimiliki3, :modaldisetor3, :jabatanperusahaanlain3, :namaperusahaanlain3, :alamatperusahaanlain3, :kodeposperusahaanlain3, :notelpperusahaanlain3, :tanggalmenjabataperusahaanlain3, :kedudukan4, :namapejabat4, :tempatpejabat4, :tanggalpejabat4, :alamatpejabat4, :kodepospejabat4, :notelppejabat4, :kewarganegaraanpejabat4, :tanggalmenjabat4, :sahamdimiliki4, :modaldisetor4, :jabatanperusahaanlain4, :namaperusahaanlain4, :alamatperusahaanlain4, :kodeposperusahaanlain4, :notelpperusahaanlain4, :tanggalmenjabataperusahaanlain4, :kedudukan5, :namapejabat5, :tempatpejabat5, :tanggalpejabat5, :alamatpejabat5, :kodepospejabat5, :notelppejabat5, :kewarganegaraanpejabat5, :tanggalmenjabat5, :sahamdimiliki5, :modaldisetor5, :jabatanperusahaanlain5, :namaperusahaanlain5, :alamatperusahaanlain5, :kodeposperusahaanlain5, :notelpperusahaanlain5, :tanggalmenjabataperusahaanlain5, :namasaham1, :alamatsaham1, :kodesaham1, :notelpsaham1, :kewarganegaraansaham1, :npwpsaham1, :lembarsaham1, :rpsaham1, :namasaham2, :alamatsaham2, :kodesaham2, :notelpsaham2, :kewarganegaraansaham2, :npwpsaham2, :lembarsaham2, :rpsaham2, :namasaham3, :alamatsaham3, :kodesaham3, :notelpsaham3, :kewarganegaraansaham3, :npwpsaham3, :lembarsaham3, :rpsaham3, :namasaham4, :alamatsaham4, :kodesaham4, :notelpsaham4, :kewarganegaraansaham4, :npwpsaham4, :lembarsaham4, :rpsaham4, :namasaham5, :alamatsaham5, :kodesaham5, :notelpsaham5, :kewarganegaraansaham5, :npwpsaham5, :lembarsaham5, :rpsaham5, :namasaham6, :alamatsaham6, :kodesaham6, :notelpsaham6, :kewarganegaraansaham6, :npwpsaham6, :lembarsaham6, :rpsaham6, :namasaham7, :alamatsaham7, :kodesaham7, :notelpsaham7, :kewarganegaraansaham7, :npwpsaham7, :lembarsaham7, :rpsaham7, :namasaham8, :alamatsaham8, :kodesaham8, :notelpsaham8, :kewarganegaraansaham8, :npwpsaham9, :lembarsaham9, :rpsaham9, :namasaham10, :alamatsaham10, :kodesaham10, :notelpsaham10, :kewarganegaraansaham10, :npwpsaham10, :lembarsaham10, :rpsaham10, :usahapokok, :usahalain1, :usahalain2, :usahalain3, :usahalain4, :usahalain5, :produkutama, :produklain1, :produklain2, :produklain3, :produklain4, :produklain5, :rp, :modaldasar, :modalditempatkan, :modaldisetor, :banyaksaham, :nominalsaham, :asset, :wni, :wna, :totaltenaga, :rantai, :pihak3, :napercab1, :notdpcab1, :alpercab1, :kabcap1, :provcab1, :poscab1, :notelp1, :statuscab1, :kegiatancab1, :napercab2, :notdpcab2, :alpercab2, :kabcap2, :provcab2, :poscab2, :notelp2, :statuscab2, :kegiatancab2, :napercab3, :notdpcab3, :alpercab3, :kabcap3, :provcab3, :poscab3, :notelp3, :statuscab3, :kegiatancab3, :napercab4, :notdpcab4, :alpercab4, :kabcap4, :provcab4, :poscab4, :notelp4, :statuscab4, :kegiatancab4, :napercab5, :notdpcab5, :alpercab5, :kabcap5, :provcab5, :poscab5, :notelp5, :statuscab5, :kegiatancab5,    :pendaftaran,  :proses, :no_tdp, :terbit, :paraf)');
			     
			     $simpan = $stmt->execute(array(
					  ':id_tdp'=> $id_tdp,
					  ':registrasi'=> $registrasi,
					  ':daftar_ke'=> $daftar_ke,
					  ':noktp'=> ' ',
					  ':nama'=> ' ',
					':tempat'                         => 	' ',					
					':lahir'                          => 	' ',					
					':alamat'                         => 	' ',					
					':desapemohon'                    => 	' ',					
					':kecamatanpemohon'               => 	' ',					
					':kabpemohon'                     => 	' ',					
					':provinsipemohon'                => 	' ',					
					':kewarganegaraan'                => 	' ',					
					':nohp'                           => 	' ',					
					':namaperusahaan'=>               $namaperusahaan,
		  ':alamatperusahaan'=> 		              $alamatperusahaan,
		  ':desa'=> 		                          $desa,
		  ':kecamatan'=> 		                      $kecamatan,
		  ':kab'=> 		                      $kabupaten,
		  ':provinsi'=> 		                      $provinsi,
		  ':kodepos'=> 		                          $kodepos,
		  ':notelp'=> 		                          $notelp,
		  ':nofax'=> 		                          $nofax,
		  ':email'=> 		                          $email,
		  ':namakelompok'=> 		                  $namakelompok,
		  ':statusperusahaan'=> 		              $statusperusahaan,
		  ':induk'=> 		                          $namainduk,
		  ':tdp_no'=> 		                          $tdp_no,
		  ':alper'=> 		                          $alper,
		  ':kelper'=> 		                          $kelper,
		  ':kecper'=> 		                          $kecper,
		  ':kabper'=> 		                          $kabper,
		  ':provper'=> 		                          $provper,
		  ':lokasi'=> 		                          $lokasi,
		  ':desapab'=> 		                          $desapab,
		  ':kecamatanpab'=> 		                  $kecamatanpab,
		  ':kabupab'=> 		                          $kabupab,
		  ':provinsipab'=> 		                      $provinsipab,
		  ':bank1'=> 		                          $bank1,
		  ':bank2'=> 		                          $bank2,
		  ':jumlahbank'=> 		                      $jumlahbank,
		  ':npwp'=> 		                          $npwp,
		  ':bentukmodal'=> 		                      $bentukmodal,
		  ':tanggal_berdiri'=> 		                  $tanggal_berdiri,
		  ':tanggal_kegiatan'=> 		              $tanggal_kegiatan,
		  ':jangka'=> 		                          $jangka,
		  ':kerjasama'=> 		                      $kerjasama,
		  ':merk'=> 		                          $merk,
		  ':nomerk'=> 		                          $nomerk,
		  ':hakpaten'=> 		                      $hakpaten,
		  ':nohakpaten'=> 		                      $nohakpaten,
		  ':nomor'=> 		                          $nomor,
		  ':tglpengesahan'=> 		                  $tglpengesahan,
		  ':namanotaris'=> 		                      $namanotaris,
		  ':noubah'=> 		                          $noubah,
		  ':tglubah'=> 		                          $tglubah,
		  ':namanotaris2'=> 		                  $namanotaris2,
		  ':nomenkuham'=> 		                      $nomenkuham,
		  ':tglmenkuham'=> 		                      $tglmenkuham,
		  ':nomenkuhamatas'=> 		                  $nomenkuhamatas,
		  ':nomenkuhamatas'=> 		                  $nomenkuhamatas,
		  ':tglmenkuhamatas'=> 		                  $tglmenkuhamatas,
		  ':nolaporan'=> 		                      $nolaporan,
		  ':tgllaporan'=> 		                      $tgllaporan,
		  ':nodireksi'=> 		                      $nodireksi,
		  ':tgldireksi'=> 		                      $tgldireksi,
		  ':jenisijin1'=> 		                      $jenisijin1,
		  ':noijin1'=> 		                          $noijin1,
		  ':oleh1'=> 		                          $oleh1,
		  ':tglkeluar1'=> 		                      $tglkeluar1,
		  ':masber1'=> 		                          $masber1,
		  ':jenisijin2'=> 		                      $jenisijin2,
		  ':noijin2'=> 		                          $noijin2,
		  ':oleh2'=> 		                          $oleh2,
		  ':tglkeluar2'=> 		                      $tglkeluar2,
		  ':masber2'=> 		                          $masber2,
		  ':jenisijin3'=> 		                      $jenisijin3,
		  ':noijin3'=> 		                          $noijin3,
		  ':oleh3'=> 		                          $oleh3,
		  ':tglkeluar3'=> 		                      $tglkeluar3,
		  ':masber3'=> 		                          $masber3,
		  ':jenisijin4'=> 		                      $jenisijin4,
		  ':noijin4'=> 		                          $noijin4,
		  ':oleh4'=> 		                          $oleh4,
		  ':tglkeluar4'=> 		                      $tglkeluar4,
		  ':masber4'=> 		                          $masber4,
		  ':jenisijin5'=> 		                      $jenisijin5,
		  ':noijin5'=> 		                          $noijin5,
		  ':oleh5'=> 		                          $oleh5,
		  ':tglkeluar5'=> 		                      $tglkeluar5,
		  ':masber5'=> 		                          $masber5,
		  ':jenisijin6'=> 		                      $jenisijin6,
		  ':noijin6'=> 		                          $noijin6,
		  ':oleh6'=> 		                          $oleh6,
		  ':tglkeluar6'=> 		                      $tglkeluar6,
		  ':masber6'=> 		                          $masber6,
		  ':jenisijin7'=> 		                      $jenisijin7,
		  ':noijin7'=> 		                          $noijin7,
		  ':oleh7'=> 		                          $oleh7,
		  ':tglkeluar7'=> 		                      $tglkeluar7,
		  ':masber7'=> 		                          $masber7,
		  ':jenisijin8'=> 		                      $jenisijin8,
		  ':noijin8'=> 		                          $noijin8,
		  ':oleh8'=> 		                          $oleh8,
		  ':tglkeluar8'=> 		                      $tglkeluar8,
		  ':masber8'=> 		                          $masber8,
		  ':jenisijin9'=> 		                      $jenisijin9,
		  ':noijin9'=> 		                          $noijin9,
		  ':oleh9'=> 		                          $oleh9,
		  ':tglkeluar9'=> 		                      $tglkeluar9,
		  ':masber9'=> 		                          $masber9,
		  ':jenisijin10'=> 		                      $jenisijin10,
		  ':noijin10'=> 		                      $noijin10,
		  ':oleh10'=> 		                          $oleh10,
		  ':tglkeluar10'=> 		                      $tglkeluar10,
		  ':masber10'=> 		                      $masber10,
		  ':jumlahpimpinan'=> 		                  $jumlahpimpinan,
		  ':dirut'=> 		                          $dirut,
		  ':direktur'=> 		                      $direktur,
		  ':komisaris'=> 		                      $komisaris,
		  ':kedudukan1'=> 		                      $kedudukan1,
		  ':namapejabat1'=> 		                  $namapejabat1,
		  ':tempatpejabat1'=> 		                  $tempatpejabat1,
		  ':tanggalpejabat1'=> 		                  $tanggalpejabat1,
		  ':alamatpejabat1'=> 		                  $alamatpejabat1,
		  ':kodepospejabat1'=> 		                  $kodepospejabat1,
		  ':notelppejabat1'=> 		                  $notelppejabat1,
		  ':kewarganegaraanpejabat1'=> 		          $kewarganegaraanpejabat1,
		  ':tanggalmenjabat1'=> 		              $tanggalmenjabat1,
		  ':sahamdimiliki1'=> 		                  $sahamdimiliki1,
		  ':modaldisetor1'=> 		                  $modaldisetor1,
		  ':jabatanperusahaanlain1'=> 		          $jabatanperusahaanlain1,
		  ':namaperusahaanlain1'=> 		              $namaperusahaanlain1,
		  ':alamatperusahaanlain1'=> 		          $alamatperusahaanlain1,
		  ':kodeposperusahaanlain1'=> 		          $kodeposperusahaanlain1,
		  ':notelpperusahaanlain1'=> 		          $notelpperusahaanlain1,
		  ':tanggalmenjabataperusahaanlain1'=> 		  $tanggalmenjabataperusahaanlain1,
		  ':kedudukan2'=> 		                      $kedudukan2,
		  ':namapejabat2'=> 		                  $namapejabat2,
		  ':tempatpejabat2'=> 		                  $tempatpejabat2,
		  ':tanggalpejabat2'=> 		                  $tanggalpejabat2,
		  ':alamatpejabat2'=> 		                  $alamatpejabat2,
		  ':kodepospejabat2'=> 		                  $kodepospejabat2,
		  ':notelppejabat2'=> 		                  $notelppejabat2,
		  ':kewarganegaraanpejabat2'=> 		          $kewarganegaraanpejabat2,
		  ':tanggalmenjabat2'=> 		              $tanggalmenjabat2,
		  ':sahamdimiliki2'=> 		                  $sahamdimiliki2,
		  ':modaldisetor2'=> 		                  $modaldisetor2,
		  ':jabatanperusahaanlain2'=> 		          $jabatanperusahaanlain2,
		  ':namaperusahaanlain2'=> 		              $namaperusahaanlain2,
		  ':alamatperusahaanlain2'=> 		          $alamatperusahaanlain2,
		  ':kodeposperusahaanlain2'=> 		          $kodeposperusahaanlain2,
		  ':notelpperusahaanlain2'=> 		          $notelpperusahaanlain2,
		  ':tanggalmenjabataperusahaanlain2'=> 		  $tanggalmenjabataperusahaanlain2,
		  ':kedudukan3'=> 		                      $kedudukan3,
		  ':namapejabat3'=> 		                  $namapejabat3,
		  ':tempatpejabat3'=> 		                  $tempatpejabat3,
		  ':tanggalpejabat3'=> 		                  $tanggalpejabat3,
		  ':alamatpejabat3'=> 		                  $alamatpejabat3,
		  ':kodepospejabat3'=> 		                  $kodepospejabat3,
		  ':notelppejabat3'=> 		                  $notelppejabat3,
		  ':kewarganegaraanpejabat3'=> 		          $kewarganegaraanpejabat3,
		  ':tanggalmenjabat3'=> 		              $tanggalmenjabat3,
		  ':sahamdimiliki3'=> 		                  $sahamdimiliki3,
		  ':modaldisetor3'=> 		                  $modaldisetor3,
		  ':jabatanperusahaanlain3'=> 		          $jabatanperusahaanlain3,
		  ':namaperusahaanlain3'=> 		              $namaperusahaanlain3,
		  ':alamatperusahaanlain3'=> 		          $alamatperusahaanlain3,
		  ':kodeposperusahaanlain3'=> 		          $kodeposperusahaanlain3,
		  ':notelpperusahaanlain3'=> 		          $notelpperusahaanlain3,
		  ':tanggalmenjabataperusahaanlain3'=> 		  $tanggalmenjabataperusahaanlain3,
		  ':kedudukan4'=> 		                      $kedudukan4,
		  ':namapejabat4'=> 		                  $namapejabat4,
		  ':tempatpejabat4'=> 		                  $tempatpejabat4,
		  ':tanggalpejabat4'=> 		                  $tanggalpejabat4,
		  ':alamatpejabat4'=> 		                  $alamatpejabat4,
		  ':kodepospejabat4'=> 		                  $kodepospejabat4,
		  ':notelppejabat4'=> 		                  $notelppejabat4,
		  ':kewarganegaraanpejabat4'=> 		          $kewarganegaraanpejabat4,
		  ':tanggalmenjabat4'=> 		              $tanggalmenjabat4,
		  ':sahamdimiliki4'=> 		                  $sahamdimiliki4,
		  ':modaldisetor4'=> 		                  $modaldisetor4,
		  ':jabatanperusahaanlain4'=> 		          $jabatanperusahaanlain4,
		  ':namaperusahaanlain4'=> 		              $namaperusahaanlain4,
		  ':alamatperusahaanlain4'=> 		          $alamatperusahaanlain4,
		  ':kodeposperusahaanlain4'=> 		          $kodeposperusahaanlain4,
		  ':notelpperusahaanlain4'=> 		          $notelpperusahaanlain4,
		  ':tanggalmenjabataperusahaanlain4'=> 		  $tanggalmenjabataperusahaanlain4,
		  ':kedudukan5'=> 		                      $kedudukan5,
		  ':namapejabat5'=> 		                  $namapejabat5,
		  ':tempatpejabat5'=> 		                  $tempatpejabat5,
		  ':tanggalpejabat5'=> 		                  $tanggalpejabat5,
		  ':alamatpejabat5'=> 		                  $alamatpejabat5,
		  ':kodepospejabat5'=> 		                  $kodepospejabat5,
		  ':notelppejabat5'=> 		                  $notelppejabat5,
		  ':kewarganegaraanpejabat5'=> 		          $kewarganegaraanpejabat5,
		  ':tanggalmenjabat5'=> 		              $tanggalmenjabat5,
		  ':sahamdimiliki5'=> 		                  $sahamdimiliki5,
		  ':modaldisetor5'=> 		                  $modaldisetor5,
		  ':jabatanperusahaanlain5'=> 		          $jabatanperusahaanlain5,
		  ':namaperusahaanlain5'=> 		              $namaperusahaanlain5,
		  ':alamatperusahaanlain5'=> 		          $alamatperusahaanlain5,
		  ':kodeposperusahaanlain5'=> 		          $kodeposperusahaanlain5,
		  ':notelpperusahaanlain5'=> 		          $notelpperusahaanlain5,
		  ':tanggalmenjabataperusahaanlain5'=> 		  $tanggalmenjabataperusahaanlain5,
		  ':namasaham1'=> 		                      $namasaham1,
		  ':alamatsaham1'=> 		                  $alamatsaham1,
		  ':kodesaham1'=> 		                      $kodesaham1,
		  ':notelpsaham1'=> 		                  $notelpsaham1,
		  ':kewarganegaraansaham1'=> 		          $kewarganegaraansaham1,
		  ':npwpsaham1'=> 		                      $npwpsaham1,
		  ':lembarsaham1'=> 		                  $lembarsaham1,
		  ':rpsaham1'=> 		                      $rpsaham1,
		  ':namasaham2'=> 		                      $namasaham2,
		  ':alamatsaham2'=> 		                  $alamatsaham2,
		  ':kodesaham2'=> 		                      $kodesaham2,
		  ':notelpsaham2'=> 		                  $notelpsaham2,
		  ':kewarganegaraansaham2'=> 		          $kewarganegaraansaham2,
		  ':npwpsaham2'=> 		                      $npwpsaham2,
		  ':lembarsaham2'=> 		                  $lembarsaham2,
		  ':rpsaham2'=> 		                      $rpsaham2,
		  ':namasaham3'=> 		                      $namasaham3,
		  ':alamatsaham3'=> 		                  $alamatsaham3,
		  ':kodesaham3'=> 		                      $kodesaham3,
		  ':notelpsaham3'=> 		                  $notelpsaham3,
		  ':kewarganegaraansaham3'=> 		          $kewarganegaraansaham3,
		  ':npwpsaham3'=> 		                      $npwpsaham3,
		  ':lembarsaham3'=> 		                  $lembarsaham3,
		  ':rpsaham3'=> 		                      $rpsaham3,
		  ':namasaham4'=> 		                      $namasaham4,
		  ':alamatsaham4'=> 		                  $alamatsaham4,
		  ':kodesaham4'=> 		                      $kodesaham4,
		  ':notelpsaham4'=> 		                  $notelpsaham4,
		  ':kewarganegaraansaham4'=> 		          $kewarganegaraansaham4,
		  ':npwpsaham4'=> 		                      $npwpsaham4,
		  ':lembarsaham4'=> 		                  $lembarsaham4,
		  ':rpsaham4'=> 		                      $rpsaham4,
		  ':namasaham5'=> 		                      $namasaham5,
		  ':alamatsaham5'=> 		                  $alamatsaham5,
		  ':kodesaham5'=> 		                      $kodesaham5,
		  ':notelpsaham5'=> 		                  $notelpsaham5,
		  ':kewarganegaraansaham5'=> 		          $kewarganegaraansaham5,
		  ':npwpsaham5'=> 		                      $npwpsaham5,
		  ':lembarsaham5'=> 		                  $lembarsaham5,
		  ':rpsaham5'=> 		                      $rpsaham5,
		  ':namasaham6'=> 		                      $namasaham6,
		  ':alamatsaham6'=> 		                  $alamatsaham6,
		  ':kodesaham6'=> 		                      $kodesaham6,
		  ':notelpsaham6'=> 		                  $notelpsaham6,
		  ':kewarganegaraansaham6'=> 		          $kewarganegaraansaham6,
		  ':npwpsaham6'=> 		                      $npwpsaham6,
		  ':lembarsaham6'=> 		                  $lembarsaham6,
		  ':rpsaham6'=> 		                      $rpsaham6,
		  ':namasaham7'=> 		                      $namasaham7,
		  ':alamatsaham7'=> 		                  $alamatsaham7,
		  ':kodesaham7'=> 		                      $kodesaham7,
		  ':notelpsaham7'=> 		                  $notelpsaham7,
		  ':kewarganegaraansaham7'=> 		          $kewarganegaraansaham7,
		  ':npwpsaham7'=> 		                      $npwpsaham7,
		  ':lembarsaham7'=> 		                  $lembarsaham7,
		  ':rpsaham7'=> 		                      $rpsaham7,
		  ':namasaham8'=> 		                      $namasaham8,
		  ':alamatsaham8'=> 		                  $alamatsaham8,
		  ':kodesaham8'=> 		                      $kodesaham8,
		  ':notelpsaham8'=> 		                  $notelpsaham8,
		  ':kewarganegaraansaham8'=> 		          $kewarganegaraansaham8,
		  ':npwpsaham9'=> 		                      $npwpsaham9,
		  ':lembarsaham9'=> 		                  $lembarsaham9,
		  ':rpsaham9'=> 		                      $rpsaham9,
		  ':namasaham10'=> 		                      $namasaham10,
		  ':alamatsaham10'=> 		                  $alamatsaham10,
		  ':kodesaham10'=> 		                      $kodesaham10,
		  ':notelpsaham10'=> 		                  $notelpsaham10,
		  ':kewarganegaraansaham10'=> 		          $kewarganegaraansaham10,
		  ':npwpsaham10'=> 		                      $npwpsaham10,
		  ':lembarsaham10'=> 		                  $lembarsaham10,
		  ':rpsaham10'=> 		                      $rpsaham10,
		  ':usahapokok'=> 		                      $usahapokok,
		  ':usahalain1'=> 		                      $usahalain1,
		  ':usahalain2'=> 		                      $usahalain2,
		  ':usahalain3'=> 		                      $usahalain3,
		  ':usahalain4'=> 		                      $usahalain4,
		  ':usahalain5'=> 		                      $usahalain5,
		  ':produkutama'=> 		                      $produkutama,
		  ':produklain1'=> 		                      $produklain1,
		  ':produklain2'=> 		                      $produklain2,
		  ':produklain3'=> 		                      $produklain3,
		  ':produklain4'=> 		                      $produklain4,
		  ':produklain5'=> 		                      $produklain5,
		  ':rp'=> 		                              $rp,
		  ':modaldasar'=> 		                      $modaldasar,
		  ':modalditempatkan'=> 		              $modalditempatkan,
		  ':modaldisetor'=> 		                  $modaldisetor,
		  ':banyaksaham'=> 		                      $banyaksaham,
		  ':nominalsaham'=> 		                  $nominalsaham,
		  ':asset'=> 		                          $asset,
		  ':wni'=> 		                              $wni,
		  ':wna'=> 		                              $wna,
		  ':totaltenaga'=> 		                      $totaltenaga,
		  ':rantai'=> 		                          $rantai,
		  ':pihak3'=> 		                          $pihak3,
		  ':napercab1'=> 		                      $napercab1,
		  ':notdpcab1'=> 		                      $notdpcab1,
		  ':alpercab1'=> 		                      $alpercab1,
		  ':kabcap1'=> 		                          $kabcap1,
		  ':provcab1'=> 		                      $provcab1,
		  ':poscab1'=> 		                          $poscab1,
		  ':notelp1'=> 		                          $notelp1,
		  ':statuscab1'=> 		                      $statuscab1,
		  ':kegiatancab1'=> 		                  $kegiatancab1,
		  ':napercab2'=> 		                      $napercab2,
		  ':notdpcab2'=> 		                      $notdpcab2,
		  ':alpercab2'=> 		                      $alpercab2,
		  ':kabcap2'=> 		                          $kabcap2,
		  ':provcab2'=> 		                      $provcab2,
		  ':poscab2'=> 		                          $poscab2,
		  ':notelp2'=> 		                          $notelp2,
		  ':statuscab2'=> 		                      $statuscab2,
		  ':kegiatancab2'=> 		                  $kegiatancab2,
		  ':napercab3'=> 		                      $napercab3,
		  ':notdpcab3'=> 		                      $notdpcab3,
		  ':alpercab3'=> 		                      $alpercab3,
		  ':kabcap3'=> 		                          $kabcap3,
		  ':provcab3'=> 		                      $provcab3,
		  ':poscab3'=> 		                          $poscab3,
		  ':notelp3'=> 		                          $notelp3,
		  ':statuscab3'=> 		                      $statuscab3,
		  ':kegiatancab3'=> 		                  $kegiatancab3,
		  ':napercab4'=> 		                      $napercab4,
		  ':notdpcab4'=> 		                      $notdpcab4,
		  ':alpercab4'=> 		                      $alpercab4,
		  ':kabcap4'=> 		                          $kabcap4,
		  ':provcab4'=> 		                      $provcab4,
		  ':poscab4'=> 		                          $poscab4,
		  ':notelp4'=> 		                          $notelp4,
		  ':statuscab4'=> 		                      $statuscab4,
		  ':kegiatancab4'=> 		                  $kegiatancab4,
		  ':napercab5'=> 		                      $napercab5,
		  ':notdpcab5'=> 		                      $notdpcab5,
		  ':alpercab5'=> 		                      $alpercab5,
		  ':kabcap5'=> 		                          $kabcap5,
		  ':provcab5'=> 		                      $provcab5,
		  ':poscab5'=> 		                          $poscab5,
		  ':notelp5'=> 		                          $notelp5,
		  ':statuscab5'=> 		                      $statuscab5,
		  ':kegiatancab5'=> 		                  $kegiatancab5,
					  ':pendaftaran'=> date("Y-m-d"),
					  ':proses'=> 'Dalam Proses',
					  ':no_tdp'=> ' ',
					  ':terbit'=> '',
					  ':paraf'=> 'Validasi Formulir'));

	     		if($simpan) {
					$enc_reg = base64_encode($registrasi);		
					header("location:../?module=detail-tanda-daftar-perusahaan-saya&registrasi=$enc_reg");
				}
			}
		}

		public function tambah_pemohon($noktp, $nama, $alamat, $tmp_lahir, $tgl_lahir,  $npwp, $nohp, $username, $password)
		{
	  		$stmt=$this->db->prepare('SELECT * FROM pemohon WHERE noktp=:noktp');
	  		$stmt->execute(array(
	  			':noktp' => $noktp));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda sudah membuat akun sebelumnya")
			    window.location="../?module=daftar-akun";
			  </script>

			    <?php
			  }else{ //jika belum ada

		  		$stmt= $this->db->prepare('INSERT INTO pemohon VALUES(:noktp, :nama, :alamat, :tmp_lahir, :tgl_lahir, :npwp, :nohp, :username, :password)');
		  		
		  		$simpan=$stmt->execute(array(
					  ':noktp'=> $noktp,
					  ':nama'=> $nama,
					  ':alamat'=> $alamat,
					  ':tmp_lahir'=> $tmp_lahir,
					  ':tgl_lahir'=> $tgl_lahir,
					  ':npwp'=> $npwp,
					   ':nohp'=> $nohp,
					  ':username'=> $username,
					  ':password'=> $password));

		  		if($simpan) {
						$enc_reg = $noktp;
						header("location:../?module=selamat-datang&account=$enc_reg");
						header("Asdcasd");
			   }
			}
		}
		public function tampil_ho($registrasi)
		{
			$sql = "SELECT * FROM ijin_ho WHERE registrasi='$registrasi'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_imb($registrasi)
		{
			$sql = "SELECT * FROM ijin_imb WHERE registrasi='$registrasi'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_iumk($registrasi)
		{
			$sql = "SELECT * FROM ijin_iumk WHERE registrasi='$registrasi'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_siup($registrasi)
		{
			$sql = "SELECT * FROM ijin_siup WHERE registrasi='$registrasi'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_tdi($registrasi)
		{
			$sql = "SELECT * FROM ijin_tdi WHERE registrasi='$registrasi'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_tdp($registrasi)
		{
			$sql = "SELECT * FROM ijin_tdp WHERE registrasi='$registrasi'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_domisili($registrasi)
		{
			$sql = "SELECT * FROM nonijin_domisili WHERE registrasi='$registrasi'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_dispensasi($registrasi)
		{
			$sql = "SELECT * FROM nonijin_dispensasi WHERE registrasi='$registrasi'";
			$query = $this->db->query($sql);
			return $query;
		}


		
}
$db = new database();
 ?>

