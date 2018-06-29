<?php
  include("proses/login/config.php");
   include("header.php");
   include("koneksi.php");
?>

<?php        
            $username = $_SESSION['username'];          
            $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
            $data  = mysqli_fetch_array($query);
            $query1 = mysqli_query($connect, "SELECT * FROM pesanan inner JOIN user ON pesanan.id_user = user.id inner join produk on pesanan.id_produk = produk.id ");
        

            // $query1 = "SELECT * FROM pesanan ";
            // $query1 .= "INNER JOIN user ON user.id = pesanan.id_user INNER JOIN produk ON produk.id = pesanan.id_pesanan order by id_pesanan ASC ";
            // $query1 .= "WHERE id_pesanan = '$id'";
            // $sa = mysqli_query($connect,$query1);
            // if (!$sa) {
            //   echo mysqli_error($connect);
            // }


            $query2 = mysqli_query($connect, "SELECT * FROM produk");
            $baris = mysqli_fetch_array($query2);
            ?> 
<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Transaksi
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Transaksi</li>
      </ol>
      
      <table class="table table-hover table-condensed">
                <tr>
                  <th><center>No</center></th>
                  <th><center>Nama Pemesan</center></th>
                  <th><center>Nama UKM</center></th>
                  <th><center>jenis Pemesanan</center></th>
                  <th><center>Jumlah Pesanan</center></th>
                  <th><center>Detail Pesanan</center></th>
                </tr>
                <?php 
                $no = 1;
                while($row = mysqli_fetch_array($query1)){?> 
                <tr> 
                <td><center><?php echo $no; ?></center></td>
                <td><center><?php echo $row['nama']; ?></center></td>
                <td><center><?php echo $row['nama_ukm']; ?></center></td>
                <td><center><?php echo $row['jenis_pesanan']; ?></center></td>
                <td><center><?php echo $row['jlh_pesanan']; ?></center></td>
                <td><center><?php echo "<a href='detail_pesanan.php?id=".$row['id_pesanan']."'>Detail</a>"?></center></td>
                </tr>
                <?php $no++; }
              ?>
              </table>
      
     
 </div>


<?php
   include("footer.php");
?>