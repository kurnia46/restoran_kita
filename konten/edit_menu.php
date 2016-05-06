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
$id=$_GET['id'];
$select="Select * from makanan where id_makanan='$id'";
$hasil=mysql_query($select);
while($buff=mysql_fetch_array($hasil)){
?>

<div class="col-lg-12 text-center">
                    <form role="form" action="konten/edit.php" method="post" enctype="multipart/form-data">
                        
<input name="id" type="hidden" value="<?php echo $buff['id_makanan'];?>"/>
                                <label>Name</label>
                                <input name="nama_menu" type="text" class="form-control" placeholder="<?php echo $buff['nama_menu'];?>"/>
                            
                            
                            
                            <br/>
                                <label>Gambar</label>
                                <input name="gambar" type="file" class="form-control"/>
                                
                            <br/>
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" type="text" class="form-control" rows="6" placeholder="<?php echo $buff['deskripsi'];?>"></textarea>
                            
                            <br/>
                                <label>Harga</label>
                                <input name="harga" type="text" class="form-control" placeholder="<?php echo $buff['harga'];?>"/>
                             
                          
                               
                           
                               
                           
                           






                            <div class="form-group col-lg-12" style="margin-top:30px;">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
   <?php
};
mysql_close();
?>