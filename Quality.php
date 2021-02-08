<?php
    include "configs/configlang.php";
 ?>
<!DOCTYPE html>
<html lang="az">
<head>
  <?php require "includes/head.php"; ?>
  <?php require "includes/incfancystyle.php"; ?>
  <link rel="stylesheet" href="css/Quality.css">
  <title><?php echo $lang['tittlequa'] ?></title>
</head>

<body>
 <?php require "includes/header.php"; ?>

  <section class="section">
      <h1 class="galleryh1"><?php echo $lang['fittings'] ?>
      <div class="gallery">
                            <!--  (a[data-fancybox="gallery" href="img/gallery/full/img_$$.jpg"]>img src="img/gallery/thumbs/img$$.jpg")-->
          <!--  (a[data-fancybox="gallery" href="images/gallery/full/img_$$.jpg"]>img[src="images/gallery/thumbs/img_$$.jpg" alt="img $$"])*20   -->
          <a href="images/Quality/full/img_1.jpg" data-fancybox="gallery-1"><img src="images/Quality/thumbs/img_1.jpg"></a>

      </div>
      </h1>
      <h1 class="galleryh1"><?php echo $lang['windows'] ?>
      <div class="gallery">
          <a href="images/Quality/full/img_2.png" data-fancybox="gallery-2"><img src="images/Quality/thumbs/img_2.png"></a>
          <a href="images/Quality/full/img_3az.jpg" data-fancybox="gallery-2"><img src="images/Quality/thumbs/img_3az.jpg"></a>
      </div>
      </h1>
      <h1 class="galleryh1"><?php echo $lang['elevator'] ?>
      <div class="gallery">
        <a href="images/Quality/full/img_4.png" data-fancybox="gallery-3"><img src="images/Quality/thumbs/img_4.png"></a>
        <a href="images/Quality/full/img_5.jpg" data-fancybox="gallery-3"><img src="images/Quality/thumbs/img_5.jpg"></a>
        <a href="images/Quality/full/img_6.jpg" data-fancybox="gallery-3"><img src="images/Quality/thumbs/img_6.jpg"></a>
        <a href="images/Quality/full/img_7.jpg" data-fancybox="gallery-3"><img src="images/Quality/thumbs/img_7.jpg"></a>
        <a href="images/Quality/full/img_8.jpg" data-fancybox="gallery-3"><img src="images/Quality/thumbs/img_8.jpg"></a>
      </div>
    </h1>
  </section>

  <?php require "includes/footer.php"; ?>
  <?php require "includes/incfancybox.php"; ?>
</body>
</html>
