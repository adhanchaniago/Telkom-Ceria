<?php
    session_start();

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

    
    require ( './../load.php');
?>

<html>
    <head>
        <title>Halaman Tiket</title>
	    
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
		
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="/login/telkom.png" width="100px" height="25px"  ></a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="tiket.php">Lihat Semua Tiket</a></li>
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

        <div id="tiket">
		    <div id = "kotak_tiket"><p>Navigasi</p>
			    <div id = "kotak_div_tiket">
                    
                    <button type="button" class="btn btn-primary">Lihat Semua Tiket</button>
                    <button type="button" class="btn btn-success"><a href="closetiket.php">Lihat Closed Tiket</a></button>
                    <button type="button" class="btn btn-warning">Lihat Pending Tiket</button>
                    <button type="button" class="btn btn-success">Lihat Closed All Tiket</button>
                
                </div>
            </div>
            <div id="kotak_tiket2"><p>Unclosed Tiket</p>

                <h6>Tampilkan</h6>
                <div id="kotak_div_tiket2">
                    <table style = "width:100%;">
                    <tr>
                        <th>AKSI</th>
                        <th>ID INCIDENT</th>
                        <th>STATUS</th>
                        <th>WORKZONE</th>
                        <th>NOMOR INET</th>
                        <th>NOMOR TELEPON</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>CONTACT PERSON</th>
                        <th>TX</th>
                        <th>RX</th>
                        <th>TANGGAL CLOSE</th>
                        <th>CLOSED BY</th>
                        <!-- <th>KETERANGAN KENDALA</th>
                        <th>KETERANGAN CLOSED</th>
                        <th>KETERANGAN PENDING</th>
                        <th>MATERIAL</th>
                        <th>TEKNISI</th> -->
                    </tr>
                    </table>
                    <?php
                                $sql = "select * from tiket WHERE id_incident = 'IN11'";
                                $result = mysqli_query($koneksi,$sql);
                                if (!$result) {
                                    printf("Error: %s\n", mysqli_error($koneksi));
                                    exit();
                                }
                                while ($tampil = mysqli_fetch_array($result)){
                                    echo "ID INCIDENT : ".$tampil['id_incident']."STATUS :".$tampil['status']." Tanggal Rekap ".$tampil['tanggal']." Nama Pelanggan"
                                    .$tampil['nama_pelanggan']."Alpro".$tampil['alpro'];
                                }  
                            ?>
                </div>
            </div>
        </div>
        
    </body>
</html>
