<?php
  include("proses/login/config.php");
   include("header.php");
   include("koneksi.php");
   if (isset($_GET['id'])) {
                   $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        // Get the user id
        $id = getUserId($username, $password);
 } 
?>
<?php        
            $username = $_SESSION['username'];          
            $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
            $data  = mysqli_fetch_array($query);

$query1 = mysqli_query($connect, "SELECT * FROM pesanan inner JOIN user ON pesanan.id_user = user.id inner join produk on pesanan.id_produk = produk.id inner join menu_kuliner on pesanan.id_mk = menu_kuliner.id_kuliner where id_user= $id");

        



// ariansyah
//             gak ikut// $query1 = mysqli_query($connect, "SELECT * FROM pesanan JOIN produk ON id_pesanan = $id");
//             $query1 = "SELECT * FROM pesanan ";
//             $query1 .= "JOIN user ON pesanan.id_user = user.id JOIN produk ON pesanan.id_produk = produk.id ";
//             gak ikut// $query1 .= "LEFT JOIN produk ON pesanan.id_pesanan = produk.id ";
//             $query1 .= "WHERE id_user = '$id'";
//             $sa = mysqli_query($connect,$query1);
//             if (!$sa) {
//               echo mysqli_error($connect);
//             }




            $query2 = mysqli_query($connect, "SELECT * FROM pesanan");
            $data1  = mysqli_fetch_array($query2);
            ?> 


<div class="container">
  <br>
<div class="row">
<div class="col-lg-2 col-md- col-sm-6 portfolio-item">
  <?php echo "<img src='img/".$data['foto']."' height='115' width='115'>"?>
</div>
<div class="col-lg-6 col-md- col-sm-6 portfolio-item">
  <h1 class="mt-4 mb-3"> <?php echo $data['nama'];?></h1>
</div>
</div>


      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Profil <?php echo $data['nama'];?> </li>
      </ol>

	 <div class="row"><!-- 
            <div class="col-lg-12">
                <h2 class="page-header">Data <?= $_SESSION['username'];?></h2>
            </div> -->
            <div class="col-lg-12">
            	<ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#1" role="tab" data-toggle="tab">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#3" role="tab" data-toggle="tab">Riwayat Pemesanan</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active" id="1">
                <form  method="post" action="proses_tambah.php" enctype="multipart/form-data"><br>
                <table cellpadding="10">
                <tr>
                  <td style="padding-right: 200px"><h4> Nama</h4></td>
                  <td> <h4> : <?php echo $data['nama'];?></h4></td>
                </tr>
                <tr>
                  <td style="padding-right: 200px"><h4> Username</h4></td>
                  <td> <h4> : <?php echo $data['username'];?></h4></td>
                </tr>
                <tr>
                  <td style="padding-right: 200px"><h4> Email</h4></td>
                  <td> <h4> : <?php echo $data['email'];?></h4></td>
                </tr>
                <tr>
                  <td style="padding-right: 200px"><h4> Nomor Telepon</h4></td>
                  <td> <h4> : <?php echo $data['telp'];?></h4></td>
                </tr>
                <tr>
                  <td style="padding-right: 200px"><h4> Alamat</h4></td>
                  <td> <h4> : <?php echo $data['alamat'];?></h4></td>
                </tr>
                <!-- <tr>
                  <?php                  
                  $query = mysqli_query($connect, "SELECT * FROM kuliner WHERE id='1'");
                  $data  = mysqli_fetch_array($query);
                  ?> 
                  <td style="padding-right: 200px"><h4> Hari Buka</h4></td>
                  <td> <h4> : <?php echo $data['hari_buka'];?></h4></td>
                </tr>
                <tr>
                  <td style="padding-right: 200px"><h4> Jam Buka</h4></td>
                  <td> <h4> : <?php echo $data['jam_buka'];?></h4></td>
                </tr> -->
                </table>
            </div>

            <!-- <div role="tabpanel" class="tab-pane " id="2">
              <br>
              <a href="proses/add_kuliner/tambah.php"><button type="submit" class="btn btn-primary" name="Tambah">Tambah Kuliner</button></a>
              <br><br><div class="row">
              <?php                  
            $query = mysqli_query($connect, "SELECT * FROM produk WHERE id='1'");
            $data  = mysqli_fetch_array($query);
            ?> 
              <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-10">
                  <?php echo "<align='center'><img src='img/".$data['foto']."' class='card-img-top' height='160' >"?>
                  <div class="card-footer" style="background: #e9ecef">
                    <a href="menu/kuliner/" style="text-decoration: none; text-align: center"><h5><?php echo $data['nama_ukm'];?></h5></a>
                    <a href="menu/detail_kuliner.php?id=<?php echo $data['id'];?>" class="btn btn-primary" >Detail</a>
                    <?php if(isset($_SESSION['username'])){?>
                   <?php echo "<a href='proses/add_ukm/proses_hapus.php?id=".$data['id']."'><button style='float: right;' class='btn btn-danger'>Hapus</button></a>"; ?>
                          <?php }?>
                  </div>
                </div>
              </div>
            </div>

            </div> -->
            <div role="tabpanel" class="tab-pane " id="3"></br>
              <table class="table table-hover table-condensed">
                <tr>
                  <th><center>No</center></th>
                  <th><center>Nama UKM</center></th>
                  <th><center>jenis Pemesanan</center></th>
                  <th><center>Jumlah Pesanan</center></th>
                  <th><center>Harga</center></th>
                  <th><center>Status</center></th>
                </tr>
                <?php 
                $no = 1;
                while ($row = mysqli_fetch_array($query1)) {
                ?>
                <tr> 
                <td><center><?php echo $no; ?></center></td>
                <td><center><?php echo $row['nama_ukm']; ?></center></td>
                <td><center><?php echo $row['jenis_pesanan']; ?></center></td>
                <td><center><?php echo $row['jlh_pesanan']; ?></center></td>
                <td><center>Rp<?php echo $row['jlh_pesanan']*$row['harga']; ?>,00</center></td>
                <td><center><?php echo "<a href='checkout.php?id=".$row['id_pesanan']."'>Detail</a>"?></center></td>
                
              </tr>
              <?php $no++;} ?>
              </table>
            </div>
		    </div></div>
        </div>
</div>
<br>

<?php
   include("footer.php");
?>