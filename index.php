<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
    .popup {
      position: fixed;
      top: 75%;
      right: 20px;

      z-index: 9999;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      display: none;
    }
</style>

<body>
<form action="" method="post" id ="form1">
    <input class="form-control w-25" placeholder="Введите номер телефона, чтобы узнать страну" type="text" name="Phone" id="">
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>

  <div id="cookiePopup" class="popup">
    <h3>Уведомление о куках</h3>
    <p>Мы используем файлы cookie на этом сайте.<br>Нажмите "Принять", чтобы принять использование кукисов.</p>
    <button id="acceptButton" class="btn btn-primary">Принять</button>
    <button id="closeButton" class="btn btn-secondary">Закрыть</button>
  </div>
</body>
<script src = "index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>

<?php
include("phones.php");

$test_phones = [ "+375(29)123-45-67", "+7 (495) 123 45 67", "7 777 123-45-67"];

foreach ($test_phones as $key => $value) {
    echo $value . " -> ".get_country_of_phone(clear_phone_number($value),$asc_masks). "<br>";
}
?>

