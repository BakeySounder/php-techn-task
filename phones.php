<?php
function get_masks(){
    $json = file_get_contents("https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json");
    $masks = json_decode($json, true);
    return $masks;
}


$masks = get_masks();
$asc_masks = array();
foreach($masks as $key => $item) {
    $new_mask = "/^".ltrim(str_replace("#", "\d",clear_phone_number($item["mask"])),'+') . "/";
    $asc_masks[$new_mask] = $item;
}


function clear_phone_number($phone_number){
    $phone_number = preg_replace("/[+ ()-]*/", "", $phone_number);
    return $phone_number;
}

function get_country_of_phone($phone_number, $asc_masks){
    foreach($asc_masks as $key => $item) {

        if(preg_match($key,$phone_number)) {
            return $item["name_ru"];
        }
    }
}
?>