<?php
  session_start();
  require_once "classes/shortener.php";

  $s = new Shortener();

  if(isset($_POST['url'])) {
   $url = $_POST['url'];
   if($code = $s->makeCode($url)) {
    $_SESSION['feedback'] = "Готово! Вот ваша ссылка: <a href='//shli.fun/$code'>shli.fun/$code</a>";
   } else {
    $_SESSION['feedback'] = "Ошибка! Возможно, некорректный URL?";
   }
  }
	
  header('Location: index.php');
?>