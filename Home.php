<?php 
    include 'select.php' ; 

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
        
<!-------------------------------------------- Content -------------------------------------->
        
        <div class="first-content">
           <br>
           <br>
            <div class="container">
               <div class="first">
               <div class="a"></div>
                <h1 class="h1 terbaru">
                    Terbaru
                </h1>
                
                </div>
            <br>
<!--                  <hr class="terbaru">-->
                   <?php
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
        
        <br>
        
        <div class="container">
               <div class="second">
               <div class="b"></div>
                <h1 class="h1 populer">
                    Populer
                </h1>
                </div>
                <br>
            <div class="second-content">
              <?php
               while($result3 = $sth3->fetch(PDO::FETCH_ASSOC)){
                
                echo '<div class="one-two">';
                echo '<form action="Detail.php" method="post">';
                echo '<p id="judul">';
                echo '<input type="image" name="detail" src=';
                echo $result3['gambar'];
                echo ' value="Submit" id="pop-image" />';
                echo '<input type="hidden" name="id" value=';
                echo $result3['ID_Event'].'>';
                echo  '<a href="###">';
                echo $result3['GENRE'];
                echo '</a> </p>';
                echo '<div class="popular">';
                echo '<a href="#" id="jdl">';
                echo $result3['NAMA'];
                echo '</a></div></form></div>';

               }
              ?>
            </div>
        </div>
        
        <div class="container">
                <div class="third">
               <div class="c"></div>
                <h1 class="h1 sering">
                    Paling Sering Dilihat
                </h1>
                </div>
                <br>
                    <?php
                    while($result2 = $sth2->fetch(PDO::FETCH_ASSOC)){
                    echo '
                    <div class="satu">
                    <form action="Detail.php" method="post">
                         <p id="judul">
                            <a href="####">';
                    echo '<input type="hidden" name="id" value=';
                    echo $result2['ID_Event'].'>';
                    echo $result2['GENRE'];
                    echo '
                       </a><img src=';
                    echo $result2['gambar'];
                    echo '></p>
                        <div class="tail">
                        <p class="nama-event">';
                    echo $result2['NAMA'];
                    echo '</p>
                        </div>
                        <div class="tail">
                            <ul>
                                <li><i class="fa fa-map-marker"></i>';
                    echo $result2['KOTA'];
                    echo '</li><li><i class="fa fa-calendar"></i>';
                    echo $result2['TANGGAL'];
                    echo '</li></ul>
                        </div>
                        <div class="tail">';
                    echo $result2['DESKRIPSI'];
                    echo '</div>

                    <div class="tail2">
                    
                    <input type="submit" name="detail" value="Selengkapnya" id="button">
                    <i class="fa fa-caret-right"></i>
                    
                        </div>
                    </div></form>';

                    };
                    ?>
    </div>
        
        <br>
        
        <div class="container">
        <div class="third-content">
                <div class="fourth">
               <div class="d"></div>
                <h1 class="h1 rekomen">
                    Rekomendasi
                </h1>
                </div>
                <br>
           <?php
               while($result4 = $sth4->fetch(PDO::FETCH_ASSOC)){
                echo '<div class="one-four">';
                echo '<form action="Detail.php" method="post">';
                echo '<p id="judul-four">';
                echo '<input type="image" name="detail" src=';
                echo $result4['gambar'];
                echo ' value="Submit" id="rekomen-image" />';
                echo '<input type="hidden" name="id" value=';
                echo $result4['ID_Event'].'>';
                echo  '<a href="###">';
                echo $result4['GENRE'];
                echo '</a> </p>';
                echo '<div class="caption">';
                echo '<a href="#">';
                echo $result4['NAMA'];
                echo '</a></div></form></div>';
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