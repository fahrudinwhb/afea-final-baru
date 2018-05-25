<?php include 'konek.php'?>
   <html>
    <head>
        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="Style.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
        <?php 
            echo '<script src="jquery-1.11.2.min.js"></script>';
            echo '<script src="pop-up.js"></script>';
        ?>

    </head>
    <body>
<!-------------------------------------------- Navigation Bar -------------------------------------->
        <?php include 'Navigation.php';
        ?>
<!------------------------------------------------LOGIN POP UP------------------------------------------>
        <?php include "Login(Pop up).php";?>

        
<!-------------------------------------------------DAFTAR POP UP------------------------------------------------>
        <?php include "Daftar(Pop up).php";?>
<!------------------------------------------------ Konten --------------------------------------------- -->
<?php
if(isset($_POST['tiket'])){
$ID_detail = $_POST['id'];
$sql_detail = "SELECT * FROM music_event join lokasi on music_event.ID_event = lokasi.ID_event where music_event.ID_event = '$ID_detail'" ;

$sth = $conn->prepare($sql_detail);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);
//--------------------------------------------variabel pemesanan--------------------------------------------    
$vip = $_POST['jumlahVIP'];
$reguler = $_POST['jumlahReguler'];
$vip_harga =$result['HargaVIP']*$vip;
$reguler_harga=$result['HargaReguler']*$reguler;
$total_pembayaran =$vip_harga + $reguler_harga; 
$id_pemesanan = $result['ID_Event'].$_SESSION['username'].$vip.$reguler;
$id_event = $result['ID_Event'];
$id_user = $_SESSION['id_user'];
$sql_pemesanan = "INSERT INTO PEMESANAN(ID_PEMESANAN,ID_EVENT,ID_USER,JumlahVIP,JumlahReguler,TotalHargaVIP,TotalHargaReguler,TotalPembayaran)
                values ('$id_pemesanan','$id_event','$id_user','$vip','$reguler','$vip_harga','$reguler_harga','$total_pembayaran')";
$sth2 = $conn->prepare($sql_pemesanan);
$sth2->execute();

}
?>
    <div class="container">
      <div class="summary">
          <p id="title">Tiket yang dibeli</p>
          <div class="sum-tiket">
             <?php
              echo '<img src=';
              echo $result['gambar'];
                    echo '>';
              ?>

              <div class="da">
              <p id="nama-event"><?php echo $result['NAMA'];?></p>
                  <div class="harga">
                      <p><?php echo $vip?> VIP</p>
                      <p>Harga <?php echo $vip_harga?></p>
                  </div>
                <div class="harga2">
                      <p><?php echo $reguler?> Reguler</p>
                      <p>Harga <?php echo $reguler_harga?></p>
                      
                  </div>
              </div>
              <p id="total-harga">Total Harga : <?php echo $total_pembayaran?></p>
          </div>
      </div>
       <div class="alamat">
        <form action="status.php" method="POST">
            <p id="title">
                Pengisian Alamat Pengiriman Tiket :
            </p>
            <table id="tb">
               
                <tr>
                    <td><p>Nama Penerima</p></td>
                    <td>:</td>
                    <td><input type="text" name="Namapenerima" placeholder="" required></td>
                </tr>
                
                <tr>
                    <td><p>No. Telephone</p></td>
                    <td>:</td>
                    <td><input type="text" name="Nomerhape" placeholder="" required></td>
                </tr>
                
                <tr>
                    <td><p>Alamat Penerima</p></td>    
                    <td>:</td>
                    <td><textarea type="text" name="kirimtiket" class="kirimin" placeholder="" required></textarea></td>
                </tr>
                
            </table>
            <input type="submit" name="simpan" value="Simpan" class="simpan"/>
        </form>
        </div>

    </div>
        
<!-------------------------------------------- FOOTER -------------------------------------->
        <?php include "footer.php";?>

    </body>
</html>