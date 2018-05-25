<?php include 'konek.php'?>

<html>
<head>

	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
	<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
    <?php 
    echo '<script src="jquery-1.11.2.min.js"></script>';
    echo '<script src="pop-up.js"></script>';
    echo '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>';
    
    ?>
	
</head>
<body>
<!-------------------------------------------- Navigation Bar -------------------------------------->
        <?php include 'Navigation.php';
        ?>
<!------------------------------------------------- Content ----------------------------------------------->
<?php
if(isset($_POST['detail'])){
$ID_detail = $_POST['id'];
$sql_detail = "SELECT * FROM music_event join lokasi on music_event.ID_event = lokasi.ID_event where music_event.ID_event = '$ID_detail'" ;
$sth = $conn->prepare($sql_detail);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);
$lelah = $result['GENRE'];
$sql2 = "SELECT * FROM MUSIC_EVENT WHERE GENRE = '$lelah' AND ID_Event != '$ID_detail' LIMIT 2";
$sth2 = $conn->prepare($sql2);
$sth2->execute();


}
?>
	<div class="container">
	    
		<div class="left-content">
			<h2 id="map">Maps</h2>
			<div id="map-canvas"></div>
			<h2 id="gen-sama">Event dengan genre yang sama</h2>
            <ul>
            
                            <?php
               while($result2 = $sth2->fetch(PDO::FETCH_ASSOC)){
                echo '<li>';
                echo '<img src=';
                echo $result2['gambar'];
                
                echo '></li>';
               }
              ?>
            
            </ul>

		</div>
		
		<div class="right-content">
			<div id="title">
                <h1><?php echo $result['NAMA']; ?></h1>
            </div>
            <div class="content">
            <?php $_SESSION['map'] = $result['Map'];?>
                <script>
                    		function initialize() {
			var myLatlng = new google.maps.LatLng(<?php echo $_SESSION['map']; ?>);
  			var mapOptions = {
    		zoom: 13,
    		center: myLatlng
  			}
  			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  			var marker = new google.maps.Marker({
      		position: myLatlng,
      		map: map,
      		title: 'Hello World!'
  			});
		}

			google.maps.event.addDomListener(window, 'load', initialize);
                </script>
				<?php
                echo "<img src=";
                echo $result['gambar'].">";                                
                ?>
                <br><br>
                <ul>
                    <li><i class="fa fa-map-marker"></i>
                    <p>Lokasi</p><div><?php echo $result['KOTA'].','.$result['PROVINSI']?></div>
                    </li>
                    <li><i class="fa fa-calendar"></i><p>Tanggal</p><div><?php echo $result['TANGGAL']?></div>
                    </li>
                    <li><i class="fa fa-music"></i><p>Genre</p><div><?php echo $result['GENRE']?></div>
                    </li>
                    <li><i class="fa fa-clock-o"></i><p>Jam</p><div><?php echo $result['Jam']?></div>
                    </li>
                    <li><i class="fa fa-road"></i><p>Jalan</p><div><?php echo $result['JALAN']?></div>
                    </li>
                </ul>
			    <div class="detail">
					<p><?php echo $result['DESKRIPSI2'];?></p>
                </div>
               
            </div>
            <form action="Pesan.php" method="post">
            <?php $id=$result['ID_Event'];
            echo '<input type="hidden" name="id" value=';
            echo $result['ID_Event'].'>';?>
			<div class="tiket">
                <h3>Pilih tiket konser</h3>
                <div class="tipe-tiket">
                    <div class="cleft">    
                    <p>VIP (RP.
                    <?php echo $result['HargaVIP'];?>
                    )</p>
                    </div>
                    <div class="cright">
                        <p>Masukkan jumlah tiket</p>
                        <input type="number" name="jumlahVIP" min="1" max="20" placeholder="0" >
                    </div>
	
                </div>
                
                <div class="tipe-tiket">
                    <div class="cleft">    
                    <p>Reguler (RP.
                    <?php echo $result['HargaReguler'];?>
                    )</p>
                    </div>
                    <div class="cright">
                        <p>Masukkan jumlah tiket</p>
                        <input type="number" name="jumlahReguler" min="1" max="20" placeholder="0" required>
                    </div>
	               
                </div>
                <div class="tipe-tiket">
                   <?php
                    if($_SESSION['login_season'] == 1){
                    echo '<input type="submit" value="Beli" name="tiket" id="beli-tiket">';    
                    }
                    elseif($_SESSION['login_season'] == 0){
                    echo '<div id="login-dulu">
                    <i class="fa fa-exclamation-triangle"></i>
                    Login Dahulu Untuk Pembelian Tiket</div>';    
                    }
                    ?>
	               
                </div>
                
            </div>
            </form>
        </div>

		</div>		
		<br>
	
<!-------------------------------------------- FOOTER -------------------------------------->
        <?php include "footer.php";?>
<!------------------------------------------------LOGIN POP UP------------------------------------------>
        <?php include "Login(Pop up).php";?>
  
<!-------------------------------------------------DAFTAR POP UP------------------------------------------------>
        <?php include "Daftar(Pop up).php";?>
</body>
</html>