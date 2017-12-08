<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/master.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <title>Calendrier de l'avent</title>
    
    <?php
      if (basename($_SERVER['PHP_SELF']) != "index.php" && !isset($_COOKIE['unlocked'])) {
              $day = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
              $date = date("2017-12-$day");
              if (strtotime($date) > strtotime(date('Y-m-d')))
                header('Location: /index.php');
      }
            ?>
  </head>
  <body>
    
      <div class="i-medium">
        <img id="logo" src="/assets/logo.png" alt="logo" />
        <div class="i-large">
          <?php if (basename($_SERVER['PHP_SELF']) != "index.php") { ?>
            <a id="back" href="/index.php">Retour</a>
          <?php } ?>
