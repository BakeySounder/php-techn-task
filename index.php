<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание</title>
</head>
<body>
<form action="" method="post" id ="form1">
    <input type="text" name="Phone" id="">
    <button type="submit">Отправить</button>
</form>
</body>
<script src = "index.js"></script>
</html>

<?php


include("phones.php");
$test_phones = [ "+375(29)123-45-67", "+7 (495) 123 45 67", "7 777 123-45-67"];


foreach ($test_phones as $key => $value) {
    echo $value . " -> ".get_country_of_phone(clear_phone_number($value),$asc_masks). "<br>";
}
?>

