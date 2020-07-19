
<?php
  require_once "classes/shortener.php";

	$AdOn = TRUE; // Вкл/Выкл показа рекламы
	$AdId = "1612"; // ID обработчика catcut.net
	

  if(isset($_GET['code'])) {
   $s = new Shortener();
   $code = $_GET['code'];
   if($url = $s->getUrl($code)) {
		if($AdOn) {
		$url = base64_encode($url);
    	header("Location: http://catcut.net/go.php?h_i={$AdId}&h_u={$url}");
    	} else {
    	header("Location: {$url}");
    	}
    exit();
   }
  }

  header('Location: index.php');
  

  
?>