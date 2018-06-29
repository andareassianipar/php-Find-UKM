<?php
// Load file koneksi.php
include "../../koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama_ukm = $_POST['nama_ukm'];
$hari_buka = $_POST['hari_buka'];
$jam_buka = $_POST['jam_buka'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$link = $_POST['link'];
$favorit = $_POST['favorit'];

// Set path folder tempat menyimpan fotonya
$path = "../../img/".$foto;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO produk VALUES('".$id."', '1', '".$nama_ukm."', '".$foto."', '".$hari_buka."', '".$jam_buka."', '".$link."', '".$favorit."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location:../../kuliner.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
}
?>