<!DOCTYPE html>
<html lang="en">
   <head>
        <title>Google Map - Harviacode.com</title>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    </head>
<body>
<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Lokasi
                        <strong>Warung Kita</strong>
                    </h2>
                    <hr>
                </div>
                
           
                
<div id="map" class="col-md-8" style=" margin-left:130px; margin-top:30px; margin-bottom:30px; width: 600px; height: 300px; border:medium; background-image: url(img/google.jpg); ">
                    
<script type="text/javascript">
              
//              menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(-6.305297, 106.757002);
 
//              pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom: 17,
                  center: myLatlng
              };
              
//              menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map"), myOptions);
              
//              menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"Warung Kita"
              });
        </script> 
        </div>
       
                <div class="col-md-4" style="margin-top:30px; margin-bottom:30px; alignment-adjust:middle">
                  <p>Address:
                        <strong><br/>Jalan WR. Supratman no.33 Ciputat
                            <br>Tangerang Selatan</strong>
                    </p>
                    <br/>
                     <p>Email:
                        <strong><br/><a href="mailto:warung_kita@gmail.com">warung_kita@gmail.com</a></strong>
                    </p>
                    <p>Phone:
                        <strong><br/>14056</strong>
                    </p>
                    <br/>
				</div>
                <div class="clearfix"></div>
            </div>
      

        

    </div>
    </div>
    <!-- /.container -->



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
