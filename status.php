<?php
include 'konek.php';
include 'sesi.php';
?>
<html lang="en">
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
    
<!-------------------------------------------------Konten------------------------------------------------>
<?php
    // include 'Navigation.php';
        if(isset($_POST['Submit'])){
  $UserName = $_POST['username'];
  $Password = $_POST['password'];
  $sql = "select ID_USER,NamaPengguna,USER_PASSWORD from afea_user where NamaPengguna='$UserName'";
  $sth = $conn->prepare($sql);
  $sth->execute();
  $result = $sth->fetch(PDO::FETCH_ASSOC);
    if($result['NamaPengguna'] == $UserName && $result['USER_PASSWORD'] == $Password){
    $_SESSION["login_season"] = 1;
    $_SESSION["id_user"] = $result['ID_USER'];
    $_SESSION["username"] = $UserName;
    $_SESSION["password"] = $password;
    header("location:Home.php");
    }
    else{
    
    echo '
        <div class="wrap">
        <div class="status-container">
        <p id="one">Status</p>
        <div class="status2">
        <i class="fa fa-exclamation-triangle"></i>
        <p id="two">Ooops,Gagal melakukan Login cek kembali Username dan Password anda';
    echo '</div></div></div>';
    }

}
    


if(isset($_POST['Daftar'])){
  include 'Navigation.php';
  $Nama = $_POST['Nama'];
  $Email = $_POST['Email'];
  $Tanggal = $_POST['Tanggal'];
  $Hp=$_POST['Hp'];
  $UserName = $_POST['UserName'];
  $Password = $_POST['Password'];
  $kelamin = $_POST['sex'];
    
  $insert = "INSERT INTO AFEA_USER(NAMA,USER_PASSWORD,EMAIL,NOTELP,TANGGALLAHIR,JenisKelamin,NAMAPENGGUNA) 
  VALUES('$Nama','$Password','$Email','$Hp', '$Tanggal','$kelamin','$UserName')";
    
  $select ="select NamaPengguna from afea_user";

  $sth = $conn->prepare($insert);


    try {
    $sth->execute();
    echo '
        <div class="wrap">
        <div class="status-container">
        <p id="one">Status</p>
        <div class="status">
        <i class="fa fa-check"></i>
        <p id="two">Selamat,Akun Dengan Username :';
       
    echo ' '.$UserName.' berhasil dibuat</p>';
    echo '</div></div></div>';
} 
catch( PDOException $e ) {
    error_log($e -> getMessage());
    switch($e->getCode()){

        
        case 2300:
        echo '
        <div class="wrap">
        <div class="status-container">
        <p id="one">Status</p>
        <div class="status2">
        <i class="fa fa-exclamation-triangle"></i>
        <p id="two">Ooops,Gagal membuat akun,Username yang anda pilih sudah ada';
    echo '</div></div></div>';
            break;
        default:
        echo '
        <div class="wrap">
        <div class="status-container">
        <p id="one">Status</p>
        <div class="status2">
        <i class="fa fa-exclamation-triangle"></i>
        <p id="two">Ooops,Gagal membuat akun cek kembali data-data anda';
    echo '</div></div></div>';        
    }
}
}

if(isset($_POST['simpan'])){
$nama = $_POST['Namapenerima'];
$alamat = $_POST['kirimtiket'];

echo '
        <div class="wrap">
        <div class="status-container">
        <p id="one">Status</p>
        <div class="status">
        <i class="fa fa-check"></i>
        <p id="two">Tiket anda akan segera dikirim ke : ';
    echo $nama. ' dengan alamat <br>'.$alamat;       
    echo '</p>';
    echo '</div></div></div>';

}
?>
<!-------------------------------------------- FOOTER -------------------------------------->
        <?php include "footer.php";?>
</body>
</html>