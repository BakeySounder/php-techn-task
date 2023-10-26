<?php
include('phones.php');
$country = get_country_of_phone(clear_phone_number($_POST['Phone']),$asc_masks);
echo json_encode(array("Country" => $country, "Phone" => $_POST['Phone']));
?>