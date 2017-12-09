<html>
  <head>
    <title>Beranda</title>
    <link href="addons/bootstrap.min.css" rel="stylesheet">
    <link href="css/skin.css" rel="stylesheet"/>
    <script src="addons/jquery.min.js"></script>
    <script src="addons/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Rumah Sakit Kita</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="index.php?page=visi-misi">Visi & Misi</a></li>
          <li><a href="index.php?page=contact-us">Hubungi Kami</a></li>
        </ul>

    	</div>
    </nav>

      <!-- Page Content -->
      <div class="container">

       <!-- Heading Row -->
       <div class="row">
        <div class="col-md-12">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
          <div class="item active">
           <img src="img/header-6.jpg" alt="...">

          </div>
          <div class="item">
           <img src="img/header-5.jpg" alt="...">

          </div>
          <div class="item">
           <img src="img/header-7.jpg" alt="...">

          </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
         </div>
        </div>
       </div>
       <!-- /.row -->

       <div class="row">
        <div class="col-md-12">
        <!-- Hello Word yang nyambung-->
        <?php
    		if(!isset($_GET['page']) && !isset($_GET['typeahead'])){
    		?>
         <div class="jumbotron">
         <h3>Selamat Datang di situs kami</h3>
         <table>
          <tr>
            <td><img src="img/hospital.png" width="200" height="200"/></td>
            <td>
              <p style="margin-left: 20px;">Rumah Sakit Kita, merupakan sebuah rumah sakit swasta yang berada di Jakarta Barat. Disini kami beberikan sebuah layanan di masyarakat. Berupa Spesial Bedah, Spesial Jantung dll. Untuk dapat menggunakan jasa kami, dapat menghubungi kami melalui kotak saran.</p>
              <a class="btn btn-default" href="#" style="margin-left: 20px;">Info Lebih Lanjut</a>
            </td>
          </tr>
         </table>
        </div>
        <?php } else {  } ?>

        <div class="row">
            <div class="col-md-12">
              <div class="article-post">
                <div class="body-article">
                  <?php
    							if(isset($_GET['page'])){
    								$page = $_GET['page'];
    								switch($page) {
                      case "visi-misi";
                        include "visi_misi.php";
                      break;
                      case "contact-us";
                        include "contact_us.php";
                      break;
                      case "spesialis-mata";
                        include "pages/mata.php";
                      break;
                      case "spesialis-jantung";
                        include "pages/jantung.php";
                      break;
                      case "spesialis-kulit";
                        include "pages/kulit.php";
                      break;
                      case "spesialis-hati";
                        include "pages/hati.php";
                      break;
                      case "spesialis-anak";
                        include "pages/anak.php";
                      break;
                    }
    							} else {
    								//include "visi_misi.php";
    							}
                  ?>
                </div>
              </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
       <!-- Content Row -->
       <div class="row">
       <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <div class="caption">
          <h3>Pelayanan Utama</h3>
         <ul>
           <li><a href="index.php?page=spesialis-mata">Spesialis Mata</a></li>
           <li><a href="index.php?page=spesialis-jantung">Spesialis Jantung</li>
           <li><a href="index.php?page=spesialis-kulit">Spesialis Kulit</li>
           <li><a href="index.php?page=spesialis-hati">Spesialis Hati</li>
           <li><a href="index.php?page=spesialis-anak">Spesialis Anak</li>
         </ul>
         </div>
         </div>
        </div>

        <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <div class="caption">
          <h3>Jam Operasional</h3>
          <br/>
          <p>Senin - Kamis : 09:00 - 20:00</p>
          <p>Jumat - Sabtu : 09:00 - 19:00</p>
          <p>Minggu        : 08:00 - 22:00</p>
         </div>
         </div>
        </div>

        <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <div class="caption">
          <h3>Temukan kami</h3>
          <tr>
            <img src="img/ic-maps.png" width="104" height="104"/>
            <td>Jl. Meruya Barat No.5 Jakarta Barat</td>
          </tr>

         </div>
         </div>
        </div>

       </div>
        <!-- /.col-md-4 -->
       </div>

       <footer style="margin-top:20px;">
        <div class="row">
         <div class="col-lg-12">
          <center><p>Copyright &copy; 2017 - Kelompok 8</p></center>
         </div>
        </div>
       </footer>

      </div>
  </body>
</html>
