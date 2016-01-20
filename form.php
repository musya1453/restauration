<?php
// если была нажата кнопка "Отправить"
header('Refresh: 2; url=http://blackstonedevs.esy.es/');
if (isset($_POST['submit'])) {
  // $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1000) - урезаем текст до 1000 символов. Для переменной $_POST['mess'] все аналогично
  $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000);
  $mess = 'ТЕЛЕФОН:'.$_POST['tel']."\r\n".'ЭЛЕКТРОННАЯ ПОЧТА:'.$_POST['email']."\r\n".'КОММЕНТАРИЙ:'.$_POST['text'];
  $title = "Заказ на консультацию";
  // $to - кому отправляем
  $to = 'stella.leimann@gmail.com';
  // $from - от кого

  // функция, которая отправляет наше письмо.
  mail($to, $title, $name, $mess);
  //echo 'Спасибо! Ваше письмо отправлено.';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>ВАША ЗАЯВКА ОТПРАВЛЕНА</title>
  <meta charset="utf-8"/>
  <link href="theme/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body class="send-form">
<div class="black-screen1"></div>
<div class="thanks">
  СПАСИБО! ВАША ЗАЯВКА ОТПРАВЛЕНА, ОЖИДАЙТЕ ЗВОНКА
</div>
</body>
</html>