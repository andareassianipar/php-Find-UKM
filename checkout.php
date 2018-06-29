//Andareas contribute
<?php
include("koneksi.php");
  include("proses/login/config.php");
   include("header.php");
   if (isset($_GET['id'])) {
                   $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        // Get the user id
        $id = getUserId($username, $password);
 } 
 if (isset($_GET['id'])){
    $id = $_GET['id'];
   }
?>
<?php                  
            // $query = mysqli_query($connect, "SELECT * FROM produk ");
            // $data  = mysqli_fetch_array($query);
            // $query1 = mysqli_query($connect, "SELECT * FROM pesanan");
$query1 = mysqli_query($connect, "SELECT * FROM pesanan inner JOIN user ON pesanan.id_user = user.id inner join produk on pesanan.id_produk = produk.id inner join menu_kuliner on pesanan.id_mk = menu_kuliner.id_kuliner where id_pesanan= $id");
            $row = mysqli_fetch_array($query1);
            $username = $_SESSION['username'];
            $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
            $data  = mysqli_fetch_array($query);
           
            ?>

<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Checkout Pesanan
      </h1>
      <?php
      $d=$row['jlh_pesanan'] * $row['harga'];
      ?>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Checkout Pesanan</li>
      </ol>
      <div>
        <p>Pesanan anda telah kami terima. Terimakasih telah memesan melalui situs kami</p>
        <p>Total biaya untuk pembelian Produk adalah Rp <?php echo $d; ?>,00</p>
        <p>Biaya bisa dikirimkan melalui Rekening:</p>
        <table cellpadding="10" class=" table table-condensed">
              <tr>
                <td width="300">Nama Bank</td>
                <td width="20">:</td>
                <td>BNI</td>
              </tr>
              <tr>
                <td>Cabang</td>
                <td>:</td>
                <td>Balige</td>
              </tr>
              <tr>
                <td>Nomor Rekening</td>
                <td>:</td>
                <td>0817274826</td>
              </tr>
              <tr>
                <td>Atas Nama</td>
                <td>:</td>
                <td>Find UKM</td>
              </tr>
          </table>
        <p>Pesanan anda akan kami kirim ke alamat di bawah ini:</br>
        <table cellpadding="10" class=" table table-condensed">
              <tr>
                <td width="300">Nama Lengkap</td>
                <td width="20">:</td>
                <td><?php echo $row['nama']; ?></td>
              </tr>
              <tr>
                <td>Jenis Pesanan</td>
                <td>:</td>
                <td><?php echo $row['jenis_pesanan']; ?></td>
              </tr>
              <tr>
                <td>Jumlah Pesanan</td>
                <td>:</td>
                <td><?php echo $row['jlh_pesanan']; ?></td>
              </tr>
              <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><?php echo $row['telp']; ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $row['alamat']; ?></td>
              </tr>
              <tr>
                <td>Kode Pos</td>
                <td>:</td>
                <td><?php echo $row['kode_pos']; ?></td>
              </tr>
              <tr>
                <td>Kota/Kecamatan</td>
                <td>:</td>
                <td><?php echo $row['kota']; ?></td>
              </tr>
              </table>
            </br>
      </div>

   
      
     
 </div>


<?php
   include("footer.php");
?>
