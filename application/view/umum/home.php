 <style>
      #map {
        height: 50%;
      }
    </style>
    <script>

// This example enables Sign In by loading the Maps API with the signed_in
// parameter set to true. For example:
// https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: {lat: -6.943571,lng: 109.607904}
  });
  var marker = new google.maps.Marker({
  position:map,
  });

marker.setMap(map);
}

    </script>

<div>
<img src="gambar/rumahpaten1.jpg" style="margin-top: 50px; width: 100%; height: 100%;">
</div>  
<div class="container-fluid menu-utama">
    <div class="row" style="padding-top: 55px; margin: 0px auto;">
      <div class="col-sm-4">
          <h1 class="texttengah sub-menu" ><span class="glyphicon glyphicon-list"></span>
          <br>
          <a  href="?module=regulasi" class="sub-menu">Regulasi</a></h1>        
      </div> 
      <div class="col-sm-4">
          <h1 class="texttengah sub-menu"><span class="glyphicon glyphicon-search"></span>
          <br>
          <a  href="?module=cek-status" class="texttengah sub-menu">Cek Status</a></h1>        
      </div> 
      <div class="col-sm-4">
          <h1 class="texttengah sub-menu" ><span class="glyphicon glyphicon-user"></span>
          <br> 
          <a class="texttengah sub-menu" href="?module=faq">FAQ</a></h1>        
      </div> 
    </div>
</div>
<div class="container line-spacing">
 <hr class="line-title">
<h3 class="coloumn-title">Konsep Dasar</h3>
      <p class="pindex">Pelayanan Administrasi Terpadu Kecamatan (PATEN) adalah penyelenggaraan pelayanan publik di kecamatan yang proses pengelolaannya, mulai dari permohonan sampai ke tahap terbitnya dokumen dilakukan dalam satu tempat melalui satu loket pelayanan. PATEN diselenggarakan dengan maksud untuk mewujudkan kecamatan sebagai pusat pelayanan masyarakat, secara kondisi geografis daerah akan lebih efektif dan efisien di layani melalui kecamatan. PATEN diselenggarakan dengan tujuan untuk meningkatkan kualitas pelayanan dan mendekatkan pelayanan kepada masyarakat. Peningkatan kualitas pelayanan ini terutama terlihat dari aspek waktu dan biaya pelayanan. Melalui penyelenggaraan PATEN, Lokasi kecamatan jelas lebih dekat relatif mudah di jangkau masyarakat bila dibandingkan dengan (ibukota) kabupaten dan waktu yang diperlukan juga menjadi lebih sedikit. </p>

      <p class="pindex">Dengan terbitnya Peraturan Pemerintah Nomor 19 Tahun 2008 tentang Kecamatan sepatutnya meningkatkan semangat dari camat dan aparatur kecamatan untuk melaksanakan tugasnya secara optimal. dalam penyelenggaraan otonomi mengingat posisi strategisnya itu maka camat perlu lebih aktif dalam upaya mengoptimalkan pelaksanaan tugasnya dalam rangka mewujudkan  pelayanan kepada masyarakat secara professional, transparan, efektif dan efisien sebagai tolak ukur terselenggaranya tata kelola pemerintahan yang baik (good governance). bagi percepatan reformasi birokrasi di daerah dalam mewujudkan tata kelola pemerintahan daerah yang baik (good local governance) untuk meningkatan kualitas penyelenggaraan pelayanan publik.</p>
</div>

<div class="container line-spacing">
    <hr class="line-title">
    <h3 class="coloumn-title">Visi / Misi</h3>  
    <div class="row">
        <div class="col-sm-4 ">
          <h2 class="texttengah visi-misi"><span class="glyphicon glyphicon-user"></span></h2>
          <h4 class="texttengah "><b>PROFESIONAL</b></h4>
          <h5 class="texttengah misi">Memberikan pelayanan kepada masyarakat sebaik mungkin</h5>
        </div>
        <div class="col-sm-4 ">
          <h2 class="texttengah visi-misi"><span class="glyphicon glyphicon-star"></span></h2>
          <h4 class="texttengah"><b>INOVATIF</b></h4>
          <h5 class="texttengah misi">Berusaha berinovasi dalam memberikan pelayanan kepada masyarakat</h5>
        </div>
        <div class="col-sm-4 ">
          <h2 class="texttengah visi-misi"><span class="glyphicon glyphicon-refresh"></span></h2>
          <h4 class="texttengah"><b>SANTUN</b></h4>
          <h5 class="texttengah misi">Senyum, salam, sapa kepada setiap masyarakat yang datang</h5>
        </div>
        <div class="col-sm-4 ">
          <h2 class="texttengah visi-misi"><span class="glyphicon glyphicon-hourglass"></span></h2>
          <h4 class="texttengah"><b>MUDAH</b></h4>
          <h5 class="texttengah misi">Berusaha selalu memberikan kemudahan bagi pemohon perijinan</h5>
        </div>
        <div class="col-sm-4 ">
          <h2 class="texttengah visi-misi"><span class="glyphicon glyphicon-th-large"></span></h2>
          <h4 class="texttengah"><b>AKUNTABEL</b></h4>
          <h5 class="texttengah misi">Memberikan solusi terbaik dalam proses perijinan</h5>
        </div>
    </div>
</div>

    <div class="container"> 
    <hr class="line-title">
    <h3 class="coloumn-title">Proses Pengajuan Perijinan</h3>  
    <br>
        <img src="gambar/paten.png" class="img-responsive" alt="Tahapan Pengajuan Permohonan Perijinan" >
        <br>
        <br>
        <br>
    </div>
  
<!--      <h3 class="h3-responsive">Kantor kami Berada pada Kantor Kecamatan Bojong</h3> -->
  <div id="map" class="container"></div>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA22jea3kEeY1gLniXpwPqZq5dxQFwVZeU&signed_in=true&callback=initMap"></script>
  
