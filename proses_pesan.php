<?php
// Load file koneksi.php
include "koneksi.php";
include "proses/login/config.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id_pesanan'];
$kode_pos = $_POST['kode_pos'];
$kota = $_POST['kota'];
$nama_rek = $_POST['nama_rek'];
$no_rek = $_POST['no_rek'];
$bank = $_POST['bank'];
$jenis_pesanan = $_POST['jenis_pesanan'];
$jlh_pesanan = $_POST['jlh_pesanan'];
$username = $_SESSION['username'];
echo $username;
$query1 = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
$baris  = mysqli_fetch_array($query1);
$id_user = $baris['id'];

$query2 = mysqli_query($connect, "SELECT * FROM produk");
$baris  = mysqli_fetch_array($query2);
$id_produk = $baris['id'];

$query3 = mysqli_query($connect, "SELECT * FROM menu_kuliner");
$baris  = mysqli_fetch_array($query3);
$id_mk = $baris['id_kuliner'];

  $query = "INSERT INTO pesanan VALUES('".$id."', '".$id_user."', '".$id_produk."', '".$id_mk."', '".$kode_pos."', '".$kota."', '".$nama_rek."', '".$no_rek."', '".$bank."', '".$jenis_pesanan."', '".$jlh_pesanan."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location:user.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='pemesanan.php'>Kembali Ke Form</a>";
  }

?>