<?php 
require_once 'konfiguracija.php';
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ribička udruga</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
<body>
    
<div class="bg-img">
  <form action="autoriziraj.php" class="container" method="POST">
    <h1 style="font-family:Times New Roman;font-style:italic;">Ribička udruga</h1>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Unesite Email" name="email" id="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" id="password" placeholder="Unesite Password" name="password" id="password" required>

    <button type="submit" class="btn">Prijavite se!</button>
    <p>Username:edunova@edunova.hr Password:e</p>
  
    <a target="blank" href="https://github.com/14piko/Ljetni-zadatak-2020-PP21">Github link!</a>
  <div><?php

    $p=isset($_GET['p']) ? (int)$_GET['p'] : 0;

    switch ($p) {
      case 1:
        echo 'Greška ulaznih parametara!';
        break;
      case 2:
        echo 'Molim Vas unesite email i lozinku!';
        break;
      case 3:
        echo 'Neispravna kombinacija korisničkog imena i lozinke!';
        break;
      default:
        echo 'Molim Vas prijavite se!';
        break;
    }
    
  
  ?>
  </div>
  </form>

  

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
