<?php 
/** cegah akses langsung pada file */
if( !defined('index') ) { die('Halaman Di lindungi'); } ?>

<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="<?php echo $url?>/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $url?>/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $url?>/assets/custome.css">
		
		<script scr="<?php echo $url?>assets/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body class="body home-page">
		
	<!-- Fixed bar -->

	<nav class="fixed-bar">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<h1 class="title-site">
						<a href="http://indihome.com"><img src="/login/telkom.png" width="100px" height="20px"></a>
					</h1>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4 text-right">
					<a href="<?php echo $url;?>/login-page.php" class="btn btn-sm btn-danger"><i class="fa fa-user"></i>  Login</a>	
				</div>
			</div>
		</div>
	</nav>

	<!-- End Fixed bar -->