<?php
include("koneksi.php");
  include("proses/login/config.php");
   include("header.php");
   if (isset($_GET['id'])){
    $id = $_GET['id'];
   }
?>
<?php                  
            $query1 = mysqli_query($connect, "SELECT * FROM pesanan inner JOIN user ON id = id_user where id_pesanan = $id");
            $row = mysqli_fetch_array($query1);
            ?>

<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Detail Pesanan
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item"> 
          <a href="index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Detail Pesanan</li>
      </ol>
      <div>
        <p>Data Pesanan:</br>
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
                <td>Bank</td>
                <td>:</td>
                <td><?php echo $row['bank']; ?></td>
              </tr>
              <tr>
                <td>Nomor Rekening</td>
                <td>:</td>
                <td><?php echo $row['no_rek']; ?></td>
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