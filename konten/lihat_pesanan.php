


<?php
include "koneksi.php";
$query="select * from pesanan";
$hasil=mysql_query($query);
?>
<div class="container">


        <div class="row">
            <div class="box">
<div class="col-lg-12 text-center">

<table class="table table-striped">

<tr>
<td bgcolor="#56c2e1">ID Pesanan</td>
<td bgcolor="#56c2e1">Nama Pelanggan</td>
<td bgcolor="#56c2e1">Alamat</td>
<td bgcolor="#56c2e1">Nomor Telepon</td>
<td bgcolor="#56c2e1">Email</td>
<td bgcolor="#56c2e1">Menu yang dipesan</td>
<td bgcolor="#56c2e1">Waktu Pemesanan</td>
<td bgcolor="#56c2e1">Pilihan Pesan</td>
<td bgcolor="#56c2e1">Aksi</td>



</tr>



<?php
while($buff=mysql_fetch_array($hasil)){
?>


					
                    <tr>
					<td><?php echo $buff['id_pesanan'];?></td>
                    <td><?php echo $buff['nama_pelanggan'];?></td>
                    <td><?php echo $buff['alamat'];?></td>
                    <td><?php echo $buff['no_telp'];?></td>
                    <td><?php echo $buff['email'];?></td>
                    <td><?php echo $buff['menu_pesanan'];?></td>
                    <td><?php echo $buff['waktu'];?></td>
                    <td><?php echo $buff['pilihan_pesan'];?></td>
                    <td style="text-align:center;" width="49"><a href="?module=hapus_pesanan&id=<?php echo $buff['id_pesanan'];?>">Hapus</a></td>
                    </tr>
                    
				    
<?php
};
mysql_close();
?>

</table>
</div>

</div>
</div></div>