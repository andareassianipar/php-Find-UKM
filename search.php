<?php
  include("proses/login/config.php");
   include("header.php");
   include("koneksi.php");

?>

<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Pencarian
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Pencarian</li>
      </ol></br>

                 <?php

                 if (isset($_POST['submit'])) {
                   $search = $_POST['search'];

                   $query = "SELECT * FROM produk WHERE nama_ukm LIKE '%$search%' ORDER BY id";
                   $search_query = mysqli_query($connect,$query);

                   if (!$search_query) {
                     die("QUERY FAILED " . mysqli_error($connect));
                   }

                   $count = mysqli_num_rows($search_query);
                   if ($count == 0) {
                     echo "<h1 style='text-align:center;''>Tidak Ada Hasil</h1><br>";
                   }
                   else {
                       while ($row = mysqli_fetch_assoc($search_query)) {
                         $id = $row['id'];
                         $nama = $row['nama_ukm'];
                         $foto = $row['foto'];
                         $hari_buka = $row['hari_buka'];
                         $jam_buka = $row['jam_buka'];

                         ?>
          				      <div class="row">
          				        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          				          <div class="card h-10">
          				            <?php echo "<align='center'><img src='img/".$foto."' class='card-img-top' height='160' >"?>
          				            <div class="card-footer" style="background: #e9ecef">
          				              <a href="menu/kuliner/" style="text-decoration: none; text-align: center"><h5><?php echo $nama?></h5></a>
          				              <a href="menu/detail_kuliner.php?id=<?php echo $id?>" class="btn btn-primary" >Detail</a>
          				              <?php if(isset($_SESSION['username'])){?>
          				             <?php echo "<a href='proses/add_ukm/proses_hapus.php?id=".$id."'><button style='float: right;' class='btn btn-danger'>Hapus</button></a>"; ?>
          				                    <?php }?>
          				            </div>
          				          </div>
          				        </div>
          				      </div>
                    <?php }
                   	}
                 }
                  ?>
</div>




<?php
   include("footer.php");
?>