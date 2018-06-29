<?php include_once("proses/login/config.php");
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

    <title>FindUKM</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/glyphicon.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php" > <img src="img/logo.png" style="height: 40px; width: 150px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="peta.php">Peta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="favorit.php">Favorit</a>
            </li>
            <!-- <?php 
            if(!isset($_SESSION['username'])){?>
            <li class="nav-item">
              <a class="nav-link" href="login.php" style="padding-right: 25px" target="_self">Login</a>
            </li>
            <?php }else{?>
            <li class="nav-item">
              <a class="nav-link" href="user.php" target="_self">Profil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="proses/login/logout.php" style="padding-right: 25px" target="_self" >Logout (<?= $_SESSION['username'];?>)</a>
           </li><?php }?> -->

             <?php
                  if(isset($_SESSION['username'])){
                    if($_SESSION['username']=='admin') {
                      echo ' <li class="nav-item">
                                <a class="nav-link" href="transaksi.php">Transaksi<label style="color:yellow;"></label></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="proses/login/logout.php" style="padding-right: 25px" target="_self">Logout</a>
                              </li>';
                    }
                    else{ ?>
                      <li class="nav-item">
                              <a class="nav-link" href="user.php?id=<?php echo $id ?>" target="_self">Profil</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="proses/login/logout.php" style="padding-right: 25px" target="_self">Logout</a>
                            </li>
                      <?php      
                    }

                  }
                  else
                    echo '<li class="nav-item">
                            <a class="nav-link" href="login.php" style="padding-right: 25px" target="_self">Login</a>
                          </li>';
              ?>
            
            <form class="" action="search.php" method="post">
                      <div class="input-group">
                          <input name="search" type="text" class="form-control" style="width:250px;" placeholder="Pencarian...">
                          <span class="input-group-btn">
                              <button name="submit" class="btn btn-primary" type="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                          </button>
                          </span>
                      </div>
             </form>
            <!-- <li class="nav-item">
              <input type="text" class="form-control" style="width: 250px" placeholder="Pencarian..." id="keyword">
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- <div id="view"><?php include "view.php"; ?></div> -->
  </body>
  <script language="JavaScript" type="text/javascript">
    function checkDelete(){
      return confirm('Apakah Anda yakin untuk menghapus item ini?');
    }
  </script>
</html>