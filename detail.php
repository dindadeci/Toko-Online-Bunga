<?php 
require  'config/functions.php';

if (!isset($_SESSION)) {
        session_start();
    } 


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Deci Florist</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="admin/font-awesome/css/font-awesome.css">
    
    <!-- favicon -->
    <link rel="shortcut icon" href="icon.png">

    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <style>
      /* Page Title
=================================================================== */

#page-title-icon {
  background: #fff;
  height: 48px;
  width: 48px;
  -webkit-border-radius: 50em;
  -moz-border-radius: 50em;
  border-radius: 50em;
  padding: 4px;
  margin-left: -16px;
  margin-top: -18px;
  position: relative;
  z-index: 10;
  float: left;
  
}

#page-title-icon-inner {
  background: #ffd35f;
  height: 48px;
  width: 48px;
  -webkit-border-radius: 50em;
  -moz-border-radius: 50em;
  border-radius: 50em;
  margin-left: -52px;
  margin-top: -14px;
  position: relative;
  z-index: 30;
  float: left;
}

#page-title {
  background: url(img/bg-grey2.png);
  display: block;
  margin-top: 40px;
  margin-bottom: 25px;
  position: relative;
  z-index: 20;
  border-bottom: 5px solid #f6f6f6;
}

#page-title-inner {
  background: rgba(226, 151, 50, 0.9);
  -webkit-box-shadow: inset 0px 0px 5px rgba(0,0,0,.25);
  -moz-box-shadow: inset 0px 0px 5px rgba(0,0,0,.25);
  box-shadow: inset 0px 0px 5px rgba(0,0,0,.25);
  padding: 10px;
}

#page-title i {
  margin: -6px 2px -5px -18px;
  padding: 0px;
}

#page-title h2 {
  display: inline-block;
  font-family: "Boogaloo" !important;
  color: #fff;
  padding: 2px 20px 5px 20px;
  font-size: 30px;
}

#page-title span {
  color: #555;
}

    /*FOOTER*/

     .newsletter-follow {
      text-align: center;
      margin-top: -20px;
      margin-left: -80px;
    }

     .newsletter-follow li {
      display: inline-block;
      margin-right: 5px;
    }

    .newsletter-follow li:last-child {
      margin-right: 0px;
    }

     .newsletter-follow li a {
      position: relative;
      display: block;
      width: 40px;
      height: 40px;
      line-height: 40px;
      border: 1px solid #15161D;
      background-color: #E4E7ED;
      -webkit-transition: 0.2s all;
      transition: 0.2s all;
    }


     .newsletter-follow li a:hover,  .newsletter-follow li a:focus {
      background-color: #15161D;
      color: #D10024;
    }
    </style>  

   
  </head>
  <body>
    <!-- navbar -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Deci Florist</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bunga Mati<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="hiasmeja.php">Bunga Hias Meja</a></li>
            <li><a href="crown.php">Crown Flower</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bunga Hidup<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="bouquet.php">Bouquet</a></li>
            <li><a href="nyamuk.php">Tanaman Penghusir Nyamuk</a></li>
            <li><a href="flowers.php">Macam Macam Bunga</a></li>
          </ul>
        </li>
        <li><a href="article.php">Testimoni</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li>
            <a href="javascript:void(0);" id="jwpopupLink">
                <i class="fa fa-shopping-cart" style="padding-right: 10px"></i>
                Cart

                <?php 
                if(!empty($_SESSION["items"])):
                  $count = $_SESSION["items"];

                  ?>

                <span class="badge" style="margin-left: 10px">
                  <?= count($count); ?>
                    
                  </span>

               <?php endif; ?>

            </a>
          
          </li>
          <li id="show_login">
          <?php 

          if(isset($_SESSION['username'])){

            ?>
            
            <a href="profil.php" class="element place-right">Selamat datang, <?php echo "$_SESSION[username]"; ?></a>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog fa-lg" style="margin-right: 10px"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
                                
               <li><a href="profil.php"><i class="fa fa-user" style="padding-right: 10px"></i>Profil</a></li>

                <li><a href="logout.php"><i class="fa fa-sign-out" style="padding-right: 10px"></i>Logout</a></li>
              </ul>
            </li>

            <?php
          }else{
            ?>
            <span class="element-divider"></span>
            <a href="login_form.php"><i class="fa fa-user" style="padding-right: 10px"></i>Login</a>
            <?php
          }
          ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    
      <!-- start: Table -->
            <!-- start: Page Title -->
  <div id="page-title">

    <div id="page-title-inner">

      <!-- start: Container -->
      <div class="container ">

        <h2><i class="fa fa-shopping-cart" style="padding-right: 10px"></i>Detail Keranjang Belanja</h2>

      </div>
      <!-- end: Container  -->

    </div>  

  </div>
  <!-- end: Page Title -->


<!-- start: Container -->
    <div class="container">

      <!-- start: Table -->
<table class="table table-hover table-condensed">
<tr>
          <th><center>No Pembelian</center></th>
                    <th><center>Kode Barang</center></th>
          <th><center>Nama Barang</center></th>
          <th><center>Jumlah</center></th>
          <th><center>Harga Satuan</center></th>
          <th><center>Sub Total</center></th>
          <th><center>Opsi</center></th>
        </tr>
          <?php
        //MENAMPILKAN DETAIL KERANJANG BELANJA//
                
    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($conn, "SELECT * from tbl_barang where id = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['harga'] * $val;
            $total += $jumlah_harga;
            $no = 1;
            ?>
                <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><center><?php echo $data['id']; ?></center></td>
                <td><center><?php echo $data['nama']; ?></center></td>
                <td><center>Rp.<?php echo number_format($data['harga']); ?></center></td>
                <td><center><?php echo number_format($val); ?></center></td>
                <td><center>Rp.<?php echo number_format($jumlah_harga); ?></center></td>
                <td>
                  <center>
                    <a href="cart.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-md btn-success"><i class="fa fa-plus" style="padding-right: 10px"></i>
                    Tambah
                    </a> 
                    <a href="cart.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-md btn-warning"><i class="fa fa-minus" style="padding-right: 10px"></i>Kurang</a> 
                    <a href="cart.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-md btn-danger"><i class="fa fa-trash-o" style="padding-right: 10px"></i>Hapus</a>
                  </center>
                </td>
                </tr>
                
          <?php
                    //mysql_free_result($query);      
            }
              //$total += $sub;
            }?>  
                         <?php
        if($total == 0){
          echo '<tr><td colspan="5" align="center">Ups, Keranjang kosong!</td></tr></table>';
          echo '<p><div align="right">
            <a href="index.php" class="btn btn-info btn-lg">&laquo; Continue Shopping</a>
            </div></p>';
        } elseif (!isset($_SESSION['username'])) {
            echo "<script>
                      alert('silahkan login');
                      document.location.href = 'login_form.php';
                  </script>";
        } else {
          echo '
            <tr style="background-color: #DDD;"><td colspan="4" align="left"><b>Total :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
            <p><div align="right">
            <a href="index.php" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
            <a href="checkout.php?total='.$total.'" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT &raquo;</a>
            </div></p>
          ';
        }
        ?>

</table>
      
        
      <!-- end: Table -->

    </div>
    <!-- end: Container -->

    

<!-- FOOTER -->
    <footer id="footer">
      <!-- top footer -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">About Us</h3>
                <p>Deci Florist adalah toko online yang bergerak di bidang tanaman terutama bunga, sasaran kami semua kalangan baik muda maupun tua, mulai dari remaja dan orang dewasa..</p>
                <ul class="footer-links">
                  <li><a href="#"><i class="fa fa-map-marker"></i>Medan, Sumatera</a></li>
                  <li><a href="#"><i class="fa fa-phone"></i>+061-73-51-304</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i>dnddecii@gmail.com</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Categories</h3>
                <ul class="footer-links">
                  <li><a href="#">Tanaman Hias Meja</a></li>
                  <li><a href="#">Crown Flower</a></li>
                  <li><a href="#">Bouquet</a></li>
                  <li><a href="#">Tanaman Penghusir Nyamuk</a></li>
                  <li><a href="#">Macam Macam Bunga</a></li>
                </ul>
              </div>
            </div>

            <div class="clearfix visible-xs"></div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Information</h3>
                <ul class="footer-links">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Orders and Returns</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Follow Us</h3>
                <ul class="footer-links">
                  <center><ul class="newsletter-follow">
                    <li>
                      <a href="#"><i class="fa fa-facebook" style="margin-left: 10px;"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter" style="margin-left: 10px;"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram" style="margin-left: 10px;"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest" style="margin-left: 10px;"></i></a>
                    </li>
                  </ul></center>
                </ul>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /top footer -->

      <!-- bottom footer -->
      <div id="bottom-footer" class="section">
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12 text-center">
              <ul class="footer-payments">
                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
              </ul>
              <span class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" style="color: #f66767;"></i> by <a href="https://instagram.com/dnddecii" target="_blank">Dinda Deci Sunya</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </span>
            </div>
          </div>
            <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->


 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>

    <script>
      // untuk mendapatkan jwpopup
      var jwpopup = document.getElementById('jwpopupBox');

      // untuk mendapatkan link untuk membuka jwpopup
      var mpLink = document.getElementById("jwpopupLink");

      // untuk mendapatkan aksi elemen close
      var close = document.getElementsByClassName("close")[0];

      // membuka jwpopup ketika link di klik
      mpLink.onclick = function() {
        jwpopup.style.display = "block";
      }

      // membuka jwpopup ketika elemen di klik
      close.onclick = function() {
        jwpopup.style.display = "none";
      }

      // membuka jwpopup ketika user melakukan klik diluar area popup
      window.onclick = function(event) {
        if (event.target == jwpopup) {
          jwpopup.style.display = "none";
        }
      }
    </script>


    <!-- scroll top -->

    <script type="text/javascript">
      $(function(){
        $('.to_top').hide().on('click', function(){
          $('body,html').animate({scrollTop : 0}, 800);
        });
        $(window).on('scroll', function(){
          if($(this).scrollTop() > 500){
            $('.to_top').show();
          }else{
            $('.to_top').hide();
          }
        });
      });
    </script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>