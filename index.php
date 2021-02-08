<?php
    include "configs/configlang.php";
 ?>
<!DOCTYPE html>
<html lang="az">
<head>
  <?php require "includes/head.php"; ?>
  <link rel="stylesheet" href="css/style.css">
  <title>NurayHouse</title>
</head>

<body>
  <?php require "includes/header.php"; ?>
<section class="section">
  <div class="conteiner">
    <img class="House" src="<?php echo $lang['house'] ?>">
  <div class="conteiner">
    <h1 class="maptext"><?php echo $lang['maptext'] ?></h1>
        <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d379.4435892213481!2d49.72535124802561!3d40.463124292100375!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1595430243097!5m2!1sru!2s"></iframe>
  </div>
</section>
<?php require "includes/footer.php"; ?>
</body>
</html>
