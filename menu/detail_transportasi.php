<?php
include("../koneksi.php");
include("../proses/login/config.php");
 ?>
<?php                  
            $query = mysqli_query($connect, "SELECT * FROM produk WHERE id='$_GET[id]'");
            $data  = mysqli_fetch_array($query);
            $query1 = mysqli_query($connect, "SELECT * FROM menu_transportasi JOIN produk ON id_transportasi = id WHERE id='$_GET[id]'");
            ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $data['nama_ukm'];?> - FindUKM</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/glyphicon.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php" > <img src="../img/logo.png" style="height: 40px; width: 150px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../peta.php">Peta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../favorit.php">Favorit</a>
            </li>
            <?php
                  if(isset($_SESSION['username'])){
                    if($_SESSION['username']=='admin') {
                      echo ' <li class="nav-item">
                                <a class="nav-link" href="../transaksi.php">Transaksi<label style="color:yellow;"></label></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="../proses/login/logout.php" style="padding-right: 25px" target="_self">Logout</a>
                              </li>';
                    }
                    else{
                      echo ' <li class="nav-item">
                              <a class="nav-link" href="../user.php" target="_self">Profile</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="../proses/login/logout.php" style="padding-right: 25px" target="_self">Logout</a>
                            </li>
                            ';
                    }

                  }
                  else
                    echo '<li class="nav-item">
                            <a class="nav-link" href="../login.php" style="padding-right: 25px" target="_self">Login</a>
                          </li>';
              ?>
            
            <form class="" action="../search.php" method="post">
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

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php echo $data['nama_ukm']; ?>
        <?php echo "<a href='../proses/save_favorit.php?id=".$data['id']."'><button  class='btn btn-primary'>Favorit</button></a>";?>
        <?php
                  if(isset($_SESSION['username'])){
                    if($_SESSION['username']=='admin') {
                      echo "<a href='../proses/add_transportasi/ubah.php?id=".$data['id']."'><button style='float: right;margin-top: 10px' class='btn btn-primary'>Ubah</button></a>";
                    }
                    else{}
                  }
                ?>
        
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item">
          <a href="../transportasi.php">Transportasi</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $data['nama_ukm']; ?></li>
      </ol>

      <!-- Content Row -->

      <div class="row">
        <!-- Map Column -->
        <div class="col-md-7">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
          
        <div class="carousel-inner" role="listbox" style="width: 100%; height: 90%"> 
          <!-- Slide One - Set the background image for this slide in the line below -->
          <?php echo "<div class='carousel-item active'> <img width='100%' src='../img/".$data['foto']."'>"?>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item"> <img width="100%" src="../img/">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item"> <img width="100%" src="../img/">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
        
        <!-- Contact Details Column -->
        <div class="col-lg-5 mb-4">
          
          <table border="0">
            <tr>
              <td style="width: 150px; text-align: center">Hari Buka</td>
              <td style="width: 150px; text-align: center">Jam Buka</td>
              <td style="width: 150px; text-align: center" rowspan="2"><a href="<?php echo $data['link'];?>"><img src="../img/peta.png" style="width: 40px; height: 40px"></a></td>
            </tr>
            <tr>
              <td style="width: 150px; text-align: center"><?php echo $data['hari_buka'];?></td>
              <td style="width: 150px; text-align: center"><?php echo $data['jam_buka'];?></td>
            </tr>
          </table>
          <br>

          
        </div>
      </div>

    </div><br>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <div class="row">
        <div class="col-lg-12" align="right">
          
            <a href="../index.php"><img src="../img/logo.png" style="height: 40px; width: 150px" alt=""></a>
        </div>
      </div>
      </div>
        <hr>
        <p class="m-0 text-center text-white">Copyright &copy; Find UKM | 2017</p>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

  </body>

</html>
