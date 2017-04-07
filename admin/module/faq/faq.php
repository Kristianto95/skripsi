<?php
include "../application/model/config.php";

$start=0;
$batas_page=3;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$batas_page;
}


$query=$db->prepare('SELECT * FROM faq ORDER BY id DESC LIMIT :start, :batas_page');
$query->bindValue(":start", $start, PDO::PARAM_INT);
$query->bindValue(":batas_page", $batas_page, PDO::PARAM_INT);
$query->execute();

$stmt = $db->query("select * from faq");
$rows = $stmt->rowCount();
$total=ceil($rows/$batas_page);

?>
<h3 class="text-center"><b>FREQUENLY ASKED QUESTION</b></h3>
<div class="container"> 
  <div class="col-sm-9" style="padding-top:10px;"> 
      <a class="btn btn-primary" href="media.php?module=tambah-faq"><span class="glyphicon glyphicon-plus"></span>Tambah Data </a>
  </div>
  <div class="col-sm-3">
    <form name="formPencarian" method="post" >
            <div>
              <div class="input-group">
                 <div class="input-group-addon">
                     <input type="text" name="keyword" placeholder="Cari Berdasarkan Kategori"  class="form-control" ><span><button type="submit" name="cari" value="cari"  class="btn btn-info glyphicon glyphicon-search " /></button></span>
                 </div>
              </div>
            </div>
            </form>
  </div>
</div>
    <br>
<div>
  <?php
if(isset($_POST['cari'])){
        $pencarian="%".$_POST['keyword']."%";
        try{
            $cari=$db->prepare("SELECT * FROM `faq` WHERE `kategori` LIKE :keyword;");
            $cari->BindParam(":keyword",$pencarian);
            $cari->execute();
            if($cari->rowCount()<1){
                echo "<i> Tidak ada hasil untuk dasar hukum <b>\"".$_POST['keyword']."\"</i></b>";
            }else{
                // echo "<i> Hasil pencarian dengan Nomor id <b>\"".$_POST['keyword']."\"</b></i><br>";
               ?>
   <div class="table-responsive" >
     <table class="table table-striped">
        <tr>
          <th>No</th>
          <th>Pertanyaan</th>
          <th>Jawaban</th>
          <th>Kategori</th>
          <th colspan="2" style="text-align: center;">Aksi</th>
      </tr>
      <?php
        $no = $start+1;
        while($row=$cari->fetch()){
      ?>
      <tr>
        <td><?php echo $no++; ?>;</td>
        <td><?php echo $row['pertanyaan'];?></td>
        <td><?php echo $row['jawaban'];?></td>
        <td><?php echo $row['kategori'];?></td>
        
        <td>
          <a class="btn btn-info" href="media.php?module=edit-faq&id=<?php echo base64_encode($row['id']);?>"><span class="glyphicon glyphicon-file"> </span> Edit</a>
        </td>
        <td>
          <a class="btn btn-danger"   onclick="return confirm('Yakin ingin menghapus data dengan pertanyaan : <?php echo $row['pertanyaan'] ?> ')" href="../application/controller/controller_admin.php?aksi=hapus_faq&id=<?php echo $row['id']; ?>"> <span class="glyphicon glyphicon-remove"> </span> Hapus</a>
        </td>
      </tr>     
   </table>
                  <?php
                }
            }   
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>
    </div>
<hr>
  <div class="container-fluid">
  <div class="table-responsive" >
     <table class="table table-striped">
     	<tr>
          <th>No</th>
        	<th>Pertanyaan</th>
          <th>Jawaban</th>
          <th>Kategori</th>
        	<th colspan="2" style="text-align: center;">Aksi</th>
      </tr>
<?php
$no = $start+1;
while ($row = $query -> fetch(PDO::FETCH_ASSOC)){
?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row['pertanyaan'];?></td>
        <td><?php echo $row['jawaban'];?></td>
        <td><?php echo $row['kategori'];?></td>
        <td>
          <a class="btn btn-info" href="media.php?module=edit-faq&id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-file"> </span> Edit</a>
       </td>
       <td>
          <a class="btn btn-danger"   onclick="return confirm('apa kamu yakin ingin menghapus data dengan no : <?php echo $row['id'] ?> ')" href="../application/controller/controller_admin.php?aksi=hapus_faq&id=<?php echo $row['id']; ?>" > <span class="glyphicon glyphicon-remove"> </span> Hapus</a>
        </td>
      </tr>
<?php
}
?>      
    </table>
  </div>
    <table align="right">
      <tr>
         <th colspan="2" align="right"> <?php echo "Jumlah Data : ".$rows."<br />"; ?></th>
      </tr>
    </table>

<?php
if($id>1)
{
  echo "<a href='?module=faq&id=".($id-1)."' class='btn btn-info'>PREVIOUS </a> &nbsp;  &nbsp;";
}
if($id!=$total)
{
  echo "<a href='?module=faq&id=".($id+1)."' class='btn btn-info'>NEXT</a>";
}
 ?>
 <br> 
</div>

</div>
