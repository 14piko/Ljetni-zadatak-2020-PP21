<?php
require_once 'konfiguracija.php';

if(isset($_POST['naziv'])){
    //elog($_POST);
$izraz=$veza->prepare('update riba set
naziv=:naziv,
pocetaklovostaja=:pocetaklovostaja,
krajlovostaja=:krajlovostaja,
opis=:opis
where sifra=:sifra');
$izraz->execute($_POST);
header('location: privatno.php');
}


if(isset($_GET['sifra'])){
$izraz=$veza->prepare('select * from riba where sifra=:sifra');
$izraz->execute($_GET);
$riba=$izraz->fetch();
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
<h2>Promjena</h2>
<div class="floated-label-wrapper">
<label for="naziv">Naziv ribe</label>
<input type="text" id="naziv" name="naziv" value="<?php echo $riba->naziv ?>">
</div>
<div class="floated-label-wrapper">
<label for="pocetaklovostaja">Početak lovostaja</label>
<input type="date" id="pocetaklovostaja" name="pocetaklovostaja" value="<?php echo $riba->pocetaklovostaja ?>">
</div>
<div class="floated-label-wrapper">
<label for="krajlovostaja">Kraj lovostaja</label>
<input type="date" id="krajlovostaja" name="krajlovostaja" value="<?php echo $riba->krajlovostaja ?>">
</div>
<div class="floated-label-wrapper">
<label for="opis">Opis ribe</label>
<textarea name="opis" id="opis" cols="30" rows="10"><?php echo $riba->opis ?></textarea>
</div>
<input type="hidden" name="sifra" value="<?php echo $riba->sifra ?>">
<input class="button expanded" type="submit" value="Promjeni ribu">
</form>

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
