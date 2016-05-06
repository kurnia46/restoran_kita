
  
    <div class="row">
            <div class="box" >
            
             
                    <hr>
                    <h2 class="intro-text text-center">Form
                        <strong>Pesanan</strong>
                    </h2>
                    <hr>
                    <p></p>
                    
                    <?php

include"koneksi.php";
$cari_kd=mysql_query("select max(id_pesanan)as kode from pesanan"); //mencari kode yang paling besar atau kode yang baru masuk
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

                    <form role="form" action="konten/register_pesan.php" method="post">
                      
                           
                            <label>Id Order</label>
                                <input name="id_pesanan" type="text" class="form-control" value="<?php echo $id;?>" readonly />
                            
                            <br/>
                                <label>Name</label>
                                <input name="nama_pelanggan" type="text" class="form-control" required="required"/>
                            
                            <br/>
                                <label>Alamat</label>
                                <textarea name="alamat" type="text" class="form-control" rows="6" required="required"></textarea>
                            
                            <br/>
                                <label>Phone Number</label>
                                <input name="no_telp" type="text" class="form-control" required="required">
                            
                            <br/>
                                <label>Email Address</label>
                                <input name="email" type="text" class="form-control" required="required">
                             
                             <br/>
                             <label>Pilihan Service</label>
                             <select name="pilihan_pesan" class="form-control">
                             <option value="0" selected>- Pilih Service -</option>
                             <option value="Pesan">- Hanya Pesan -</option>
                             <option value="Antar">- Antar -</option>
                             </select>

                             <br/>
                            <label>Choose Menu</label> 
                            
  
<?php
$query= mysql_query("select * from makanan");
while($hasil=mysql_fetch_array($query)){
?>
  <br/><br/>                         
<input type="checkbox" name="menu[]" value="<?php echo $hasil['nama_menu']?>"><?php echo $hasil['nama_menu']?> | Rp.<?php echo $hasil['harga']?> <br/> 
<table class="table table-bordered"><td><img class="img-responsive img-border img-full" src="img/<?php echo $hasil['gambar']?>" >
</td>
</table>

<?php
}
?>
                             
                           
                               
                           
                          
                           

							
                             
                            
                           


                            <div class="form-group col-lg-12" style="margin-top:30px;">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        
                      
                        
                    </form>
                </div>
            </div>
        </div>
        

