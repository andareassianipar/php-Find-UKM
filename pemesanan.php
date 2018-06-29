<?php
include("koneksi.php");
  include("proses/login/config.php");
   include("header.php");

    if (isset($_GET['id'])){
    $id = $_GET['id'];
   }
?>
<?php                  
            $query = mysqli_query($connect, "SELECT * FROM produk WHERE id='$_GET[id]'");
            $data  = mysqli_fetch_array($query);
            $query1 = mysqli_query($connect, "SELECT * FROM menu_kuliner where id_mk=$id");
            // $query1 = mysqli_query($connect, "SELECT * FROM menu_kuliner JOIN produk ON id_kuliner = id WHERE id='$_GET[id]' ORDER BY menu ASC");
            $username = $_SESSION['username'];
            $query2 = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
            $baris  = mysqli_fetch_array($query2);
            $id = $baris['id'];
            ?>

<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Pemesanan
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Pemesanan</li>
      </ol>
      <table cellpadding="10" class=" table table-condensed">
      <tr>
                <td width="300">Nama</td>
                <td width="20">:</td>
                <td><?php echo $baris['nama']; ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $baris['email']; ?></td>
              </tr><tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><?php echo $baris['telp']; ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $baris['alamat']; ?></td>
              </tr>
            </table>
    <form method="post" action="proses_pesan.php" enctype="multipart/form-data">
              <table cellpadding="10" class=" table table-condensed">
              <tr>
                <td width="300">Kode Pos</td>
                <td width="20">:</td>
                <td><input type="text" class="form-control" style="width: 300px" name="kode_pos" placeholder="Kode Pos"></td>
              </tr>
              <tr>
                <td>Kota/Kecamatan</td>
                <td>:</td>
                <td><input type="text" class="form-control" style="width: 300px" name="kota" placeholder="Kota/Kecamatan"></td>
              </tr>
              <tr>
                <td>Nama Rekening</td>
                <td >:</td>
                <td ><input type="text" class="form-control" style="width: 300px" name="nama_rek" placeholder="Nama Rekening"></td>
              </tr>
              <tr>
                <td>Nomor Rekening</td>
                <td>:</td>
                <td><input type="text" class="form-control" style="width: 300px" name="no_rek" placeholder="Nomor Rekening"></td>
              </tr>
              <tr>
                <td>Bank</td>
                <td>:</td>
                <td>
                  <select name="bank" class="form-control" style="width: 300px">
                    <option></option>
                    <option>BNI</option>
                    <option>BCA</option>
                    <option>BRI</option>
                    <option>Bank Sumut</option>
                    <option>Mandiri</option>
                  </select>
                </td>
              </tr>
              </table>

      <table class="table table-hover table-condensed">
        
        <tr>
          <th><center>No</center></th>
          <th><center>Nama Pesanan</center></th>
          <th><center>jenis Pemesanan</center></th>
          <th><center>Jumlah Pesanan</center></th>
        </tr>
        <?php $no = 1; ?>
        <td><center><?php echo $no ++; ?></center></td>
        <td><center><?php echo $data['nama_ukm']; ?></center></td>
        <td><center>
          <select name="jenis_pesanan" class="form-control" style="width: 170px">
            <option>--Pilih Menu--</option>
            <?php
            if(mysqli_num_rows($query1)!=0){
              while ($row = mysqli_fetch_array($query1)) {
                echo '<option>'.$row['menu'].'</option>';
              }}
            ?>
          </select>
        </center></td>
        <td><center>
          <input name="jlh_pesanan" type="text" class="form-control" style="width:50px; text-align: center" placeholder=""></input>
        </center></td> 
  	</table>
    <?php
                  if(isset($_SESSION['username'])){
                    if($_SESSION['username']!='admin') {
                      echo "<a href='../proses_pesan.php'><button style='float: right;margin-top: 10px' class='btn btn-primary'>Buat Pemesanan</button></a>";
                    }
                    else{}
                  }
                ?></br></br></br></br>
  </form>
   
      
     
 </div>


<?php
   include("footer.php");
?>