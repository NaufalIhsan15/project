    <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Informasi</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="brand">RENTED HOUSE</div>
    <div class="address-bar">Menyewa Dengan Harga Termurah</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="daftar.php">Daftar</a>
                    </li>
                    <li>
                        <a href="pilih.php">Informasi Kontrakan</a>
                    </li>
                    <li>
                        <a href="contact.php">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Informasi Kontrakan
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <a>
                    <img class="img-responsive" src="../image/Ajeng.PNG" alt="">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#AModal">CHECK</button>
                    </a>
                    <h3>AJENG
                        <small>RENTED HOUSE</small>
                    </h3>
                </div>

                <div class="col-sm-4 text-center">
                    <a> 
                    <img class="img-responsive" src="../image/Rainbow.jpg" alt="">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#BModal">CHECK</button>
                    </a>
                    <h3>RAINBOW
                        <small>RENTED HOUSE</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <a>
                    <img class="img-responsive" src="../image/Aletha.jpg" alt="">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#CModal">CHECK</button>
                    </a>
                    <h3>ALETHA
                        <small>RENTED HOUSE</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <a>
                    <img class="img-responsive" src="../image/Black.PNG" alt="">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#DModal">CHECK</button>
                    </a>
                    <h3>BLACK
                        <small>RENTED HOUSE</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <a>
                    <img class="img-responsive" src="../image/Brown.jpg" alt="">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#EModal">CHECK</button>
                    </a>
                    <h3>BROWN
                        <small>RENTED HOUSE</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <a>
                    <img class="img-responsive" src="../image/Exclusive.jpg" alt="">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#FModal">CHECK</button>
                    </a>
                    <h3>EXCLUSIVE
                        <small>RENTED HOUSE</small>
                    </h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- Modal -->
<div id="AModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">AJENG RENTED HOUSE</h4>
      </div>
      <div class="modal-body">
        <p>Alamat : Jl. Rowosari No.1A.</p> <p>Fasilitas : Mempunyai Lahan Parkir, Kamar Tidur 3, Kamar Mandi 3, Jumlah Lantai 2, Dapur, Wifi, AC, Garasi</p> <p>Keamanan : Dijaga Security </p> <p>Harga Pertahun Rp.13.000.000</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!-- Modal -->
<div id="BModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">RAINBOW RENTED HOUSE</h4>
      </div>
      <div class="modal-body">
        <p>Alamat : Jl. Permatasari No.5.</p> <p>Fasilitas : Mempunyai Lahan Parkir, Kamar Tidur 1, Kamar Mandi 1, Jumlah Lantai 2, Dapur, Token Listrik</p> <p>Keamanan : Berpagar </p> <p>Harga Pertahun Rp.9.000.000</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!-- Modal -->
<div id="CModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ALETHA RENTED HOUSE</h4>
      </div>
      <div class="modal-body">
        <p>Alamat : Jl. Patriasari No.4.</p> <p>Fasilitas : Mempunyai Lahan Parkir, Kamar Tidur 4, Kamar Mandi 2, Jumlah Lantai 1, Dapur, Tempat Jemuran, Garasi</p> <p>Keamanan : Dijaga Security </p> <p>Harga Pertahun Rp.12.000.000</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!-- Modal -->
<div id="DModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">BLACK RENTED HOUSE</h4>
      </div>
      <div class="modal-body">
        <p>Alamat : Jl. Berdikari No.15.</p> <p>Fasilitas : Mempunyai Lahan Parkir, Kamar Tidur 2, Kamar Mandi 2, Jumlah Lantai 1, Dapur, Tempat Jemuran, AC, Wifi, Garasi</p> <p>Keamanan : Berpagar dan Dijaga Security </p> <p>Harga Pertahun Rp.15.000.000</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!-- Modal -->
<div id="EModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">BROWN RENTED HOUSE</h4>
      </div>
      <div class="modal-body">
        <p>Alamat : Jl. Arwana No.20.</p> <p>Fasilitas : Mempunyai Lahan Parkir, Kamar Tidur 2, Kamar Mandi 2, Jumlah Lantai 2, Dapur, Wifi, AC</p> <p>Keamanan : Dijaga Security </p> <p>Harga Pertahun Rp.17.000.000</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!-- Modal -->
<div id="FModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EXCLUSIVE RENTED HOUSE</h4>
      </div>
      <div class="modal-body">
        <p>Alamat : Jl. Durian No.3.</p> <p>Fasilitas : Mempunyai Lahan Parkir, Kamar Tidur 2, Kamar Mandi 2, Jumlah Lantai 1, Dapur, Teempat Jemuran, Wifi, AC, TV, Garasi, Taman</p> <p>Keamanan : Dijaga Security </p> <p>Harga Pertahun Rp.22.000.000</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>

</html>
