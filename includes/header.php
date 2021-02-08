<?php
    $navactiveH = $_SERVER['SCRIPT_NAME'];
 ?>
<header class="header">
 <div class="conteiner">
   <div class="first_strip_items">
      <a href="index.php" class="first_strip_1"><img class="NHLogo" src="images/NurayHouseLogo.png"></a>
      <div class="num_header"><img class="phone_header" src="images/phone.png">+(994)50-480-59-59</div>
      <div class="langgen">
          <a href="?lang=az"><img class="lang a" src="images/langaz.png"></a>
          <a href="?lang=en"><img class="lang" src="images/langen.png"></a>
          <a href="?lang=ru"><img class="lang r" src="images/langrus.png"></a>
      </div>
    </div>
    <div class="header__higher">
          <a href="index.php" class="header__logo">NurayHouse</a>
          <nav class="nav" role="navigation">
           <a class="menu-trigger"><img class="triggericon" src="images/icon-menu.png"></a>
            <ul class="parent">
              <li class="linav"><a  class="nav__link ml-0 <?='/Our-projects.php'===$navactiveH?'active':''?>" href="Our-projects.php"><?php echo $lang['our_proj'] ?></a></li>
              <li class="linav"><a id="btn" class="nav__link arr d <?=(('/Interior.php'===$navactiveH)?'active':'') || '/Exterier.php'===$navactiveH?'active':''?>"><?php echo $lang['design'] ?><i class="arrow"></i></a>
                  <ul class="child">
                      <li class="linav"><a class="nav__link_child <?='/Interior.php'===$navactiveH?'active':''?>" href="Interior.php"><?php echo $lang['Interior'] ?></a></li>
                      <li class="linav"><a class="nav__link_child <?='/Exterier.php'===$navactiveH?'active':''?>" href="Exterier.php"><?php echo $lang['exterier'] ?></a></li>
                  </ul>
              </li>
              <li class="linav"><a class="nav__link <?='/Quality.php'===$navactiveH?'active':''?>" href="Quality.php"><?php echo $lang['quality'] ?></a></li>
              <li class="linav"><a class="nav__link <?='/Contacts.php'===$navactiveH?'active':''?>" href="Contacts.php"><?php echo $lang['contacts'] ?></a></li>
              <li class="linav"><a class="nav__link last <?='/About-us.php'===$navactiveH?'active':''?>" href="About-us.php"><?php echo $lang['about'] ?></a></li>
            </ul>
          </nav>
    </div>
 </div>
</header>
<div class="first_strip"></div>
<div class="second_strip"></div>
