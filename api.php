<?php
  session_start();
  require_once "classes/shortener.php";

  $s = new Shortener();

  if(isset($_GET['url'])) {
   $url = $_GET['url'];
   if($code = $s->makeCode($url)) {
   $_SESSION['feedback'] = "http://shli.fun/$code";
      } else {
   $_SESSION['feedback'] = "Ошибка! Возможно, некорректный URL? Он должен содержать http://";
   }
  }
  if(isset($_SESSION['feedback'])) {
   echo "<p>".$_SESSION['feedback']."</p>";
   unset($_SESSION['feedback']);
  }
  
  
  
//  header('Location: answer.php');
?>