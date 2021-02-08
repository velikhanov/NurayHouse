<?php
    include "configs/configlang.php";
 ?>
<!DOCTYPE html>
<html lang="az">
<head>
  <?php require "includes/head.php"; ?>
  <link rel="stylesheet" href="css/Contacts.css">
  <title><?php echo $lang['tittlecont'] ?></title>
</head>


<body>
  <?php require "includes/header.php"; ?>

<section class="section">
  <section class="section2"></section>
    <div class="conteiner">
       <div class="contactsimg">
         <div class="textcont">
           <img class="contimg1" src="images/Contacts/MP.png">
           <h3><?php echo $lang['mobile'] ?></h3>
           <h1>+(994)50-480-59-59</h1>
         </div>
         <div class="textcont">
            <img class="contimg2" src="images/Contacts/HP.png">
            <h3><?php echo $lang['telephone'] ?></h3>
            <h1>+(994)12-349-91-66</h1>
         </div>
         <div class="textcont">
            <img class="contimg3" src="images/Contacts/Loc.png">
            <h3><?php echo $lang['mainoff'] ?></h3>
            <h1><?php echo $lang['mainloc'] ?></h1>
         </div>
         <div class="textcont">
            <img class="contimg4" src="images/Contacts/Envelope.png">
            <h3>E-mail</h3>
            <h1>multiipea@mail.ru</h1>
         </div>
       </div>
       <div class="googlemapblock">
           <iframe class="googlemapcont" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d379.4435892213481!2d49.72535124802561!3d40.463124292100375!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1595430243097!5m2!1sru!2s"></iframe>
        </div>
    </div>
 </section>

  <?php require "includes/footer.php"; ?>
</body>
</html>
