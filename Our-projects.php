<?php
    include "configs/configlang.php";
 ?>
<!DOCTYPE html>
<html lang="az">
<head>
  <?php require "includes/head.php"; ?>
  <?php require "includes/incfancystyle.php"; ?>
  <link rel="stylesheet" href="css/Our-projects.css">
  <title><?php echo $lang['tittleoprj'] ?></title>
</head>

<body>
  <?php require "includes/header.php"; ?>

  <section class="section">
    <div class="conteiner">
      <h1 class="galleryh1"><?php echo $lang['1bl'] ?>
      <div class="gallery">
                            <!--  (a[data-fancybox="gallery" href="img/gallery/full/img_$$.jpg"]>img src="img/gallery/thumbs/img$$.jpg")-->
          <!--  (a[data-fancybox="gallery" href="images/gallery/full/img_$$.jpg"]>img[src="images/gallery/thumbs/img_$$.jpg" alt="img $$"])*20   -->
          <a href="images/firstgallery/full/1stblock/1stblock.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/1stblock.jpg"></a>
          <a href="images/firstgallery/full/1stblock/55.38.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/55.38.jpg"></a>
          <a href="images/firstgallery/full/1stblock/55.94.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/55.94.jpg"></a>
          <a href="images/firstgallery/full/1stblock/56.12.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/56.12.jpg"></a>
          <a href="images/firstgallery/full/1stblock/62.98.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/62.98.jpg"></a>
          <a href="images/firstgallery/full/1stblock/63.89.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/63.89.jpg"></a>
          <a href="images/firstgallery/full/1stblock/64.51.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/64.51.jpg"></a>
          <a href="images/firstgallery/full/1stblock/66.80.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/66.80.jpg"></a>
          <a href="images/firstgallery/full/1stblock/71.68.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/71.68.jpg"></a>
          <a href="images/firstgallery/full/1stblock/91.06.jpg" data-fancybox="gallery-1"><img src="images/firstgallery/thumbs/1stblock/91.06.jpg"></a>
      </div>
      </h1>
      <h1 class="galleryh1"><?php echo $lang['2bl'] ?>
      <div class="gallery">
          <a href="images/firstgallery/full/2ndblock/2ndblock.jpg" data-fancybox="gallery-2"><img src="images/firstgallery/thumbs/2ndblock/2ndblock.jpg"></a>
          <a href="images/firstgallery/full/2ndblock/57.57.jpg" data-fancybox="gallery-2"><img src="images/firstgallery/thumbs/2ndblock/57.57.jpg"></a>
          <a href="images/firstgallery/full/2ndblock/58.49.jpg" data-fancybox="gallery-2"><img src="images/firstgallery/thumbs/2ndblock/58.49.jpg"></a>
          <a href="images/firstgallery/full/2ndblock/63.29.jpg" data-fancybox="gallery-2"><img src="images/firstgallery/thumbs/2ndblock/63.29.jpg"></a>
          <a href="images/firstgallery/full/2ndblock/66.91.jpg" data-fancybox="gallery-2"><img src="images/firstgallery/thumbs/2ndblock/66.91.jpg"></a>
          <a href="images/firstgallery/full/2ndblock/67.64.jpg" data-fancybox="gallery-2"><img src="images/firstgallery/thumbs/2ndblock/67.64.jpg"></a>
          <a href="images/firstgallery/full/2ndblock/87.18.jpg" data-fancybox="gallery-2"><img src="images/firstgallery/thumbs/2ndblock/87.18.jpg"></a>
          <a href="images/firstgallery/full/2ndblock/102.45.jpg" data-fancybox="gallery-2"><img src="images/firstgallery/thumbs/2ndblock/102.45.jpg"></a>
      </div>
      </h1>
      <h1 class="galleryh1"><?php echo $lang['3bl'] ?>
      <div class="gallery">
          <a href="images/firstgallery/full/3rdblock/3rdblock.jpg" data-fancybox="gallery-3"><img src="images/firstgallery/thumbs/3rdblock/3rdblock.jpg"></a>
      </div>
      </h1>
  </div>
  </section>

  <?php require "includes/footer.php"; ?>
  <?php require "includes/incfancybox.php"; ?>
</body>
</html>
