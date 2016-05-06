

<?php
include "koneksi.php";
$query="select * from makanan";
$hasil=mysql_query($query);
?>

<body>

<?php
while($buff=mysql_fetch_array($hasil)){
?>
    <div class="container">


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Menu
                        <strong>Warung Kita</strong>
                    </h2>
                    <hr>
                </div>
        

                
                <div class="col-lg-12 text-center">
                    


                    <img class="img-responsive img-border img-full" src="img/<?php echo $buff['gambar']?>" alt="">
                    <h2><?php echo $buff['nama_menu'];?>
                    <br>
                    <small>Rp.<?php echo $buff['harga'];?></small>
                    </h2>
                    <p><?php echo $buff['deskripsi'];?></p>
                    
                    <hr>
                </div>
                
               
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="hapus"><a href="?module=hapus_menu&id=<?php echo $buff['id_makanan'];?>">Hapus</a>
                        </li>
                        <li class="edit"><a href="?module=edit_menu&id=<?php echo $buff['id_makanan'];?>">Edit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    
    
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<?php
};
mysql_close();
?>
</body>

<div class="container">
<div class="row">
<div class="box">

<div class="col-lg-12 text-center">
<ul class="pager">

                  <li class="hapus"><a href="?module=tambah_menu">+Tambah Menu</a>
                  </li>
                        
</ul>
</div>
</div>
</div>
</div>



