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
  
	  public function hapus_ho($registrasi, $syarat)
	  {
	  	$syarat = $_GET['syarat'];
	    $stmt = $this->db->prepare("DELETE FROM ijin_ho WHERE registrasi=:registrasi");
		unlink("../../admin/module/ho/syarat/$syarat");
	    $stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_imb($registrasi,$syarat)
	  {
	  	$syarat = $_GET['syarat'];
	  	$stmt = $this->db->prepare("DELETE FROM ijin_imb WHERE registrasi=:registrasi");
	  	unlink("../../admin/module/imb/syarat/$syarat");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_iumk($registrasi, $syarat)
	  {
	  	$syarat = $_GET['syarat'];
	  	$stmt = $this->db->prepare("DELETE FROM ijin_iumk WHERE registrasi=:registrasi");
	  	unlink("../../admin/module/iumk/syarat/$syarat");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_siup($registrasi, $syarat)
	  {
	  	$syarat = $_GET['syarat'];
	  	$stmt = $this->db->prepare("DELETE FROM ijin_siup WHERE registrasi=:registrasi");
	  	unlink("../../admin/module/siup/syarat/$syarat");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_tdi($registrasi, $syarat)
	  {
	  	$syarat = $_GET['syarat'];
	  	$stmt = $this->db->prepare("DELETE FROM ijin_tdi WHERE registrasi=:registrasi");
	  	unlink("../../admin/module/tdi/syarat/$syarat");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_domisili($registrasi, $syarat)
	  {
	  	$syarat = $_GET['syarat'];
	  	$stmt = $this->db->prepare("DELETE FROM nonijin_domisili WHERE registrasi=:registrasi");
	  	unlink("../../admin/module/domisili/syarat/$syarat");
	  	$stmt->execute(array(':registrasi' => $registrasi)); 
	  }

	  public function hapus_dispensasi($registrasi, $syarat)
	  {
	  	$syarat = $_GET['syarat'];
	  	$stmt = $this->db->prepare("DELETE FROM nonijin_dispensasi WHERE registrasi=:registrasi");
	  	unlink("../../admin/module/dispensasi/syarat/$syarat");
	  	$stmt->execute(array(':registrasi' => $registrasi));
	  }

	  public function hapus_admin($nik)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM admin WHERE nik=:nik");
	  	$stmt->execute(array(':nik' => $nik));
	  }

	  public function hapus_hukum($id)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM dasar_hukum WHERE id=:id");
	  	$stmt->execute(array(':id' => $id));
	  }

	  public function hapus_faq($id)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM faq WHERE id=:id");
	  	$stmt->execute(array(':id' => $id));
	  }

	  public function hapus_persyaratan($id)
	  {
	  	$stmt = $this->db->prepare("DELETE FROM persyaratan WHERE id=:id");
	  	$stmt->execute(array(':id' => $id));
	  }

	  public function hapus_penanda($id, $tanda_tangan)
	  {
	  	$tanda_tangan = $_GET['tanda_tangan'];
	  	$stmt = $this->db->prepare("DELETE FROM tanda_tangan WHERE id=:id");
	  	unlink("../../admin/module/penanda/ttd/$tanda_tangan");
	  	$stmt->execute(array(':id' => $id));
	  }

	  public function hapus_regulasi($id_regulasi, $file)
	  {
	  	
	  	$stmt = $this->db->prepare("DELETE FROM regulasi WHERE id_regulasi=:id_regulasi");
	  	unlink("file/$file");
	  	$stmt->execute(array(':id_regulasi' => $id_regulasi));
	  }

	  public function hapus_pemohon($noktp)
	  {
	  	
	  	$stmt = $this->db->prepare("DELETE FROM pemohon WHERE noktp=:noktp");
	  	$stmt->execute(array(':noktp' => $noktp));
	  }

	 //  public function no_ho()
	 //  {
		// $no_urut ="SELECT * FROM ijin_ho WHERE registrasi=:'registrasi'";
	 //    $query = $this->db->query($no_urut);
	 //    $cek = "SELECT registrasi FROM ijin_ho ORDER BY id_ho DESC LIMIT 1";
	 //    $cek = $this->db->query($cek);
	 //    $ex = explode('/', $cek['registrasi']);
	 //    if (date('d')=='01'){
	 //        $a = str_pad(1,3,'0', STR_PAD_LEFT);
	 //    }
	 //    else{
	 //        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
	 //    }

	 //    $b = 'HO/PATEN/Bojong/KabPekalongan';
	 //    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
	 //    $d = date('Y');
	 //    $registrasi = $a.'/'.$b.'/'.$c[date('n')].'/'.$d;
   
  
	 //  }

	  public function tambah_ho($id_ho, $noktp, $perihal, $daftar_ke,  $namausaha, $jenisusaha, $alamatusaha, $luas, $modal, $karyawan, $syarat, $proses, $no_ho, $terbit, $paraf)
	  {
	  	$cekKTP = $this->db->prepare("SELECT * FROM pemohon WHERE noktp=:noktp");
			$cekKTP->execute(array(
				'noktp' => $noktp));
			if($cekKTP->rowCount() > 0){ //jika Noktp sudah ada

	  	$file = $_FILES['syarat']['name'];
			$syarat = explode('.', $_FILES['syarat']['name'])[1];
		    $file_loc = $_FILES['syarat']['tmp_name'];
			$folder="../../admin/module/ho/syarat/";
			$final_file = $noktp.'.'.$syarat;
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

  		$stmt=$this->db->prepare('SELECT * FROM ijin_ho WHERE noktp=:noktp AND namausaha=:namausaha AND daftar_ke=:daftar_ke');
  		$stmt->execute(array(
  			':noktp' => $noktp,
			':namausaha' => $namausaha,
			':daftar_ke' => $daftar_ke));
		  //cek validasi 
		if($stmt->rowCount() > 0){ //jika sudah ada
		  ?>
		  <script>
		    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
		    window.location="../../admin/media.php?module=tambah-izin-gangguan";
		  </script>

		    <?php
		  }else{ //jika belum ada
		  		if (move_uploaded_file($file_loc,$folder.$final_file)){
				$stmt = $this->db->prepare("INSERT INTO ijin_ho VALUES(:id_ho, :noktp, :registrasi, :perihal, :daftar_ke,  :namausaha, :jenisusaha, :alamatusaha, :luas, :modal, :karyawan, :syarat, :pendaftaran, :proses, :no_ho, :terbit, :paraf)");		

				$simpan = $stmt->execute(array(
					':id_ho' => $id_ho,
					':noktp' => $noktp,
					':registrasi' => $registrasi,
					':perihal' => $perihal,
					  ':daftar_ke'=> $daftar_ke,
					':namausaha' => $namausaha,
					':jenisusaha' => $jenisusaha,
					':alamatusaha' => $alamatusaha,
					':luas' => $luas,
					':modal' => $modal,
					':karyawan' => $karyawan,
					 ':syarat'=> $final_file,
					':pendaftaran' => date("Y-m-d"),
					':proses' => $proses,
					':no_ho' => $no_ho,
					':terbit' => $terbit,
					':paraf' => $paraf));

					if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../../admin/media.php?module=preview-izin-gangguan&registrasi=$enc_reg");
					}
				}
		    }
		    }else { //jika noktp belum ada
				?>
			  <script>
			    alert("Oops,NOKTP tidak terdaftar")
			    window.location="../../admin/media.php?module=tambah-izin-gangguan";
			  </script>
			  <?php
			}
		 }

		 public function tambah_dispensasi($id_dispensasi, $noktp, $kades, $tgldes, $nodes, $namawanita, $tempatwanita, $tanggalwanita, $usiawanita, $pekerjaanwanita, $statuswanita, $alamatwanita, $namapria, $tempatpria, $tanggalpria, $usiapria, $pekerjaanpria, $statuspria, $alamatpria, $tanggalakad, $tempatakad,  $alasan, $syarat, $proses,  $paraf, $no_dispensasi, $terbit)
		{
			$cekKTP = $this->db->prepare("SELECT * FROM pemohon WHERE noktp=:noktp");
			$cekKTP->execute(array(
				'noktp' => $noktp));
			if($cekKTP->rowCount() > 0){ //jika Noktp sudah ada

			$file = $_FILES['syarat']['name'];
			$syarat = explode('.', $_FILES['syarat']['name'])[1];
		    $file_loc = $_FILES['syarat']['tmp_name'];
			$folder="../../admin/module/dispensasi/syarat/";
			$final_file = $noktp.'.'.$syarat;
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

	        $stmt=$this->db->prepare('SELECT * FROM nonijin_dispensasi WHERE noktp=:noktp AND namapria=:namapria AND namawanita=:namawanita');
	  		$stmt->execute(array(
	  			':noktp' => $noktp,
				':namapria' => $namapria,
				':namawanita' => $namawanita));
	 		 //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-dispensasi";
			  </script>

			    <?php
			  }else{ //jika belum ada
				if (move_uploaded_file($file_loc,$folder.$final_file)){
		        $stmt= $this->db->prepare('INSERT INTO nonijin_dispensasi VALUES(:id_dispensasi, :noktp, :registrasi, :kades, :tgldes, :nodes, :namawanita, :tempatwanita, :tanggalwanita, :usiawanita, :pekerjaanwanita, :statuswanita, :alamatwanita, :namapria, :tempatpria, :tanggalpria, :usiapria, :pekerjaanpria, :statuspria, :alamatpria, :tanggalakad, :tempatakad, :alasan, :syarat, :pendaftaran, :proses, :no_dispensasi, :terbit, :paraf)');

		        $simpan = $stmt->execute(array(
					 ':id_dispensasi' => $id_dispensasi,
					 ':noktp' => $noktp,
					 ':registrasi' => $registrasi,
					 ':kades' => $kades,
					 ':tgldes' => $tgldes, 
					 ':nodes' => $nodes,
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
					  ':syarat'=> $final_file,
					 ':pendaftaran' => date("Y-m-d"),
					 ':proses' => $proses,
					 ':no_dispensasi' => $no_dispensasi, 
					 ':terbit' => $terbit,
					 ':paraf' => $paraf));
		        if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../../admin/media.php?module=preview-dispensasi&registrasi=$enc_reg");
				}
			}
  			}
  			}else { //jika noktp belum ada
				?>
			  <script>
			    alert("Oops,NOKTP tidak terdaftar")
			    window.location="../../admin/media.php?module=tambah-dispensasi";
			  </script>
			  <?php
			}
		}

		public function tambah_domisili( $id_domisili, $noktp, $proses, $paraf, $no_domisili, $terbit)
		{
			$cekKTP = $this->db->prepare("SELECT * FROM pemohon WHERE noktp=:noktp");
			$cekKTP->execute(array(
				'noktp' => $noktp));
			if($cekKTP->rowCount() > 0){ //jika Noktp sudah ada

			$file = $_FILES['syarat']['name'];
			$syarat = explode('.', $_FILES['syarat']['name'])[1];
		    $file_loc = $_FILES['syarat']['tmp_name'];
			$folder="../../admin/module/domisili/syarat/";
			$final_file = $noktp.'.'.$syarat;
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
	
				if (move_uploaded_file($file_loc,$folder.$final_file)){
		  		$stmt= $this->db->prepare('INSERT INTO nonijin_domisili VALUES(:id_domisili, :noktp, :registrasi, :syarat, :pendaftaran, :proses, :no_domisili, :terbit, :paraf)');

		  		$simpan = $stmt->execute(array(
					  ':id_domisili' => $id_domisili,
					  ':noktp' => $noktp,
					  ':registrasi' => $registrasi,
					  ':syarat'=> $final_file,
					  ':pendaftaran' => date('Y-m-d'),
					  ':proses' => $proses,
					  ':no_domisili' => $no_domisili,
					  ':terbit' => $terbit,
					  ':paraf' => $paraf));

		  		if($simpan) {
						$enc_reg = base64_encode($registrasi);		
						header("location:../../admin/media.php?module=preview-domisili&registrasi=$enc_reg");
				}
			}
			}else { //jika noktp belum ada
				?>
			  <script>
			    alert("Oops,NOKTP tidak terdaftar")
			    window.location="../../admin/media.php?module=tambah-domisili";
			  </script>
			  <?php
			}
		}
		

		public function tambah_imb($id_imb, $noktp, $maksud, $daftar_ke,  $penggunaan, $lokasi, $luastanah, $luasbangunan, $status, $syarat, $proses, $paraf, $terbit)
		{ 
			if($proses == '3'){
				$stmt = $this->db->prepare('SELECT * FROM ijin_imb WHERE no_imb=:no_imb');
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$cek = $this->db->query("SELECT no_imb FROM ijin_imb ORDER BY id_imb DESC LIMIT 1");
				$cek = $cek->fetch(PDO::FETCH_ASSOC);
				$ex = explode('/', $cek['no_imb']);  // 
				$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
				$noinduk = '640';
				$bulan = $c[date('n')]; //13
				if ($bulan == 'I'){
				$a = str_pad(1 ,3 ,'0', STR_PAD_LEFT);
				}
				else{
				$a = str_pad($ex[1]+1,3,'0', STR_PAD_LEFT); 
				}
				$reg = 'IMB/KECBOJONG';

				$tahun = date('Y');
				$no_imb = $noinduk.'/'.$a.'/'.$reg.'/'.$bulan.'/'.$tahun;

			}else{
				$no_imb=' ';
			}
			$cekKTP = $this->db->prepare("SELECT * FROM pemohon WHERE noktp=:noktp");
			$cekKTP->execute(array(
				'noktp' => $noktp));
			$no_download = $this->db->query("SELECT registrasi FROM ijin_imb ORDER BY id_imb DESC LIMIT 1");
	  		$no_download = $no_download->fetch(PDO::FETCH_ASSOC);
			if($cekKTP->rowCount() > 0){ //jika Noktp sudah ada
				$ex = explode('/', $no_download['registrasi']);
		  		if (date('d')=='01'){
		      		$a = str_pad(1,3,'0', STR_PAD_LEFT);
		  		}
		   		else{
		       		$a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
		        }
		        $b = 'reg_imb';
		        $tahun = date('Y');
				$file = $_FILES['syarat']['name'];
			$syarat = explode('.', $_FILES['syarat']['name'])[1];
		    $file_loc = $_FILES['syarat']['tmp_name'];
			$folder="../../admin/module/imb/syarat/";
			$final_file = $a.'_' .$b.'_'.$tahun.'.'.$syarat;

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

	  		$stmt=$this->db->prepare('SELECT * FROM ijin_imb WHERE noktp=:noktp AND daftar_ke=:daftar_ke AND lokasi=:lokasi');
	  		$stmt->execute(array(
	  			':noktp' => $noktp,
				':daftar_ke' => $daftar_ke,
				':lokasi' => $lokasi));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-izin-mendirikan-bangunan";
			  </script>

			    <?php
			  }else{ //jika belum ada
			  	if (move_uploaded_file($file_loc,$folder.$final_file)){
		  		$stmt= $this->db->prepare('INSERT INTO ijin_imb VALUES(:id_imb, :noktp, :registrasi, :daftar_ke, :maksud, :penggunaan, :lokasi, :luastanah, :luasbangunan, :status, :syarat, :pendaftaran, :proses, :no_imb, :terbit, :paraf)');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id_imb'=> $id_imb,
					  ':noktp'=> $noktp,
					  ':registrasi'=> $registrasi,
					  ':daftar_ke'=> $daftar_ke,
					   ':maksud'=> $maksud,
					  ':penggunaan'=> $penggunaan,
					  ':lokasi'=> $lokasi,
					  ':luastanah'=> $luastanah,
					  ':luasbangunan'=> $luasbangunan,
					  ':status'=> $status,
					  ':syarat'=> $final_file,
					  ':pendaftaran'=> date('Y-m-d'),
					  ':proses'=> $proses,
					  ':paraf'=> $paraf,
					  ':no_imb'=> $no_imb,
					  ':terbit'=> $terbit));

		  		if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../../admin/media.php?module=preview-izin-mendirikan-bangunan&registrasi=$enc_reg");
			   }
			}
			}
			}else { //jika noktp belum ada
				?>
			  <script>
			    alert("Oops,NOKTP tidak terdaftar")
			    window.location="../../admin/media.php?module=tambah-izin-mendirikan-bangunan";
			  </script>
			  <?php
			}
		}

		public function tambah_iumk($id_iumk, $noktp, $daftar_ke, $namausaha, $jenisusaha, $bentukusaha, $saranausaha, $alamatusaha, $notelp, $modal, $syarat, $proses, $paraf, $no_iumk, $terbit)
		{
			$cekKTP = $this->db->prepare("SELECT * FROM pemohon WHERE noktp=:noktp");
			$cekKTP->execute(array(
				'noktp' => $noktp));
			if($cekKTP->rowCount() > 0){ //jika Noktp sudah ada

			$file = $_FILES['syarat']['name'];
			$syarat = explode('.', $_FILES['syarat']['name'])[1];
		    $file_loc = $_FILES['syarat']['tmp_name'];
			$folder="../../admin/module/iumk/syarat/";
			$final_file = $noktp.'.'.$syarat;
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

	    	$stmt=$this->db->prepare('SELECT * FROM ijin_iumk WHERE noktp=:noktp AND daftar_ke-:daftar_ke AND namausaha=:namausaha');
	  		$stmt->execute(array(
	  			':noktp' => $noktp,
				':daftar_ke' => $daftar_ke,
				':namausaha' => $namausaha));
			//cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-izin-usaha-mikro-dan-kecil";
			  </script>

			    <?php
			  }else{ //jika belum ada
				if (move_uploaded_file($file_loc,$folder.$final_file)){
				$stmt= $this->db->prepare('INSERT INTO ijin_iumk VALUES(:id_iumk, :noktp, :registrasi, :daftar_ke, :namausaha, :jenisusaha, :bentukusaha, :saranausaha, :alamatusaha, :notelp, :modal, :syarat, :pendaftaran, :proses, :no_iumk, :terbit, :paraf)');

				$simpan = $stmt->execute(array(
					  ':id_iumk' => $id_iumk,
					  ':noktp' => $noktp,
					  ':registrasi' => $registrasi,
					  ':daftar_ke'=> $daftar_ke,
					  ':namausaha' => $namausaha,
					  ':jenisusaha' => $jenisusaha,
					  ':bentukusaha' => $bentukusaha,
					  ':saranausaha' => $saranausaha,
					  ':alamatusaha' => $alamatusaha,
					  ':notelp' => $notelp,
					  ':modal' => $modal,
					  ':syarat'=> $final_file,
					  ':pendaftaran' => date('Y-m-d'),
					  ':proses' => $proses,
					  ':no_iumk' => $no_iumk,
					  ':terbit' => $terbit,
					  ':paraf' => $paraf));

				if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../../admin/media.php?module=preview-izin-usaha-mikro-dan-kecil&registrasi=$enc_reg");
			   }	
			   }	
			}
			}else { //jika noktp belum ada
				?>
			  <script>
			    alert("Oops,NOKTP tidak terdaftar")
			    window.location="../../admin/media.php?module=tambah-izin-usaha-mikro-dan-kecil";
			  </script>
			  <?php
			}
		}

		public function tambah_siup( $id_siup, $noktp, $daftar_ke,  $namaperusahaan, $jenis, $alamatperusahaan, $jabatan, $notelp, $nofax, $modal, $carapemasaran, $kbli, $barjas, $masber, $syarat, $proses, $paraf, $terbit)
		{
			if($proses == '3'){
			    $stmt = $db->prepare('SELECT * FROM ijin_siup WHERE registrasi=:registrasi');
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$cek = $db->query("SELECT no_siup FROM ijin_siup ORDER BY id_siup DESC LIMIT 1");
				$cek = $cek->fetch(PDO::FETCH_ASSOC);
				$ex = explode('/', $cek['no_siup']);
				$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
				$bulan = $c[date('n')];
				    if ($bulan =='I'){
				    $a = str_pad(1,3,'0', STR_PAD_LEFT);
				    }
				    else{
				    $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
				    }
				$reg = 'Reg_SIUP/PATEN/Bojong/KabPekalongan';
				$tahun = date('Y');
				$no_siup = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
			}else{
				$no_siup=' ';
			}

			$cekKTP = $this->db->prepare("SELECT * FROM pemohon WHERE noktp=:noktp");
			$cekKTP->execute(array(
				'noktp' => $noktp));
			if($cekKTP->rowCount() > 0){ //jika Noktp sudah ada
			$ex = explode('/', $no_download['registrasi']);
		  		if (date('d')=='01'){
		      		$a = str_pad(1,3,'0', STR_PAD_LEFT);
		  		}
		   		else{
		       		$a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT);
		        }
		        $b = 'reg_siup';
		        $tahun = date('Y');
				$file = $_FILES['syarat']['name'];
			$syarat = explode('.', $_FILES['syarat']['name'])[1];
		    $file_loc = $_FILES['syarat']['tmp_name'];
			$folder="../../admin/module/siup/syarat/";
			$final_file = $a.'_' .$b.'_'.$tahun.'.'.$syarat;
			
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

	  		$stmt=$this->db->prepare('SELECT * FROM ijin_siup WHERE noktp=:noktp AND daftar_ke=:daftar_ke AND namaperusahaan=:namaperusahaan');
	  		$stmt->execute(array(
	  			':noktp' => $noktp,
				':daftar_ke' => $daftar_ke,
				':namaperusahaan' => $namaperusahaan));
			//cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-surat-izin-usaha-perdagangan";
			  </script>

			    <?php
			  }else{ //jika belum ada
				if (move_uploaded_file($file_loc,$folder.$final_file)){
		  		$stmt= $this->db->prepare('INSERT INTO ijin_siup VALUES(:id_siup, :noktp, :registrasi, :daftar_ke, :namaperusahaan, :jenis, :alamatperusahaan, :jabatan, :notelp, :nofax, :modal, :carapemasaran, :kbli, :barjas, :masber, :syarat, :pendaftaran, :proses, :no_siup, :terbit, :paraf)');
				$simpan = $stmt->execute(array(	  
					  ':id_siup' => $id_siup,
					  ':noktp' => $noktp,
					  ':registrasi' => $registrasi,
					  ':daftar_ke'=> $daftar_ke,
					  ':namaperusahaan' => $namaperusahaan,
					  ':jenis' => $jenis,
					  ':alamatperusahaan' => $alamatperusahaan,
					   ':jabatan' => $jabatan,
					  ':notelp' => $notelp,
					  ':nofax' => $nofax,
					  ':modal' => $modal,
					  ':carapemasaran' => $carapemasaran,
					  ':kbli' => $kbli,
					  ':barjas' => $barjas,
					  ':masber' => $masber,
					  ':syarat'=> $final_file,
					  ':pendaftaran' => date('Y-m-d'),
					  ':proses' => $proses,
					  ':no_siup' => $no_siup,
					  ':terbit' => $terbit,
					  ':paraf' => $paraf));
				if($simpan) {
						$enc_reg = base64_encode($registrasi);
						header("location:../../admin/media.php?module=preview-surat-izin-usaha&registrasi=$enc_reg");
			   }
			}
			}
			}else { //jika noktp belum ada
				?>
			  <script>
			    alert("Oops,NOKTP tidak terdaftar")
			    window.location="../../admin/media.php?module=tambah-surat-izin-usaha-perdagangan";
			  </script>
			  <?php
			}
		}

		public function tambah_tdi($id_tdi, $noktp, $daftar_ke, $namaperusahaan, $alamatperusahaan, $notelp, $nofax, $npwp, $nipik, $lokasi, $desa, $kecamatan,  $kabupaten, $provinsi, $kepemilikan, $luasbangunan, $luastanah, $mesinutama, $mesinpembantu, $tenaga, $kbli, $komoditi, $kapasitas, $kebutuhan, $jumlah, $laki, $wanita, $nilai, $merk, $nomerk, $syarat, $proses, $no_tdi, $terbit, $paraf)
		{
			$file = $_FILES['syarat']['name'];
			$syarat = explode('.', $_FILES['syarat']['name'])[1];
		    $file_loc = $_FILES['syarat']['tmp_name'];
			$folder="../../admin/module/tdi/syarat/";
			$final_file = $noktp.'.'.$syarat;
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

		     $stmt=$this->db->prepare('SELECT * FROM ijin_tdi WHERE noktp=:noktp AND daftar_ke=:daftar_ke AND namaperusahaan=:namaperusahaan');
		  		$stmt->execute(array(
		  			':noktp' => $noktp,
					':daftar_ke' => $daftar_ke,
					':namaperusahaan' => $namaperusahaan));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-tanda-daftar-industri";
			  </script>

			    <?php
			  }else{ //jika belum ada
				if (move_uploaded_file($file_loc,$folder.$final_file)){
			     $stmt= $this->db->prepare('INSERT INTO ijin_tdi VALUES(:id_tdi, :noktp, :registrasi, :daftar_ke, :namaperusahaan, :alamatperusahaan, :notelp, :nofax, :npwp, :nipik, :lokasi, :desa, :kecamatan, :kabupaten, :provinsi, :kepemilikan, :luasbangunan, :luastanah, :mesinutama, :mesinpembantu, :tenaga, :kbli, :komoditi, :kapasitas, :kebutuhan, :jumlah, :laki, :wanita, :nilai, :merk, :nomerk,  :syarat, :pendaftaran,  :proses, :no_tdi, :terbit, :paraf)');
			     $simpan = $stmt->execute(array(
					  ':id_tdi'=> $id_tdi,
					  ':noktp'=> $noktp,
					  ':registrasi'=> $registrasi,
					  ':daftar_ke'=> $daftar_ke,
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
					  ':syarat'=> $final_file,
					  ':pendaftaran'=> date("Y-m-d"),
					  ':proses'=> $proses,
					  ':no_tdi'=> $no_tdi,
					  ':terbit'=> $terbit,
					  ':paraf'=> $paraf));

	     		if($simpan) {
					$enc_reg = base64_encode($registrasi);		
					header("location:../../admin/media.php?module=preview-tanda-daftar-industri&registrasi=$enc_reg");
				}
			}
			}
		}

		public function tambah_hukum($id, $isi, $kategori)
		{
			$stmt=$this->db->prepare('SELECT * FROM dasar_hukum WHERE isi=:isi AND kategori=:kategori');
	  		$stmt->execute(array(
	  			':isi' => $isi,
				':kategori' => $kategori));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-dasar-hukum";
			  </script>

			    <?php
			  }else{ //jika belum ada

		  		$stmt= $this->db->prepare('INSERT INTO dasar_hukum VALUES(:id, :isi, :kategori)');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id'=> $id,
					  ':isi'=> $isi,
					  ':kategori'=> $kategori));

		  		if($simpan) {
						header("location:../../admin/media.php?module=dasar-hukum&id=1");
			   }
			}
		}
		public function tambah_faq($id, $pertanyaan, $jawaban, $kategori)
		{
			$stmt=$this->db->prepare('SELECT * FROM faq WHERE pertanyaan=:pertanyaan AND kategori=:kategori');
	  		$stmt->execute(array(
	  			':pertanyaan' => $pertanyaan,
				':kategori' => $kategori));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Permohonan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-faq";
			  </script>

			    <?php
			  }else{ //jika belum ada

		  		$stmt= $this->db->prepare('INSERT INTO faq VALUES(:id, :pertanyaan, :jawaban, :kategori)');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id'=> $id,
					  ':pertanyaan'=> $pertanyaan,
					  ':jawaban'=> $jawaban,
					  ':kategori'=> $kategori));

		  		if($simpan) {
						header("location:../../admin/media.php?module=faq&id=1");
			   }
			}
		}

		public function tambah_persyaratan($id, $isi, $kategori)
		{
			$stmt=$this->db->prepare('SELECT * FROM persyaratan WHERE isi=:isi AND kategori=:kategori');
	  		$stmt->execute(array(
	  			':isi' => $isi,
				':kategori' => $kategori));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Persyaratan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-persyaratan";
			  </script>

			    <?php
			  }else{ //jika belum ada

		  		$stmt= $this->db->prepare('INSERT INTO persyaratan VALUES(:id, :isi, :kategori)');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id'=> $id,
					  ':isi'=> $isi,
					  ':kategori'=> $kategori));

		  		if($simpan) {
						header("location:../../admin/media.php?module=persyaratan&id=1");
			   }
			}
		}

		public function tambah_penanda($id, $nip, $nama, $jabatan, $tanda_tangan)
		{
			$file = $_FILES['tanda_tangan']['name'];
			$tanda_tangan = explode('.', $_FILES['tanda_tangan']['name'])[1];
		    $file_loc = $_FILES['tanda_tangan']['tmp_name'];
			$folder="../../admin/module/penanda/ttd/";
			$final_file = $nip.'.'.$tanda_tangan;

			$stmt=$this->db->prepare('SELECT * FROM tanda_tangan WHERE nip=:nip AND nama=:nama');
	  		$stmt->execute(array(
	  			':nip' => $nip,
				':nama' => $nama));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Persyaratan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-penanda-tangan";
			  </script>

			    <?php
			  }
			  if (move_uploaded_file($file_loc,$folder.$final_file)){
				$stmt= $this->db->prepare('INSERT INTO tanda_tangan VALUES(:id, :nip, :nama, :jabatan, :tanda_tangan)');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id'=> $id,
					  ':nip'=> $nip,
					  ':nama'=> $nama,
					  ':jabatan'=> $jabatan,
					  ':tanda_tangan'=> $final_file));

		  		if($simpan) {
						header("location:../../admin/media.php?module=penanda-tangan&id=1");
			   	}
			}
		}

		public function tambah_regulasi($id_regulasi, $judul, $kategori, $deskripsi, $file)
		{
			$file = $_FILES['file']['name'];
		    $file_loc = $_FILES['file']['tmp_name'];;
			$folder="../../admin/module/regulasi/file/";
			$final_file = $file;

			$stmt=$this->db->prepare('SELECT * FROM regulasi WHERE judul=:judul AND kategori=:kategori');
	  		$stmt->execute(array(
	  			':judul' => $judul,
				':kategori' => $kategori));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Yang Sama Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-regulasi";
			  </script>

			    <?php
			  }

			  if (move_uploaded_file($file_loc,$folder.$final_file)){
				$stmt= $this->db->prepare('INSERT INTO regulasi VALUES(:id_regulasi, :judul, :kategori, :deskripsi, :file)');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id_regulasi'=> $id_regulasi,
					  ':judul'=> $judul,
					  ':kategori'=> $kategori,
					  ':deskripsi'=> $deskripsi,
					  ':file'=> $file));

		  		if($simpan) {
						header("location:../../admin/media.php?module=regulasi&id=1");
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
			    window.location="../?module=tambah-pemohon";
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
						header("location:../../admin/media.php?module=data-pemohon&id=1");
			   }
			}
		}

		public function tampil_ho($registrasi)
		{
			$sql = "SELECT ijin_ho.*, pemohon.noktp, pemohon.nama, pemohon.alamat, pemohon.nohp, pemohon.pekerjaan FROM ijin_ho 
			INNER JOIN pemohon ON ijin_ho.noktp = pemohon.noktp WHERE registrasi='$registrasi'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_imb($registrasi)
		{
			$sql = "SELECT ijin_imb.*, pemohon.noktp, pemohon.nama, pemohon.alamat, pemohon.nohp FROM ijin_imb 
			INNER JOIN pemohon ON ijin_imb.noktp = pemohon.noktp WHERE registrasi='$registrasi'";
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

		public function tampil_admin($nik)
		{
			$sql = "SELECT * FROM admin WHERE nik='$nik'";
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

		public function tampil_hukum($id)
		{
			$sql = "SELECT * FROM dasar_hukum WHERE id='$id'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_faq($id)
		{
			$sql = "SELECT * FROM faq WHERE id='$id'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tampil_persyaratan($id)
		{
			$sql = "SELECT * FROM persyaratan WHERE id='$id'";
			$query = $this->db->query($sql);
			return $query;
		}
		public function tampil_penanda($id)
		{
			$sql = "SELECT * FROM tanda_tangan WHERE id='$id'";
			$query = $this->db->query($sql);
			return $query;
		}
		public function tampil_regulasi($id_regulasi)
		{
			$sql = "SELECT * FROM regulasi WHERE id_regulasi='$id_regulasi'";
			$query = $this->db->query($sql);
			return $query;
		}


		public function tampil_pemohon($noktp)
		{
			$sql = "SELECT * FROM pemohon WHERE noktp='$noktp'";
			$query = $this->db->query($sql);
			return $query;
		}

		public function tambah_admin($nik, $noktp, $nama, $alamat, $nohp, $username, $password, $akses)
		{
		  		$stmt= $this->db->prepare('INSERT INTO admin VALUES(:nik, :noktp, :nama, :alamat, :nohp, :username, :password, :akses)');
		  		
		  		$simpan=$stmt->execute(array(
					  ':nik'=> $nik,
					  ':noktp'=> $noktp,
					  ':nama'=> $nama,
					  ':alamat'=> $alamat,
					  ':nohp'=> $nohp,
					  ':username'=> $username,
					  ':password'=> $password,
					  ':akses'=> $akses));

		  		if($simpan) {
						$enc_reg = base64_encode($username);
						header("location:../../admin/media.php?module=data-admin&id=1");
			   }
		}

		

		public function update_ho($id_ho, $noktp,  $registrasi, $perihal, $daftar_ke, $namausaha, $jenisusaha, $alamatusaha, $luas, $modal, $karyawan, $proses, $terbit, $paraf)
		{
		    $stmt = $this->db->prepare('SELECT * FROM ijin_ho WHERE registrasi=:registrasi');
		    $row = $stmt->fetch(PDO::FETCH_ASSOC);
		    $cek = $this->db->query("SELECT no_ho FROM ijin_ho ORDER BY id_ho DESC LIMIT 1");
		    $cek = $cek->fetch(PDO::FETCH_ASSOC);
		    $ex = explode('/', $cek['no_ho']);
		    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
		    $bulan = $c[date('n')];
		        if ($bulan =='I'){
		        $a = str_pad(1,3,'0', STR_PAD_LEFT);
		        }
		        else{
		        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
		        }
		    $reg = 'Reg_HO/PATEN/Bojong/KabPekalongan';
		    $tahun = date('Y');
		    $no_ho = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;


		 $stmt= $this->db->prepare('UPDATE ijin_ho SET noktp=:noktp, registrasi=:registrasi, perihal=:perihal, daftar_ke=:daftar_ke, namausaha=:namausaha, jenisusaha=:jenisusaha, alamatusaha=:alamatusaha, luas=:luas, modal=:modal, karyawan=:karyawan, proses=:proses, no_ho=:no_ho, terbit=:terbit, paraf=:paraf WHERE id_ho=:id_ho ');
		 $update= $stmt->execute(array(
			  ':id_ho' => $id_ho,
			  ':noktp' => $noktp,
			  ':registrasi' => $registrasi,
			  ':perihal' => $perihal,
			  ':daftar_ke' => $daftar_ke,
			  ':namausaha' => $namausaha,
			  ':jenisusaha' => $jenisusaha,
			  ':alamatusaha' => $alamatusaha,
			  ':luas' => $luas,
			  ':modal' => $modal,
			  ':karyawan' => $karyawan,
			  ':proses' => $proses,
			  ':no_ho' => $no_ho,
			  ':terbit' => $terbit,
			  ':paraf' => $paraf));
		 if($update) {
					$enc_reg = base64_encode($no_ho);
					header("location:../../admin/media.php?module=preview-izin-gangguan&registrasi=$enc_reg");
				}
		
		}

		public function update_imb($id_imb, $noktp, $registrasi, $maksud, $penggunaan, $lokasi, $luastanah, $luasbangunan, $status, $proses, $terbit, $paraf)
		{
			if($proses == '3'){
				$stmt = $this->db->prepare('SELECT * FROM ijin_imb WHERE no_imb=:no_imb');
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$cek = $this->db->query("SELECT no_imb FROM ijin_imb ORDER BY id_imb DESC LIMIT 1");
				$cek = $cek->fetch(PDO::FETCH_ASSOC);
				$ex = explode('/', $cek['no_imb']);  // 
				$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
				$noinduk = '640';
				$bulan = $c[date('n')]; //13
				if ($bulan == 'I'){
				$a = str_pad(1 ,3 ,'0', STR_PAD_LEFT);
				}
				else{
				$a = str_pad($ex[1]+1,3,'0', STR_PAD_LEFT); 
				}
				$reg = 'IMB/KECBOJONG';

				$tahun = date('Y');
				$no_imb = $noinduk.'/'.$a.'/'.$reg.'/'.$bulan.'/'.$tahun;

			}else{
				$no_imb=' ';
			}
		  $stmt= $this->db->prepare('UPDATE ijin_imb SET noktp=:noktp, registrasi=:registrasi, maksud=:maksud, penggunaan=:penggunaan, lokasi=:lokasi, luastanah=:luastanah, luasbangunan=:luasbangunan, status=:status, proses=:proses, no_imb=:no_imb, terbit=:terbit, paraf=:paraf WHERE id_imb=:id_imb ');
		   		$update= $stmt->execute(array(
				  ':id_imb' => $id_imb,
				  ':noktp' => $noktp,
				  ':registrasi' => $registrasi,
				  ':maksud' => $maksud,
				  ':penggunaan' => $penggunaan,
				  ':lokasi' => $lokasi,
				  ':luastanah' => $luastanah,
				  ':luasbangunan' => $luasbangunan,
				  ':status' => $status,
				  ':proses' => $proses,
				  ':no_imb' => $no_imb, 
				  ':terbit' => $terbit,
				  ':paraf' => $paraf));
		 		if($update) {
					$enc_reg = base64_encode($no_imb);
					header("location:../../admin/media.php?module=preview-izin-mendirikan-bangunan&registrasi=$enc_reg");
				}		
		}

		public function update_iumk($id_iumk, $noktp, $registrasi,  $namausaha, $jenisusaha, $bentukusaha, $saranausaha, $alamatusaha, $notelp, $modal, $proses, $paraf, $no_iumk, $terbit)
		{
		    $cek = $this->db->query("SELECT no_iumk FROM ijin_iumk ORDER BY id_iumk DESC LIMIT 1");
		    $cek = $cek->fetch(PDO::FETCH_ASSOC);
		    $ex = explode('/', $cek['no_iumk']);
		    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
		    $bulan = $c[date('n')];
		        if ($bulan =='I'){
		        $a = str_pad(1,3,'0', STR_PAD_LEFT);
		        }
		        else{
		        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
		        }
		    $reg = 'IUMK/3/I/KabPekalongan';
		    $tahun = date('Y');
		    $no_iumk = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
		  $stmt= $this->db->prepare('UPDATE ijin_iumk SET noktp=:noktp, registrasi=:registrasi, namausaha=:namausaha, jenisusaha=:jenisusaha, bentukusaha=:bentukusaha, saranausaha=:saranausaha, alamatusaha=:alamatusaha, notelp=:notelp, modal=:modal, proses=:proses, no_iumk=:no_iumk, terbit=:terbit, paraf=:paraf WHERE id_iumk=:id_iumk ');
		   		$update= $stmt->execute(array(
				   	  ':id_iumk' => $id_iumk,
					  ':noktp' => $noktp,
					  ':registrasi' => $registrasi,
					  ':namausaha' => $namausaha,
					  ':jenisusaha' => $jenisusaha,
					  ':bentukusaha' => $bentukusaha,
					  ':saranausaha' => $saranausaha,
					  ':alamatusaha' => $alamatusaha,
					  ':notelp' => $notelp,
					  ':modal' => $modal,
					  ':proses' => $proses,
					  ':paraf' => $paraf,
					  ':no_iumk' => $no_iumk,
					  ':terbit' => $terbit ));
		 		if($update) {
					$enc_reg = base64_encode($no_imb);
					header("location:../../admin/media.php?module=izin-usaha-mikro-dan-kecil&registrasi=$enc_reg");
				}
		}

		public function update_siup($id_siup, $noktp, $registrasi, $namaperusahaan, $jenis, $alamatperusahaan, $jabatan, $notelp, $nofax, $modal, $carapemasaran, $kbli, $barjas, $masber, $proses, $no_siup, $terbit, $paraf   )
		{
		    $cek = $this->db->query("SELECT no_siup FROM ijin_siup ORDER BY id_siup DESC LIMIT 1");
		    $cek = $cek->fetch(PDO::FETCH_ASSOC);
		    $ex = explode('/', $cek['no_siup']);
		    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
		    $bulan = $c[date('n')];
		        if ($bulan =='I'){
		        $a = str_pad(1,3,'0', STR_PAD_LEFT);
		        }
		        else{
		        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
		        }
		    $reg = 'IUMK/3/I/KabPekalongan';
		    $tahun = date('Y');
		    $no_siup = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
		  $stmt= $this->db->prepare('UPDATE ijin_siup SET noktp=:noktp, registrasi=:registrasi, namaperusahaan=:namaperusahaan, jenis=:jenis, alamatperusahaan=:alamatperusahaan, jabatan=:jabatan, notelp=:notelp, nofax=:nofax, modal=:modal, carapemasaran=:carapemasaran, kbli=:kbli, barjas=:barjas, masber=:masber,   proses=:proses, no_siup=:no_siup, terbit=:terbit, paraf=:paraf WHERE id_siup=:id_siup');
		   		$update= $stmt->execute(array(
				   	 ':id_siup' => $id_siup,
					  ':noktp' => $noktp,
					  ':registrasi' => $registrasi,
					  ':namaperusahaan' => $namaperusahaan,
					  ':jenis' => $jenis,
					  ':alamatperusahaan' => $alamatperusahaan,
					  ':jabatan' => $jabatan,
					  ':notelp' => $notelp,
					  ':nofax' => $nofax,
					  ':modal' => $modal,
					  ':carapemasaran' => $carapemasaran,
					  ':kbli' => $kbli,
					  ':barjas' => $barjas,
					  ':masber' => $masber,
					  ':proses' => $proses,
					  ':no_siup' => $no_siup,
					  ':terbit' => $terbit,
					  ':paraf' =>$paraf));

		 		if($update) {
					$enc_reg = base64_encode($no_siup);
					header("location:../../admin/media.php?module=preview-izin-mendirikan-bangunan&registrasi=$enc_reg");
				}
		
		}
		public function update_tdi($id_tdi, $noktp, $registrasi, $namaperusahaan, $alamatperusahaan, $notelp, $nofax, $npwp, $nipik, $lokasi, $desa, $kecamatan, $kabupaten, $provinsi, $kepemilikan, $luasbangunan, $luastanah, $mesinutama, $mesinpembantu, $tenaga, $kbli, $komoditi, $kapasitas, $kebutuhan, $jumlah, $laki, $wanita, $nilai, $merk, $nomerk, $proses, $no_tdi, $terbit, $paraf)
		{
		    $cek = $this->db->query("SELECT no_tdi FROM ijin_tdi ORDER BY id_tdi DESC LIMIT 1");
		    $cek = $cek->fetch(PDO::FETCH_ASSOC);
		    $ex = explode('/', $cek['no_tdi']);
		    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
		    $bulan = $c[date('n')];
		        if ($bulan =='I'){
		        $a = str_pad(1,3,'0', STR_PAD_LEFT);
		        }
		        else{
		        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
		        }
		    $reg = 'IUMK/3/I/KabPekalongan';
		    $tahun = date('Y');
		    $no_tdi = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
		  $stmt= $this->db->prepare('UPDATE ijin_tdi SET noktp=:noktp, registrasi=:registrasi, namaperusahaan=:namaperusahaan, alamatperusahaan=:alamatperusahaan, notelp=:notelp, nofax=:nofax, npwp=:npwp, nipik=:nipik, lokasi=:lokasi, desa=:desa, kecamatan=:kecamatan, kabupaten=:kabupaten, provinsi=:provinsi, kepemilikan=:kepemilikan, luasbangunan=:luasbangunan, luastanah=:luastanah, mesinutama=:mesinutama, mesinpembantu=:mesinpembantu, tenaga=:tenaga, kbli=:kbli, komoditi=:komoditi, kapasitas=:kapasitas, kebutuhan=:kebutuhan, jumlah=:jumlah, laki=:laki, wanita=:wanita, nilai=:nilai, merk=:merk, nomerk=:nomerk, proses=:proses, no_tdi=:no_tdi, terbit=:terbit, paraf=:paraf WHERE id_tdi=:id_tdi');
		   		$update= $stmt->execute(array(
				   	 ':id_tdi'=> $id_tdi,
					  ':noktp'=> $noktp,
					  ':registrasi'=> $registrasi,
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
					  ':proses'=> $proses,
					  ':no_tdi'=> $no_tdi,
					  ':terbit'=> $terbit,
					  ':paraf'=> $paraf));

		 		if($update) {
					$enc_reg = base64_encode($no_tdi);
					header("location:../../admin/media.php?module=preview-tanda-daftar-industri&registrasi=$enc_reg");
				}
		
		}
		public function update_domisili($id_domisili, $noktp, $registrasi, $proses, $no_domisili, $terbit, $paraf)
		{
		    $cek = $this->db->query("SELECT no_domisili FROM nonijin_domisili ORDER BY id_domisili DESC LIMIT 1");
		    $cek = $cek->fetch(PDO::FETCH_ASSOC);
		    $ex = explode('/', $cek['no_domisili']);
		    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
		    $bulan = $c[date('n')];
		        if ($bulan =='I'){
		        $a = str_pad(1,3,'0', STR_PAD_LEFT);
		        }
		        else{
		        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
		        }
		    $reg = 'IUMK/3/I/KabPekalongan';
		    $tahun = date('Y');
		    $no_domisili = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
		  $stmt= $this->db->prepare('UPDATE nonijin_domisili SET noktp=:noktp, registrasi=:registrasi, proses=:proses, no_domisili=:no_domisili, terbit=:terbit, paraf=:paraf WHERE id_domisili=:id_domisili');
		   		$update= $stmt->execute(array(
				   	 ':id_domisili' => $id_domisili,
					 ':noktp' => $noktp,
					 ':registrasi' => $registrasi,
					 ':proses' => $proses,
					 ':no_domisili' => $no_domisili,
					 ':terbit' => $terbit,
					 ':paraf' => $paraf));
		 		if($update) {
					$enc_reg = base64_encode($no_domisili);
					header("location:../../admin/media.php?module=domisili&registrasi=$enc_reg");
				}
		
		}

		public function update_dispensasi( $id_dispensasi, $noktp, $registrasi, $kades, $tgldes, $nodes, $namawanita, $tempatwanita, $tanggalwanita, $usiawanita, $pekerjaanwanita, $statuswanita, $alamatwanita, $namapria, $tempatpria, $tanggalpria, $usiapria, $pekerjaanpria, $statuspria, $alamatpria, $tanggalakad, $tempatakad,  $alasan, $proses,  $paraf, $no_dispensasi, $terbit)
		{
		    $cek = $this->db->query("SELECT no_dispensasi FROM nonijin_dispensasi ORDER BY id_dispensasi DESC LIMIT 1");
		    $cek = $cek->fetch(PDO::FETCH_ASSOC);
		    $ex = explode('/', $cek['no_dispensasi']);
		    $c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
		    $bulan = $c[date('n')];
		        if ($bulan =='I'){
		        $a = str_pad(1,3,'0', STR_PAD_LEFT);
		        }
		        else{
		        $a = str_pad($ex['0']+1,3,'0', STR_PAD_LEFT); 
		        }
		    $reg = 'IUMK/3/I/KabPekalongan';
		    $tahun = date('Y');
		    $no_dispensasi = $a.'/'.$reg.'/'.$bulan.'/'.$tahun;
		  $stmt= $this->db->prepare('UPDATE nonijin_dispensasi SET noktp=:noktp, registrasi=:registrasi, kades=:kades, tgldes=:tgldes, nodes=:nodes, namawanita=:namawanita, tempatwanita=:tempatwanita, tanggalwanita=:tanggalwanita, usiawanita=:usiawanita, pekerjaanwanita=:pekerjaanwanita, statuswanita=:statuswanita, alamatwanita=:alamatwanita, namapria=:namapria, tempatpria=:tempatpria, tanggalpria=:tanggalpria, usiapria=:usiapria, pekerjaanpria=:pekerjaanpria, statuspria=:statuspria, alamatpria=:alamatpria, tanggalakad=:tanggalakad, tempatakad=:tempatakad, alasan=:alasan, proses=:proses,  paraf=:paraf, no_dispensasi=:no_dispensasi, terbit=:terbit WHERE id_dispensasi=:id_dispensasi ');
		   		$update= $stmt->execute(array(
				   	 ':id_dispensasi' => $id_dispensasi,
					 ':noktp' => $noktp,
					 ':registrasi' => $registrasi,
					 ':kades' => $kades,
					 ':tgldes' => $tgldes, 
					 ':nodes' => $nodes,
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
					 ':proses' => $proses,
					 ':no_dispensasi' => $no_dispensasi, 
					 ':terbit' => $terbit,
					 ':paraf' => $paraf));
		 		if($update) {
					$enc_reg = base64_encode($no_dispensasi);
					header("location:../../admin/media.php?module=preview-dispensasi&registrasi=$enc_reg");
				}
		
		}

		public function update_admin( $id, $username, $password, $nik, $nama, $alamat)
		{
		    $stmt= $this->db->prepare('UPDATE admin SET  username=:username, password=:password, nik=:nik, nama=:nama, alamat=:alamat WHERE id=:id');
		   		$update= $stmt->execute(array(
				   	   		':id'=> $id,
						  ':username' => $username,
						  ':password' => $password,
						  ':nik' => $nik,
						  ':nama' => $nama,
						  ':alamat' => $alamat));
		}

		public function update_hukum($id, $isi, $kategori)
		{
		    
		  $stmt= $this->db->prepare('UPDATE dasar_hukum SET isi=:isi, kategori=:kategori WHERE id=:id');
		   		$update= $stmt->execute(array(
				  ':id' => $id,
				  ':isi' => $isi,
				  ':kategori' => $kategori));
		 		if($update) {
					$enc_reg = base64_encode($id);
					header("location:../../admin/media.php?module=dasar_hukum");
			}		
		}

		public function update_faq($id, $pertanyaan, $jawaban, $kategori)
		{
		    
		  $stmt= $this->db->prepare('UPDATE faq SET pertanyaan=:pertanyaan, jawaban=:jawaban, kategori=:kategori WHERE id=:id');
		   		$update= $stmt->execute(array(
				  ':id' => $id,
				  ':pertanyaan' => $pertanyaan,
				  ':jawaban' => $jawaban,
				  ':kategori' => $kategori));
		 		if($update) {
					header("location:../../admin/media.php?module=faq");
			}		
		}

		public function update_persyaratan($id, $isi, $kategori)
		{
		    
		  $stmt= $this->db->prepare('UPDATE persyaratan SET isi=:isi, kategori=:kategori WHERE id=:id');
		   		$update= $stmt->execute(array(
				  ':id' => $id,
				  ':isi' => $isi,
				  ':kategori' => $kategori));
		 		if($update) {
					$enc_reg = base64_encode($id);
					header("location:../../admin/media.php?module=persyaratan");
			}		
		}

		public function update_penanda($id, $nip, $nama, $jabatan, $tanda_tangan)
		{
			$file = $_FILES['tanda_tangan']['name'];
			$tanda_tangan = explode('.', $_FILES['tanda_tangan']['name'])[1];
		    $file_loc = $_FILES['tanda_tangan']['tmp_name'];
			$folder="../../admin/module/penanda/ttd/";
			$final_file = $nip.'.'.$tanda_tangan;

			$stmt=$this->db->prepare('SELECT * FROM tanda_tangan WHERE nip=:nip AND nama=:nama');
	  		$stmt->execute(array(
	  			':nip' => $nip,
				':nama' => $nama));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Persyaratan Lebih dari sekali")
			    window.location="../../admin/media.php?module=tambah-penanda-tangan";
			  </script>

			    <?php
			  }
			  if ($_FILES['tanda_tangan']['size'] == 0) {
			  	$stmt= $this->db->prepare('UPDATE tanda_tangan SET nip=:nip, nama=:nama, jabatan=:jabatan WHERE id=:id');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id'=> $id,
					  ':nip'=> $nip,
					  ':nama'=> $nama,
					  ':jabatan'=> $jabatan));

		  		if($simpan) {
						header("location:../../admin/media.php?module=penanda-tangan&id=1");
			   	}
			  }else
			  if (move_uploaded_file($file_loc,$folder.$final_file)){
				$stmt= $this->db->prepare('UPDATE tanda_tangan SET nip=:nip, nama=:nama, jabatan=:jabatan, tanda_tangan=:tanda_tangan WHERE id=:id');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id'=> $id,
					  ':nip'=> $nip,
					  ':nama'=> $nama,
					  ':jabatan'=> $jabatan,
					  ':tanda_tangan'=> $final_file));

		  		if($simpan) {
						header("location:../../admin/media.php?module=penanda-tangan&id=1");
			   	}
			}
		}

		public function update_regulasi($id_regulasi, $judul, $kategori, $deskripsi, $file)
		{
			$file = $_FILES['file']['name'];
		    $file_loc = $_FILES['file']['tmp_name'];
			$folder="../../admin/module/regulasi/file/";
			$final_file = $file;

			$stmt=$this->db->prepare('SELECT * FROM regulasi WHERE judul=:judul AND kategori=:kategori');
	  		$stmt->execute(array(
	  			':judul' => $judul,
				':kategori' => $kategori));
			  //cek validasi 
			if($stmt->rowCount() > 0){ //jika sudah ada
			  ?>
			  <script>
			    alert("Oops, Sepertinya anda mencoba menginputkan Data Lebih dari sekali")
			    window.location="../../admin/media.php?module=edit-regulasi";
			  </script>

			    <?php
			  }
			  if (move_uploaded_file($file_loc,$folder.$final_file)){
				$stmt= $this->db->prepare('UPDATE regulasi SET judul=:judul, kategori=:kategori, deskripsi=:deskripsi, file=:file WHERE id_regulasi=:id_regulasi');
		  		
		  		$simpan=$stmt->execute(array(
					  ':id_regulasi'=> $id_regulasi,
					  ':judul'=> $judul,
					  ':kategori'=> $kategori,
					  ':deskripsi'=> $deskripsi,
					  ':file'=> $file));

		  		if($simpan) {
						header("location:../../admin/media.php?module=regulasi&id=1");
			   	}
			}
		}

		public function update_pemohon($noktp, $nama, $alamat, $tmp_lahir, $tgl_lahir,  $npwp, $nohp, $username, $password)
		{
	  		
		  		$stmt= $this->db->prepare('UPDATE pemohon SET nama=:nama, alamat=:alamat, tmp_lahir=:tmp_lahir, tgl_lahir=:tgl_lahir, npwp=:npwp, nohp=:nohp, username=:username, password=:password WHERE noktp=:noktp');
		  		
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
						header("location:../../admin/media.php?module=data-pemohon&id=1");
			   }
		}
}
$db = new database();
 ?>

