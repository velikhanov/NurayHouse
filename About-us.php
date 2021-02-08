<?php
    include "configs/configlang.php";
 ?>
<!DOCTYPE html>
<html lang="az">
<head>
  <?php require "includes/head.php"; ?>
  <?php require "includes/incfancystyle.php"; ?>
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/About-us.css">
  <title><?php echo $lang['tittleab'] ?></title>
</head>

<body>
  <?php require "includes/header.php"; ?>

<section class="section">
    <div class="conteiner">
        <div class="mainblock">
           <div class="informain">
                 <h1 class="inf1 first"><?php echo $lang['ab1'] ?></h1>
                   <h2 class="inf2"><?php echo $lang['ab2'] ?></h2>
                  <h1 class="inf1 second"><?php echo $lang['ab3'] ?></h1>
                    <h2 class="inf2 second"><?php echo $lang['ab4'] ?></h2>
            </div>
            <div class="videogeneral">
                <a class="XLa" data-fancybox href="images/about/aboutvid.mp4">
                  <h1><?php echo $lang['ab5'] ?></h1>
                  <img class="videothumb" src="images/Thumb for video.jpg">
                </a>
            </div>
        </div>
      <div class="informain">
        <h1 class="inf1"><?php echo $lang['ab6'] ?></h1>
          <h2 class="inf2"><?php echo $lang['ab7'] ?></h2>
          <h2 class="inf2"><?php echo $lang['ab8'] ?></h2>
        <h1 class="inf1"><?php echo $lang['ab9'] ?></h1>
         <h2 class="inf2"><?php echo $lang['ab10'] ?></h2>
         <h1 class="inf1"><?php echo $lang['ab11'] ?></h1>
         <h2 class="inf2"><?php echo $lang['ab12'] ?></h2>
         <h1 class="inf1"><?php echo $lang['ab13'] ?></h1>
         <h2 class="inf2"><?php echo $lang['ab14'] ?></h2>
          <h1 class="inf1"><?php echo $lang['ab15'] ?></h1>
              <h2 class="inf2 last"><?php echo $lang['ab16'] ?></h2>
        </div>
    </div>
  </section>

  <?php require "includes/footer.php"; ?>
  <?php require "includes/incfancybox.php"; ?>
</body>
</html>
