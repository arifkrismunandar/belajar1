<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MaLilStuff</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="daftarharga.php"><h1><span>M</span>aLilStuff</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="daftarharga.php" class="active">Daftar Harga</a></li>
								<li role="presentation"><a href="listdaftarorder.php">Daftar Order</a></li>
								<li role="presentation"><a href="pemasukan.php">Pemasukan</a></li>
								<li role="presentation"><a href="pengeluaran.php">Pengeluaran</a></li>
								<li role="presentation"><a href="keuntungan.php">Keuntungan</a></li>
								<li role="presentation"><a href="logout.php">LogOut</a></li>	
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>

   <div class="container-fluid">
    <div class="text-center">
    	
		<h3>Daftar Harga</h3>
	
	<nav>
		<a href="formdaftarharga.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	<div align="center">
		<center>
	<table border="1" style="color:#000000" width="1100">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$query = mysqli_query($db, "SELECT * FROM daftarharga");
		
		while($harga = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$harga['id_barang']."</td>";
			echo "<td>".$harga['namabarang']."</td>";
			echo "<td>".$harga['hargabeli']."</td>";
			echo "<td>".$harga['hargajual']."</td>";
			
			echo "<td>";
			echo "<a href='editharga.php?id_barang=".$harga['id_barang']."'>Edit</a> | ";
			echo "<a href='hapusdaftarharga.php?id_barang=".$harga['id_barang']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
</center>
</div>
</br>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	</div>
</div>
	
	<div class="about-us">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h3>What People Are</h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<h2>Saying About Us</h2>
				</div>

				
					<div>
						<img src="images/about/arif.jpg" alt="" width="145" height="137">
						<h3>Arif Krismunandar & Reza Afriansyah</h3>
						<p>Mahasiswa Teknik Informatika Semester 4 Universitas Islam Negeri Sunan Gunung Djati Bandung</p>
					</div>
				</div>
				
				
				
			</div>	
		</div>
	</div>
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
					<h2>MaLilStuff</h2>
					<p>Aplikasi Perbelanjaan Online sebagi tugas untuk memenuhi tugas Praktikum Rekayasa Perangkat Lunak yang di bimbing Bapak Lukman.</p>
					
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
					</ul>
				</div>
				
				
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
					<h3>CONTACT INFO</h3>
					<ul>
						<li><i class="fa fa-home fa-2x"></i> Universitas Islam Negeri Sunan Gunung Djati Bandung</li><hr>
						<li><i class="fa fa-phone fa-2x"></i> +62 812-2550-4796</li><hr>
						<li><i class="fa fa-envelope fa-2x"></i> ArifReza@gmail.com</li>
					</ul>
				</div>
				
			</div>
		</div>
		
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						&copy; 2018 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Arif&Reza</a>. All Rights Reserved.
					</div>
                   
					<div class="col-md-6">
						<ul class="pull-right">
							<li><a href="daftarharga.php">Daftar Harga</a></li>
							<li><a href="listdaftarorder.php">Daftar Order</a></li>
							<li><a href="pemasukan.php">Pemasukan</a></li>
							<li><a href="pengeluaran.php">Pengeluaran</a></li>
							<li><a href="keuntungan.php">Keuntungan</a></li>
						</ul>
					</div>
				</div>
				<div class="pull-right">
					<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
				</div>
			</div>
		</div>		
	</footer>
   
	
    
    <script src="js/jquery-2.1.1.min.js"></script>	
   
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script> 
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	
  </body>
</html>