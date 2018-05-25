<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['login_season'])){
    $_SESSION['login_season'] = 0;
}
if(!isset($_SESSION['username'])){
    $_SESSION['username'] = '';
}

?>