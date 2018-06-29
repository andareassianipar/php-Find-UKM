<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan fotonya
$path = "../img/".$foto;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO user VALUES('".$id."', '".$nama."', '".$email."', '".$username."', '".$password."', '".$telp."', '".$alamat."', '".$foto."', 'user')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    // echo "<script>alert('Akun anda telah didaftarkan. Silahkan login kembali.'); window.location.href='../login.php';</script>";
    // exit();
    header("location:../login.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../registrasi.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='../registrasi.php'>Kembali Ke Form</a>";
}
?>