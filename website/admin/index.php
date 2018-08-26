<?php
session_start();

/* Check Apakah user sudah login atau belum*/
if( !isset($_SESSION['_login']) )
{
	header('location:'.$url.'/login-page.php');
	exit;

}else{

	if( !defined('index') )
	{
		define('index', 'boleh akses');
	}
}

/** 
 * menyisipkan file load.php, agar bisa menggunakan variable yang sudah dibuat 
 */
require ( './../load.php');

?>

<html>
<head>
	<title>Halaman Administrator</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="custome.css" rel="stylesheet" type="text/css">
	<link href="image.css" rel="stylesheet" type ="text/css">
	
	<script scr="<?php echo $url?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="body home-page">
		
	<!-- Fixed bar -->

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="/login/telkom.png" width="100px" height="25px"  ></a>
    </div>
    	<ul class="nav navbar-nav">
      		<li class="active"><a href="#">Home</a></li>
      		<li><a href="tiket.php">Lihat Semua Tiket</a></li>
	  		<li><a href="#">Rekap</a></li>
	  		<li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Manajemen User
        	<span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="#">Admin</a></li>
          		<li><a href="#">User</a></li>
        	</ul>
    	</ul>
    	<ul class="nav navbar-nav navbar-right">
			<li><span class="user">
				<?php
					echo date("l ");
					echo date("d.m.Y");
				?><span></li>
    		<li><a href="#"><span class="glyphicon glyphicon-user"> Hi,<?php echo $_SESSION['_username'];?></span></span> </a></li>
    		<li><a href="<?php echo $url;?>/login-page.php" class="default"><i class="fa fa-sign-out"></i>Logout</a></li>
    	</ul>
  </div>
</nav>

 	<div class="container-fluid">
 		<h1 class="user"> Selamat Datang, <?php echo $_SESSION['_username'];?></h1>
 		<h3 class="user"> Rekap Manual Tiket Gangguan Magelang</h3>
		
		<div class="row">
 			<div class="col-sm-3">
 				<div class = "container">
  					<img src="/login/LULUS.png" alt="tes" style="width:30%;">
					<div class ="content"><a href=#>Selengkapnya</a></div>
				</div>
				&nbsp;
				<div class = "container">
  					<img src="/login/LULUS.png" alt="tes" style="width:30%;">
					<div class ="content"><a href=#>Selengkapnya</a></div>
				</div>
 			</div>	 
			<div class="col-sm-3">
 				<div class = "container">
 					<img src="/login/LULUS.png" alt="tes" style="width:30%;">
					<div class ="content"><a href=#>Selengkapnya</a></div>
				</div>
						
			</div> 
 			<div class="col-sm-3">
 				<div class = "container">
 					<img src="/login/LULUS.png" alt="tes" style="width:30%;">
					<div class ="content"><a href=#>Selengkapnya</a></div>
				</div>
			</div>
 			<div class="col-sm-3">
 				<div class = "container">
 					<img src="/login/LULUS.png" alt="tes" style="width:30%;">
					<div class ="content"><a href=#>Selengkapnya</a></div>
				</div>
			</div>
   		</div>
 	</div>

	<!-- <footer class="footer">
		<div class="text-center">
			&copy; 2018 <a href="http://indihome.com">IndiHome </a>
		</div>
	</footer> -->
</body>
</html>
