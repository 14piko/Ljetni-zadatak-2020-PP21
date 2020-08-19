<?php

if(!isset($_GET['sifra'])){
    header('location: index.php');
    exit;
}

require_once 'konfiguracija.php';

if(!isset($_SESSION['autoriziran'])){
    header('location: index.php');
    exit;
    }

$izraz=$veza->prepare('delete from riba where sifra=:sifra');
$izraz->execute($_GET);
header('location: privatno.php');