<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание</title>
</head>
<body>

</body>
</html>

<?php
function get_masks(){
    $json = file_get_contents("https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json");
    $masks = json_decode($json, true);
    return $masks;
}

function clear_phone_number($phone_number){
    $phone_number = trim($phone_number);
    return $phone_number;
}

$masks = get_masks();
$test_phones = [ "+375(29)123-45-67", "+7 (495) 123 45 67", "7 777 123-45-67"];
echo strlen("  +3432 2 ");
echo "<br>";
echo strlen(clear_phone_number("  +3432 2 "));
?>

