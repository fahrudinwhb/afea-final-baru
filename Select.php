<?php

include 'konek.php';
$sql ="";
$num ="";


    global $sql;
    global $conn;
    global $result;
    $sql1 = 'SELECT * FROM music_event join lokasi on music_event.ID_event = lokasi.ID_event where TAG = "terbaru" ' ;
    $sql2 = 'SELECT * FROM music_event join lokasi on music_event.ID_event = lokasi.ID_event where TAG = "PalingSeringDilihat" ' ;
    $sql3 = 'SELECT * FROM music_event join lokasi on music_event.ID_event = lokasi.ID_event where TAG = "populer" ' ;
    $sql4 = 'SELECT * FROM music_event join lokasi on music_event.ID_event = lokasi.ID_event where TAG = "rekomendasi" ' ;
    
$sth = $conn->prepare($sql1);
$sth->execute();

$sth2 = $conn->prepare($sql2);
$sth2->execute();

$sth3 = $conn->prepare($sql3);
$sth3->execute();

$sth4 = $conn->prepare($sql4);
$sth4->execute();





?>

