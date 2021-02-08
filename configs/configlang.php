<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

$acceptLang = ['ru', 'az', 'en'];
$lang = in_array($lang, $acceptLang) ? $lang : 'en';

session_start();
if(!isset($_SESSION['lang']))
    $_SESSION['lang'] = $lang;
  else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
  if ($_GET['lang'] == "en")
    $_SESSION['lang'] = "en";
  else if ($_GET['lang'] == "az")
    $_SESSION['lang'] = "az";
  else if ($_GET['lang'] == "ru")
    $_SESSION['lang'] = "ru";
}
require_once "languages/" . $_SESSION['lang'] . ".php";
?>
