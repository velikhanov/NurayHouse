<?php
    include "configs/configlang.php";
 ?>
<!DOCTYPE html>
<html lang="az">
<head>
  <?php require "includes/head.php"; ?>
  <?php require "includes/incfancystyle.php"; ?>
  <link rel="stylesheet" href="css/Interior.css">
  <title><?php echo $lang['tittleint'] ?></title>
</head>

<body>
  <?php require "includes/header.php"; ?>

  <section class="section">
      <h1 class="galleryh1">
      <div class="gallery">
                            <!--  (a[data-fancybox="gallery" href="img/gallery/full/img_$$.jpg"]>img src="img/gallery/thumbs/img$$.jpg")-->
          <!--  (a[data-fancybox="gallery" href="images/gallery/full/img_$$.jpg"]>img[src="images/gallery/thumbs/img_$$.jpg" alt="img $$"])*20   -->
          <a href="images/Interior/full/img_1.jpg" data-fancybox="gallery-1"><img src="images/Interior/thumbs/img_1.jpg"></a>
          <a href="images/Interior/full/img_2.jpg" data-fancybox="gallery-1"><img src="images/Interior/thumbs/img_2.jpg"></a>
          <a href="images/Interior/full/img_3.jpg" data-fancybox="gallery-1"><img src="images/Interior/thumbs/img_3.jpg"></a>
          <a href="images/Interior/full/img_4.jpg" data-fancybox="gallery-1"><img src="images/Interior/thumbs/img_4.jpg"></a>
          <a href="images/Interior/full/img_5.jpg" data-fancybox="gallery-1"><img src="images/Interior/thumbs/img_5.jpg"></a>
          <a href="images/Interior/full/img_6.jpg" data-fancybox="gallery-1"><img src="images/Interior/thumbs/img_6.jpg"></a>
          <a href="images/Interior/full/img_7.jpg" data-fancybox="gallery-1"><img src="images/Interior/thumbs/img_7.jpg"></a>
          <a href="images/Interior/full/img_8.jpg" data-fancybox="gallery-1"><img src="images/Interior/thumbs/img_8.jpg"></a>
      </div>
      </h1>
      <!--<h1 class="galleryh1">
      <div class="gallery">
          <a href="images/" data-fancybox="gallery-2"><img src="images/"></a>
          <a href="images/" data-fancybox="gallery-2"><img src="images/"></a>
          <a href="images/" data-fancybox="gallery-2"><img src="images/"></a>
          <a href="images/" data-fancybox="gallery-2"><img src="images/"></a>
          <a href="images/" data-fancybox="gallery-2"><img src="images/"></a>
          <a href="images/" data-fancybox="gallery-2"><img src="images/"></a>
          <a href="images/" data-fancybox="gallery-2"><img src="images/"></a>
          <a href="images/" data-fancybox="gallery-2"><img src="images/"></a>
      </div>
      </h1>
      <h1 class="galleryh1">
      <div class="gallery">
          <a href="images/" data-fancybox="gallery-3"><img src="images/"></a>
      </div>
    </h1>-->
  </section>

  <?php require "includes/footer.php"; ?>
  <?php require "includes/incfancybox.php"; ?>
</body>
</html>
