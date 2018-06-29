<?php include_once("../login/config.php");
ob_start();

if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        // Get the user id
        $id = getUserId($username, $password);
      }

      ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ubah UKM - FindUKM</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/modern-business.css" rel="stylesheet">
    <link href="../../css/glyphicon.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../../index.php" > <img src="../../img/logo.png" style="height: 40px; width: 150px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../peta.php">Peta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../favorit.php">Favorit</a>
            </li>
            <?php
                  if(isset($_SESSION['username'])){
                    if($_SESSION['username']=='admin') {
                      echo ' <li class="nav-item">
                                <a class="nav-link" href="../../transaksi.php">Transaksi<label style="color:yellow;"></label></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="../login/logout.php" style="padding-right: 25px" target="_self">Logout</a>
                              </li>';
                    }
                    else{ ?>
                      <li class="nav-item">
                              <a class="nav-link" href="../../user.php?id=<?php echo $id ?>" target="_self">Profile</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="../login/logout.php" style="padding-right: 25px" target="_self">Logout</a>
                            </li>
                      <?php      
                    }

                  }
                  else
                    echo '<li class="nav-item">
                            <a class="nav-link" href="../../login.php" style="padding-right: 25px" target="_self">Login</a>
                          </li>';
              ?>
            
            <form class="" action="../../search.php" method="post">
                      <div class="input-group">
                          <input name="search" type="text" class="form-control" style="width:250px;" placeholder="Pencarian...">
                          <span class="input-group-btn">
                              <button name="submit" class="btn btn-primary" type="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                          </button>
                          </span>
                      </div>
             </form>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
    <?php
      include "../../koneksi.php";
      $id = $_GET['id'];
      $query = "SELECT * FROM produk WHERE id='".$id."'";
      $sql = mysqli_query($connect, $query);
      $data = mysqli_fetch_array($sql);
    ?>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Ubah UKM
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../../index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item">
          <a href="../../ukm.php">UKM</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $data['nama_ukm'];?></li>
      </ol>
              
              <form style="padding-left: 330px; padding-right: 330px" method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
              <table cellpadding="8">
              <tr>
                <td>Nama UKM</td>
                <td><input type="text" class="form-control" name="nama_ukm" value="<?php echo $data['nama_ukm']; ?>"></td>
              </tr>
              <tr>
                <td>Hari Buka</td>
                <td><input type="text" class="form-control" placeholder="HH - HH" name="hari_buka" value="<?php echo $data['hari_buka']; ?>"></td>
              </tr>
              <tr>
                <td>Jam Buka</td>
                <td><input type="text" class="form-control" placeholder="00.00 - 00.00" name="jam_buka" value="<?php echo $data['jam_buka']; ?>"></td>
              </tr>
              <tr>
                <td>Foto</td>
                <td>
                  <input type="file" name="foto">
                  <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                </td>
              </tr>
              </table>
              
              <hr>
              <input type="submit" class="btn btn-primary" value="Ubah">
              <a href="../../ukm.php"><input type="button" style="float: right;" class="btn btn-primary" value="Batal"></a>
              </form></br>

    </div>
    <!-- /.container -->

     <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <div class="row">
        <div class="col-lg-12" align="right">
            <a href="../../index.php"><img src="../../img/logo.png" style="height: 40px; width: 150px" alt=""></a>
        </div>
      </div>
      </div>
        <hr>
        <p class="m-0 text-center text-white">Copyright &copy; Find UKM | 2017</p>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/popper/popper.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/jqBootstrapValidation.js"></script>
    <script src="../../js/contact_me.js"></script>

  </body>

</html>

