<?php
if(isset($_POST['naziv'])){
  require_once 'konfiguracija.php';


  $izraz=$veza->prepare('insert into riba (naziv,pocetaklovostaja,krajlovostaja,opis)
   values (:naziv,:pocetaklovostaja,:krajlovostaja,:opis)');
   $izraz->execute($_POST);
   header('location: privatno.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ribička udruga</title>
<link rel="stylesheet" href="assets/css/foundation.css">
</head>
<body>

<form class="callout" method="POST">
<h2>Dodavanje ribe</h2>
<div class="floated-label-wrapper">
<label for="naziv">Naziv ribe</label>
<input type="text" id="naziv" name="naziv">
<div class="floated-label-wrapper">
<label for="pocetaklovostaja">Početak lovostaja</label>
<input type="date" id="pocetaklovostaja" name="pocetaklovostaja">
</div>
<div class="floated-label-wrapper">
<label for="krajlovostaja">Kraj lovostaja</label>
<input type="date" id="krajlovostaja" name="krajlovostaja">
</div>
<div class="floated-label-wrapper">
<label for="opis">Opis ribe</label>
<textarea name="opis" id="opis" cols="30" rows="10"></textarea>
</div>
<input class="button expanded" type="submit" value="Dodaj novu ribu">
</form>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>