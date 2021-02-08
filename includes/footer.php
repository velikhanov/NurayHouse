<?php
    $navactiveF = $_SERVER['SCRIPT_NAME'];
 ?>
<footer class="footer">
  <div class="conteiner">
    <div class="contacts1">
      <div class="contacts_footer">
          <div class="cont1_footer">
          <img class="phone_footer" src="images/phone.png">
          +(994)50-480-59-59</div>
          <div class="cont2_footer">
          <img class="mail_footer" src="images/mail.png">
          multiipea@mail.ru</div>
          <div class="cont3_footer">
          <a class="googleurl" href="https://goo.gl/maps/vwNM7EnBEUGGE2JZ9" target="_blank"> <img class="location_footer" src="images/location.png"> <?php echo $lang['mainloc'] ?></a></div>
      </div>
      <nav class="nav_footer">
        <ul class="list">
          <li class="listhover <?='/Our-projects.php'===$navactiveF?'activelist':''?>"><a class="nav__link_footer <?='/Our-projects.php'===$navactiveF?'_active':''?>" href="Our-projects.php"><?php echo $lang['our_proj'] ?></a></li>
          <li class="listhover <?='/Interior.php'===$navactiveF?'activelist':''?>"><a class="nav__link_footer <?='/Interior.php'===$navactiveF?'_active':''?>" href="Interior.php"><?php echo $lang['Interior'] ?></a></li>
          <li class="listhover <?='/Exterier.php'===$navactiveF?'activelist':''?>"><a class="nav__link_footer <?='/Exterier.php'===$navactiveF?'_active':''?>" href="Exterier.php"><?php echo $lang['exterier'] ?></a></li>
        </ul>
      </nav>
      <nav class="nav_footer">
        <ul class="list">
          <li class="listhover <?='/Quality.php'===$navactiveF?'activelist':''?>"> <a class="nav__link_footer <?='/Quality.php'===$navactiveF?'_active':''?>" href="Quality.php"><?php echo $lang['quality'] ?></a></li>
          <li class="listhover <?='/Contacts.php'===$navactiveF?'activelist':''?>"><a class="nav__link_footer <?='/Contacts.php'===$navactiveF?'_active':''?>" href="Contacts.php"><?php echo $lang['contacts'] ?></a></li>
          <li class="listhover <?='/About-us.php'===$navactiveF?'activelist':''?>"><a class="nav__link_footer <?='/About-us.php'===$navactiveF?'_active':''?>" href="About-us.php"><?php echo $lang['about'] ?></a></li>
        </ul>
      </nav>
      <div class="links">
        <a class="fblink"  href="https://www.facebook.com/ev.al.902266" target="_blank"><img class="fb_footer" src="images/facebookicon.png"></a>
        <a class="instlink" href="https://www.instagram.com/nuray_rezidens_xirdalan/" target="_blank"><img class="inst_footer" src="images/instagramicon.png"></a>
      </div>
    </div>
  </div>
  <div class="copyrights"><b>&copy;Copyright 2014-2020, NurayHouseMTK</b></div>
</footer>
<script src="JS/jquery-3.5.1.min.js"></script>
<script src="JS/script.js"></script>
