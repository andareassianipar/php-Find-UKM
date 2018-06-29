<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Visiting Bali</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/glyphicon.css" rel="stylesheet">

  </head>

    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php" > <img src="img/logo.png" style="height: 40px; width: 150px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </br></br></br>



    <div class="container">
        <div class="row" align="center">
            <div class="col-md-12 col-sm-offset-3" style="padding-left: 250px; padding-right: 250px">
                <div class="card h-10">
                    <div class="card-body">
                        <form id="login-form" method="post" action="proses/proses_registrasi.php" role="form" enctype="multipart/form-data">
                        <legend>Registrasi</legend>
                        <table cellpadding="10">
                            <tr><td>Nama Lengkap</td>
                        <td style="width: 430px"><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" />
                        </div></td>
                    </tr>
                        <tr><td>Email</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" name="email" placeholder="Email" class="form-control" />
                        </div></td>
                    </tr>
                        <tr><td>Username</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="username" placeholder="Username" class="form-control" />
                        </div></td>
                    </tr>
                        <tr><td>Password</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" class="form-control" />
                        </div></td>
                    </tr>
                        <tr><td>Nomor Telepon</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                            <input type="text" name="telp" placeholder="Nomor Telepon" class="form-control" />
                        </div></td>
                    </tr>
                        <tr><td>Alamat</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input type="text" name="alamat" placeholder="Alamat" class="form-control" />
                        </div></td>
                    </tr>
                        <tr>
                <td>Foto</td>
                <td><input type="file" name="foto"></td>
              </tr>
                        </table>
                        </br><div class="form-group">
                            <input type="submit" name="submit" value="Daftar" class="btn btn-primary btn-block" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




</br></br></br>
    <!-- Footer -->
    <?php
   include("footer.php");
?>
