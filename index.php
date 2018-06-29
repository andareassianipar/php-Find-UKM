<?php
  include("proses/login/config.php");
   include("header.php");
?>
    <header>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
          
        <div class="carousel-inner" role="listbox" style="width: 100%; height: 90%"> 
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active"> <img width="100%" src="img/c1.jpg">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item"> <img width="100%" src="img/c2.jpg">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item"> <img width="100%" src="img/c1.jpg">
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
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4" align="center">Pilih Kategori:</h1>
              <br>
              
      <div class="row">
        <div class="col-lg-2 portfolio-item" align="center">
            <a href="kuliner.php"><img class="card-img-top" src="img/1.png" style="height: 110px; width: 110px;" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="kuliner.php" style="text-decoration: none">Kuliner</a>
              </h5>
            </div>
        </div>
        <div class="col-lg-2 portfolio-item" align="center">
            <a href="produksegar.php"><img class="card-img-top" src="img/2.png" style="height: 110px; width: 110px;" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="produksegar.php" style="text-decoration: none">Produk Segar</a>
              </h5>
            </div>
        </div>
        <div class="col-lg-2 portfolio-item" align="center">
            <a href="olehkhas.php"><img class="card-img-top" src="img/3.png" style="height: 110px; width: 110px;" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="olehkhas.php" style="text-decoration: none">Oleh-oleh Khas</a>
              </h5>
            </div>
        </div>
        <div class="col-lg-2 portfolio-item" align="center">
            <a href="transportasi.php"><img class="card-img-top" src="img/4.png" style="height: 110px; width: 110px;" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="transportasi.php" style="text-decoration: none">Transportasi</a>
              </h5>
            </div>
        </div>
        <div class="col-lg-2 portfolio-item" align="center">
            <a href="penyewaan.php"><img class="card-img-top" src="img/5.png" style="height: 110px; width: 110px;" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="penyewaan.php" style="text-decoration: none">Penyewaan</a>
              </h5>
            </div>
        </div>
        <div class="col-lg-2 portfolio-item" align="center">
            <a href="ukm.php"><img class="card-img-top" src="img/6.png" style="height: 110px; width: 110px;" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="ukm.php" style="text-decoration: none">UKM</a>
              </h5>
            </div>
        </div>
      <hr>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    

<?php
   include("footer.php");
?>