<?php 
include 'sesi.php';
?>
<div class="nav-bar" id="top">
    <form action="browse_event.php" method="post">
        <div class="container">
           
            <div class="title-bar-left">
                <img src="logo.png" class="logo">
                    <h3>AFEA</h3>
                    <p>Konser Music<p>
            </div>
            
            <div class="title-bar-right">
                <p class="search">Kota</p>
                <input type="text" class="search-box" name="pilih_kota">
            </div>
               
                <div class="title-bar-right">
                    <p class="search">Kategori</p>
                    <input type="text" class="search-box" name="pilih_kategori">
                </div>
                <button id="search-button" name="search">Pencarian</button>
        </div>
    </form>
</div>
            
<div class="cat-bar">
    <div class="container">
        <a href="Home.php" class="a-cat">Beranda</a>
        <a href="browse_event.php" class="a-cat">Lihat Konser</a>
        <a href="contactus.php" class="a-cat">Hubungi Kami</a>
        <?php
            if($_SESSION['login_season'] == 0){
                
                echo '<a href="#" class="a-cat login activate_modal" name="3_window">Masuk</a>';
            }
            elseif($_SESSION['login_season'] == 1){
                echo '<a href="profile.php" class="a-cat login">'.$_SESSION["username"].'</a>';
                echo '<form action="" method="post"><input type="submit" name="logout" class="a-cat logout" value="Logout"></form>';
                }
            else{
                echo "gagal";
                echo $_SESSION['login_season'];
                }

            if(isset($_POST['logout'])){
                session_destroy();
                header('Location: Home.php');
                }
        ?>
                
    </div>
</div>
<!------------------------------------------------LOGIN POP UP------------------------------------------>
        <?php include "Login(Pop up).php";?>

        
<!-------------------------------------------------DAFTAR POP UP------------------------------------------------>
        <?php include "Daftar(Pop up).php";?>
