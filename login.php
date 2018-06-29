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
  </br></br></br></br></br>



    <div class="container">
        <div class="row" align="center">
            <div class="col-lg-12" style="padding-left: 330px; padding-right: 330px">
                <div class="card h-10">
                    <div class="card-body">
                        <h4 class="card-text">Login ke akun anda</h4></br>
                            <div class="regisForm">
                                <form  action="proses/login/login_process.php" autocomplete="on" method="post">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="text" name="username" placeholder="Masukkan username" required class="form-control" />
                                    </div>
                                    </br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                                    </div>
                                    </br>
                                    <div class="login button"> 
                                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-block" /> 
								    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 text-right brand" style="padding: 0;"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="center" class="col-sm-12" style="padding: 0;"><h6>Pengguna baru? <a href="registrasi.php">Daftar disini</a></h6></div>
                                    </div>
                                </form>
                            </div>	
                        </div>             
                    </div>
                </div>
            </div>
        </div>
    </div>


</br></br></br></br></br>
    <!-- Footer -->
    <?php
   include("footer.php");
?>