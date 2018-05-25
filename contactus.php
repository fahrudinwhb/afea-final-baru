<html>
    <head>
        <link rel="stylesheet" href="Style.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
        <?php 
            echo '<script src="jquery-1.11.2.min.js"></script>';
            echo '<script src="pop-up.js"></script>';
        ?>
    </head>
    <body>
<!------------------------------------------------Navigation Bar------------------------------------------>
        <?php include "Navigation.php";?>
<!------------------------------------------------Konten----------------------------------------->    
        <div class="container-us">
        <br>
        <div class="third-content-a">
               <div class="fourth">
               <div class="cont-d"></div>
                <h1 class="h1 rekomen">
                    Hubungi Kami
                </h1>
                </div>
            <div class="mencakup">
            <div class="one-four-us" >
                <img src="afeacontact.png" id="fotocontact"><br>
                <div class="tulisanin">WEBSITE:<br><a href="Home.php">WWW.AFEA.COM</a><br></div>
            </div>
            <div class="two-four-us">
                <img src="fb.png" id="fotocontact">
                <br>FACEBOOK:<br><a href="https://www.facebook.com/anessa.afea?ref=br_rs">Http:facebook.com/afea</a><br>
            </div>
            <div class="three-four-us">
                <img src="email.png" id="fotocontact">
                <br>EMAIL:<br><a href="##">Afea@gmail.com</a><br>
            </div>
            <div class="four-four-us">
                <img src="telp.png" id="fotocontact">
                <br>KANTOR:<br>0370-41360021<br>
            </div>
            </div>
        </div>
        </div>
        <div></div>
        <br>
        <div class="container-us">
            <div class="third-content-a">
               <div class="fourth">
               <div class="cont-d-2"></div>
                <h1 class="h1 rekomen">
                    Kritik dan Saran
                </h1>
                </div>
                <form action="" method="post" class="formbawah">
                    <table id="concol">
                        <tr>
                            <td>
                                <h3>
                                    Nama
                                </h3>
                            </td>
                            <td>
                                <h3>
                                    :
                                </h3>
                            </td>
                            <td>
                                <input type="text" name="Namapenerima" placeholder="Nama">
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <h3>
                                   E-mail
                               </h3>
                            </td>
                            <td>
                                <h3>
                                    :
                                </h3>
                            </td>
                            <td>
                                <input type="text" name="Nomerhape" placeholder="example@contoh.com">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>
                                    Pesan
                                </h3>
                            </td>
                            <td>
                                <h3>
                                    :
                                </h3>
                            </td>
                            <td>
                                <textarea type="text" name="kirimtiket" class="kirimin" placeholder="Isi kritik dan saran anda"></textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Kirim" class="input"/>
                </form>
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