<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Website Warung Kita</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Warung Kita</div>
    <div class="address-bar">Jalan WR. Supratman no.33 Ciputat | Tangerang Selatan | 14056<br/><br/><?php session_start(); 
						if(!isset($_SESSION['username'])){ ?>
							
                        <?php }else {?>
                        	Selamat Datang <?php echo '<strong>'.$_SESSION['username'].'</strong>';?> 
							|<a href="konten/logout.php" style="color:#0F0;">Logout</a>
                        <?php }?></div>

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
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <?php if(!isset($_SESSION['username'])){ ?>
						<li><a href="index.php" class="current">Home</a></li>
                        <li><a href="?module=tentang">Tentang</a></li>
                        <li><a href="?module=lokasi">Lokasi</a></li>
						<li><a href="?module=lihat_menu">Daftar Menu</a></li>
                        <li><a href="?module=form_pesan">Pesan Menu</a>
                    <?php }?>
						
                        
                        
                        <?php if(isset($_SESSION['username'])){ ?>
                        <li><a href="?module=tentang">Tentang</a></li>
                        <li><a href="?module=lokasi">Lokasi</a></li>
                        <li><a href="?module=lihat_admin">Daftar Menu</a></li>
                        <li><a href="?module=lihat_pesanan">Daftar Pesanan</a></li>
                        <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
    <?php if(isset($_GET['module']))
				include "konten/$_GET[module].php";
			else
				include "konten/home.php";
				?>

      
        </div>

   

 
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Warung Kita 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>
