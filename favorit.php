<?php
  include("proses/login/config.php");
   include("header.php");
?>
   <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Favorit
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Favorit</li>
      </ol>


      <div class="row">
        <?php
          include "koneksi.php";
          $query = "SELECT * FROM produk WHERE favorit=1"; // Query untuk menampilkan semua data siswa
          $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
        ?> 
        <?php 
        while($data = mysqli_fetch_array($sql)){?>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-10">
            <?php echo "<align='center'><img src='img/".$data['foto']."' class='card-img-top' height='160' >"?>
            <div class="card-footer" style="background: #e9ecef">
              <a href="menu/detail_kuliner.php?id=<?php echo $data['id'];?>" style="text-decoration: none; text-align: center"><h5><?php echo $data['nama_ukm'];?></h5></a>
              <?php
                  if(isset($_SESSION['username'])){
                    if($_SESSION['username']=='admin') {
                      echo "<a href='proses/add_kuliner/proses_hapus.php?id=".$data['id']."'><button style='float: right;' class='btn btn-danger'>Hapus</button></a>";
                    }
                    else{}
                  }
                ?>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>



      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <?php
   include("footer.php");
?>