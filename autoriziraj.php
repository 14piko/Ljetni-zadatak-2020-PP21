<?php
require_once 'konfiguracija.php';


if(!isset($_POST['email']) || !isset($_POST['password'])){
    header('location: index.php?p=1');
    exit;
}

if(trim($_POST['email'])==='' || trim($_POST['password'])===''){
    header('location: index.php?p=2');
    exit;
}


if($_POST['email']!=='mirko.eres1@gmail.com' && $_POST['email']!=='edunova@edunova.hr'){
    header('location: index.php?p=3');
    exit;
}

if($_POST['password']!=='mirko' && $_POST['password']!=='e'){
    header('location: index.php?p=3');
    exit;
}


$_SESSION['autoriziran']=$_POST['email'];
header('location: privatno.php');