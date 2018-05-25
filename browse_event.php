<?php         
include 'konek.php';
?>
<?php
                    include 'konek.php';
                    $sql ="";
//                    $all=" ";  
                    $kota = null;
                    $tanggal = null;
                    $genre = null;
                    if(isset($_POST['filter']) or isset($_POST['search'])){
                    if(isset($_POST['pilih_kota']))
                    {
                       $kota= $_POST['pilih_kota']; 
                    }
                    if(isset($_POST['tanggal-tampil']))
                    {
                       $tanggal = $_POST['tanggal-tampil'];
                    }
                        
                    if(isset($_POST['pilih_kategori']))
                    {
                       $genre = $_POST['pilih_kategori'];
                    }

                    };
                    
                   ?>
                  
<html>
<head>
    <title>Lihat Event</title>
    <link rel="stylesheet" href="Style.css" type="text/css">
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
    <?php 
            echo '<script src="jquery-1.11.2.min.js"></script>';
            echo '<script src="pop-up.js"></script>';
        ?>
</head>
<body>
   
<!-------------------------------------------- Navigation Bar -------------------------------------->
       
        <?php include "Navigation.php";?>
        
<!-------------------------------------------- ContentBar -------------------------------------->
        
        <div class="container">
            <div class="kategori">
               <form action="" method="post">
                    <p>
                        TAMPILKAN DI
                    </p>
                    <select name="pilih_kota">
                      <option disabled selected>Pilih Kota</option>
                       <?php
                        $sql_drop_down = "SELECT * FROM lokasi";
                        $sth2 = $conn->prepare($sql_drop_down);
                        $sth2->execute();
                        while($result = $sth2->fetch(PDO::FETCH_ASSOC)){
                        
                        echo "<option value=";
                        echo $result['KOTA'].">";
                        echo $result['KOTA'];
                        echo "</option>";
                            }
                        ?>
                        
                    </select>
                    <p>
                        PADA
                    </p>
                        <input type="date" name="tanggal-tampil">
                    <p>
                        GENRE
                    </p>
                    <select name="pilih_kategori" id="">
                       <option selected disabled>Pilih Kategori</option>
                        <?php
                        $sql_drop_down2 = "SELECT DISTINCT GENRE FROM music_event";
                        $sth3 = $conn->prepare($sql_drop_down2);
                        $sth3->execute();
                        while($result = $sth3->fetch(PDO::FETCH_ASSOC)){
                        
                        echo "<option value=";
                        echo $result['GENRE'].">";
                        echo $result['GENRE'];
                        echo "</option>";
                            }
                        ?>
                    </select>
                    <input type="submit" name="filter" id="filter">
                </form>
                <hr>
            </div>

               <div class="contain">
                  <?php
                        global $sql;
                        $all='';
                        global $conn;
                        global $result;
                        global $kota,$tanggal,$genre;
//                        $sql = "SELECT * FROM music_event join lokasi on music_event.id_event = lokasi.id_event where KOTA='$pilih' and TANGGAL='$tanggal' and GENRE='$genre'" ;
                        $sql = "SELECT * FROM music_event join lokasi on music_event.ID_event = lokasi.ID_event where 1=1" ;

                        if($kota !== null){
                            $all =$all.''.$kota;    
                            $sql = $sql." and KOTA = '$kota'";
                        }
                        if($tanggal != null){

                            $sql = $sql." and tanggal= '$tanggal'";
                            $all =$all.' - '.$tanggal;  
                        }
                        if($genre != null){

                            $sql = $sql." and genre = '$genre'";
                            $all =$all.' - '.$genre;  
                        }

                    $sth = $conn->prepare($sql);
                    $sth->execute();
                    $jumlahKolom=$sth->rowCount();
//                    echo $jumlahKolom;
                    if($jumlahKolom !== 0){
//                    $all = $kota.' '.$tanggal.' '.$genre; 
                    echo '
                    <div class="kategori-hasil">
                        <p>

                        '.$all.'
                        </p>
                    </div>';
                    }
                    elseif($jumlahKolom == 0){
                    echo '
                    <div class="gagal">
                    <h1>OOOPS</h1>
                    <p>Maaf Tidak ada hasil untuk ditampilkan,Cek kembali mallkan anda !</p>
                    </div>
                    ';
                    
                    echo $all;
                    }
                    while($result = $sth->fetch(PDO::FETCH_ASSOC)){
                    
 echo '
                    <div class="satu">
                    <form action="Detail.php" method="post">
                         <p id="judul">
                            <a href="####">';
                    echo '<input type="hidden" name="id" value=';
                    echo $result['ID_Event'].'>';
                    echo $result['GENRE'];
                    echo '
                       </a><img src=';
                    echo $result['gambar'];
                    echo '></p>
                        <div class="tail">
                        <p class="nama-event">';
                    echo $result['NAMA'];
                    echo '</p>
                        </div>
                        <div class="tail">
                            <ul>
                                <li><i class="fa fa-map-marker"></i>';
                    echo $result['KOTA'];
                    echo '</li><li><i class="fa fa-calendar"></i>';
                    echo $result['TANGGAL'];
                    echo '</li></ul>
                        </div>
                        <div class="tail">';
                    echo $result['DESKRIPSI'];
                    echo '</div>

                    <div class="tail2">
                    
                    <input type="submit" name="detail" value="Selengkapnya" id="button">
                    <i class="fa fa-caret-right"></i>
                    
                        </div>
                    </div></form>';

                    };
                   
                   ?>
                </div>
        </div>
        
<!-------------------------------------------- FOOTER -------------------------------------->
        <?php echo file_get_contents("footer.php");?>


<!------------------------------------------------LOGIN POP UP------------------------------------------>
        <?php echo file_get_contents("Login(Pop up).php");?>
<!-------------------------------------------------DAFTAR POP UP------------------------------------------------>
        <?php echo file_get_contents("Daftar(Pop up).php");?>        

</body>
</html>