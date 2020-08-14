<?php

if(!isset($_GET['sifra'])){
    header('location: index.php');
}

require_once 'konfiguracija.php';

$izraz=$veza->prepare('delete from riba where sifra=:sifra');
$izraz->execute($_GET);
header('location: privatno.php');