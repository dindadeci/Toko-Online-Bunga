<?php
session_start();
require '../config/functions.php';
$tbl_barang = query("SELECT * FROM tbl_barang ORDER BY id LIMIT 3");

if (!isset($_SESSION['username'])) {
	echo "<script>alert('Anda Harus Login!');</script>";
	header("Location: index.php");
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Halaman Admin</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/sb-admin.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="css/plugins/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	 <!-- Page-Level Plugin CSS - Tables -->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="../icon.png">

</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Deci Florist</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">

				<li>
					<?php 

          if(isset($_SESSION['username'])){

            ?>
            
            <a href="profil.php" class="element place-right">Selamat datang, <?php echo "$_SESSION[username]"; ?></a>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg" style="margin-right: 10px"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
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
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li>
						<a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
					</li>
					<li class="dropdown-header">Setup Konten</li>
					<li class="active">
						<a href="beranda.php"><i class="fa fa-fw fa-home"></i> Beranda</a>
					</li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-male"></i>Bunga Mati<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="setup_hiasmeja.php">Tanaman Hias Meja</a>
                            </li>
                            <li>
                                <a href="setup_crown.php">Crown Flower</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    	<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-fw fa-female"></i>Bunga Hidup<i class="fa fa-fw fa-caret-down"></i></a>
                    	<ul class="collapse list-unstyled" id="pageSubmenu">
                    		<li>
                    			<a href="setup_bouquet.php">Bouquet</a>
                    		</li>
                    		<li>
                    			<a href="setup_nyamuk.php">Tanaman Penghusir Nyamuk</a>
                    		</li>
                    		<li>
                    			<a href="setup_flowers.php">Macam Macam Bunga</a>
                    		</li>
                    	</ul>
                    </li>
                    <li class="dropdown-header">Setup Administrator</li>
                    <li>
                        <a href="setup_admin.php"><i class="fa fa-user-circle fa-fw"></i>&nbsp;Admin</a>
                    </li>
                    <li>
                        <a href="setup_member.php"><i class="fa fa-address-book fa-fw"></i>&nbsp;Member</a>
                    </li>
                    <li class="dropdown-header">Setup Pembayaran</li>
                    <li>
                        <a href="transaksi.php"><i class="fa fa-money fa-fw"></i>&nbsp;Pembayaran</a>
                    </li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>

		<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Beranda
						</h1>
						<ol class="breadcrumb">
							<li>
								<i class="fa fa-dashboard"></i>  <a href="home.php">Dashboard</a>
							</li>
							<li class="active">
								<i class="fa fa-home"></i> Beranda
							</li>
						</ol>
					</div>
				</div>
				<!-- /.row -->

				<!-- page table -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><h3>Beranda</h3></div>

							<div class="panel-body">
								<center><h2 style="color: red;">Produk Terbaru</h2></center><br>
								<div class="table-responsive">
								<table id="myTable" class="table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th scope="col" class="text-center">No.</th>
											<th scope="col" class="text-center">Nama Produk</th>
											<th scope="col" class="text-center">Harga</th>
											<th scope="col" class="text-center">Stock</th>
											<th scope="col" class="text-center">Keterangan</th>
											<th scope="col" class="text-center">Gambar</th>
											<th scope="col" class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbdy>


										<?php $i = 1; ?>
										<?php foreach( $tbl_barang as $row ) : ?>
											<tr class="text-center">
												<td><?= $i; ?></td>
												<td><?= $row["nama"] ;?></td>
												<td>Rp.<?= number_format($row["harga"]) ;?></td>
												<td><?= $row["stock"] ;?></td>
												<td><?= $row["keterangan"] ;?></td>
												<td><img src="../img/<?= $row["gambar"] ;?>" width="90px"></td>
												<td>
													<a href="tambah.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-primary btn-sm" name="submit">Tambah</button></a>
																							
													<a href="ubah.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-warning btn-sm" name="ubah">Ubah</button></a>
	
													<a href="hapus.php?id=<?= $row["id"]; ?>"><button type="submit" class="btn btn-danger btn-sm" name="hapus" style="margin-top: 4px;">Hapus</button></a>
												</td>
											</tr>
											<?php $i++; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>

						</div>
					</div>

				</div>



			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Morris Charts JavaScript -->
		<script src="js/plugins/morris/raphael.min.js"></script>
		<script src="js/plugins/morris/morris.min.js"></script>
		<script src="js/plugins/morris/morris-data.js"></script>

		<!-- Flot Charts JavaScript -->
		<!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
		<script src="js/plugins/flot/jquery.flot.js"></script>
		<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
		<script src="js/plugins/flot/jquery.flot.resize.js"></script>
		<script src="js/plugins/flot/jquery.flot.pie.js"></script>
		<script src="js/plugins/flot/flot-data.js"></script>

		<!-- Page-Level Plugin Scripts - Tables -->
		<script src="datatable/jquery.dataTables.min.js"></script>
		<script src="datatables/datatables.min.js"></script>
		<!-- tooltip -->
		<script>
			$('.tooltip-demo').tooltip({
				selector: "[data-toggle=tooltip]",
				container: "body"
			})
		</script>

		<!-- generate datatable on our table -->
		<script>
			$(document).ready( function () {
				$('#myTable').DataTable();
			} );
		</script>

	</body>

	</html>

