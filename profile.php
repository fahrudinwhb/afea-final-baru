<?php 
    include 'konek.php' ; 

?>
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
<!-------------------------------------------------KONTEN--------------------------------------------------->
<?php
$username = $_SESSION['username'];
$sql_user = "SELECT * FROM afea_user where NamaPengguna='$username'" ;
$sth = $conn->prepare($sql_user);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

$id_user = $result['ID_USER'];
$sql_all="SELECT * FROM pemesanan join music_event on pemesanan.ID_Event = music_event.ID_Event where ID_USER='$id_user'";
$sth2 = $conn->prepare($sql_all);
$sth2->execute();

?>
       <br>
        <div class="container">
       <div class="alamat">
        <form action="" method="POST">
            <p id="title">
                Profile : <?php echo $username;?>
            </p>
            <table id="tb">
               
                <tr>
                    <td><p>ID User</p></td>
                    <td>:</td>
                    <td><?php echo $result['ID_USER'];?></td>
                </tr>
                
                <tr>
                    <td><p>Nama</td>
                    <td>:</td>
                    <td><?php echo $result['NAMA'];?></td>
                </tr>
                
                <tr>
                    <td><p>Email</p></td>    
                    <td>:</td>
                    <td><?php echo $result['EMAIL'];?></td>
                </tr>
                
                <tr>
                    <td><p>No Telpon</p></td>    
                    <td>:</td>
                    <td><?php echo $result['NoTelp'];?></td>
                </tr>
                
                <tr>
                    <td><p>Tanggal Lahir</p></td>    
                    <td>:</td>
                    <td><?php echo $result['TanggalLahir'];?></td>
                </tr>
                
                <tr>
                    <td><p>Jenis Kelamin</p></td>    
                    <td>:</td>
                    <td><?php echo $result['JenisKelamin'];?></td>
                </tr>
                
            </table>
            
        </form>
        </div>
            <div class="summary">
             <p id="title">Tiket yang telah dibeli</p>
             <?php
            while($result2 = $sth2->fetch(PDO::FETCH_ASSOC)){

            echo '<div class="sum-tiket">';
            echo '<img src=';
            echo $result2['gambar'];
            echo '>';
            echo  '<div class="da">';
            echo  '<p id="nama-event">';
            echo $result2['NAMA'];
            echo  '</p><div class="harga"><p>';
            echo $result2['JumlahVIP'].' ';
            echo 'VIP</p>'.' '; 
            echo "<p>Harga Rp.".' ';
            echo $result2['HargaVIP'].' ';
            echo "</p>";
            echo '</div><div class="harga2"><p>';
            echo $result2['JumlahReguler'].' ';
            echo 'Reguler</p>'.' ';
            echo '<p>Harga Rp.'.' ';
            echo $result2['HargaReguler'];
            echo '</p>'.'</div>'.'</div>';
            echo '<p id="total-harga">Total Harga : Rp. ';
            echo $result2['TotalPembayaran'];
            echo '</p></div><hr>';
            
            }
            ?>
            </div>
        </div>
       
          
<!-------------------------------------------- FOOTER -------------------------------------->
        <?php include "footer.php";?>

            
        
<!------------------------------------------------LOGIN POP UP------------------------------------------>
        <?php include "Login(Pop up).php";?>

        
<!-------------------------------------------------DAFTAR POP UP------------------------------------------------>
        <?php include "Daftar(Pop up).php";?>
   
</body>
</html>