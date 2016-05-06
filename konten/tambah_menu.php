<div class="row">
            <div class="box">
                
                    <hr>
                    <h2 class="intro-text text-center">Form
                        <strong>Pesanan</strong>
                    </h2>
                    <hr>
                    <p></p>

                      <?php

include"koneksi.php";
$cari_kd=mysql_query("select max(id_makanan)as kode from makanan"); //mencari kode yang paling besar atau kode yang baru masuk
$tm_cari=mysql_fetch_array($cari_kd);
$kode=substr($tm_cari['kode'],1,4); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya. 
$tambah=$kode+1; //kode yang sudah di pecah di tambah 1
	if($tambah<10){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka
    $id="P000".$tambah;
    }else{
    $id="P00".$tambah;
    }
?>
                      <div class="col-lg-12 text-center">
                    <form role="form" action="konten/register.php" method="post" enctype="multipart/form-data">
                        
                            <label>Id Menu</label>
                                <input name="id_makanan" type="text" class="form-control" value="<?php echo $id;?>" readonly />
                            
                            <br/>
                                <label>Name</label>
                                <input name="nama_menu" type="text" class="form-control"/>
                            
                            
                            
                            <br/>
                                <label>Gambar</label>
                                <input name="gambar" type="file" class="form-control"/>
                                
                            <br/>
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" type="text" class="form-control" rows="6"></textarea>
                            
                            <br/>
                                <label>Harga</label>
                                <input name="harga" type="text" class="form-control"/>
                             
                          
                               
                           
                               
                            
                           






                            <div class="form-group col-lg-12" style="margin-top:30px;">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                       
                    </form>
                </div>
            </div>
        </div>