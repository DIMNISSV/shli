<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
	<title>Сокращатель URL ShLi</title> <!-- Вместо ShLi вставьте название сайта -->
  <link rel="stylesheet" href="/style/css.css">
  <link rel="stylesheet" href="/style/menu.css">
</head>
<body>
<center>
<div class="menu">
<h2 class="menu-block">Меню</h2>
<h2 class="menu-block"><a href="/about_api.php">Об API</a></h2>
<h2 class="menu-block"><a href="/api.php?url=">API</a></h2>
</div>
</center>
<div class="left">
<a href="mailto:orgpetrov@gmail.com" > <!-- Замените на свою почту ('mailto:' оставьте) -->
<h2>Email для связи.</h2>
</a>
<h3>Можете писать туда свои жалобы и предложения, а также заказывать рекламу.</h3>
<h4>ShLi.Fun это обыкновенный сокращатель ссылок с открытым исходным кодом (на гитхабе).</h4>
<h3><a href="#" >Мы на GitHub</a></h3>
<pre>Скоро появимся на нём..)</pre>
<br>
<h5>
Скрипт сделал:
<a href="/m" ><b>DIMNISSV</b></a>
</h5>
</div>
  <div class="container">
   <h1 class="title">Сокращатель URL <b>ShLiFun</b></h1> <!-- Вместо ShLiFun вставьте название сайта -->
<?php
  if(isset($_SESSION['feedback'])) {
   echo "<p>".$_SESSION['feedback']."</p>";
   unset($_SESSION['feedback']);
  }
?>
   <form action="shorten.php" method="post">
    <input type="url" name="url" placeholder="Введите URL" autocomplete="off">
    <input type="submit" value="Сократить">    
   </form>
  </div>
</body>

</html>