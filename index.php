<?php
include("phones.php");

$test_phones = [ "+375(29)123-45-67", "+7 (495) 123 45 67", "7 777 123-45-67"];

foreach ($test_phones as $key => $value) {
    echo $value . " -> ".get_country_of_phone(clear_phone_number($value),$asc_masks). "<br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap');
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
    body {
        margin: 0;
        padding: 0;
    }
    @media (max-width:990px){
        .card {
            background: rgba(0,255,255,0);
            height: 76.5vh;
            border: 0px #fff solid;
            border-radius: 16px;
            padding-top: 40px;
            padding-left: 39px;
        }
        #banner {

            max-width: 99%;
            height: 76.5vh;
            margin: 0;
            padding: 0;
        }
        .title {
            font-family: "Nunito";
            font-size: 5vh;
            font-weight: 600;
            margin-bottom: 22px;
        }
        li {
            font-family: "Nunito";
            font-size: 3vh;
            font-weight: normal;
        }
        li::marker {
            content: "✓  ";
        }
        ul {
            padding-inline-start: 19.5px;
        }
        
        #banner-btn {
            margin-top: 20px;
            padding-top: 10px;
            padding-left: 40px;
            padding-bottom: 10px;
            padding-right: 40px;
            width: 124px;
            height:41px;
            background: #78599C;
            border: 0px solid black;
            font-family: "Nunito";
            font-size: 14px;
            font-weight: normal;
            border-radius: 4px;
        }
        .img {
            padding: 0;
            margin: 0;
            -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%);
            width: 98.5%;
            height: 76.5vh;
        }
    }
    @media (min-width:991px) {
        .card {
        background: rgba(255,255,255,0.24);
        width: 760px;
        height: 489px;
        border: 0px #fff solid;
        border-radius: 16px;
        margin-left: 325px;
        margin-top: 56px;
        filter:drop-shadow(0, 0, 20px, #CDCDCD);
        backdrop-filter: blur(40px);
        
        padding-top: 40px;
        padding-left: 39px;
    }
    #banner {
        background-image: url("img/background.jpg");
        background-size: cover;
        max-width: 99%;
        height:600px;
        margin: 0;
        padding: 0;
    }
    .title {
        font-family: "Nunito";
        font-size: 50px;
        font-weight: 600;
        margin-bottom: 22px;
    }
    li {
        font-family: "Nunito";
        font-size: 18px;
        font-weight: normal;
    }
    li::marker {
        content: "✓  ";
    }
    ul {
        padding-inline-start: 19.5px;
    }
    
    #banner-btn {
        margin-top: 40px;
        padding-top: 12px;
        padding-left: 40px;
        padding-bottom: 12px;
        padding-right: 40px;
        width: 130px;
        height:48px;
        background: #78599C;
        border: 0px solid black;
        font-family: "Nunito";
        font-size: 16px;
        font-weight: normal;
        border-radius: 4px;
    }
    .img {
        padding: 0;
        margin: 0;
        transform:translateX(118.5%);

    }
    }
    
</style>

<body>
    <form action="" method="post" id ="form1">
        <input class="form-control w-25" placeholder="Введите номер телефона, чтобы узнать страну" type="text" name="Phone" id="">
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    <div class = "container" id = "banner">
        <div class = "row">
            <div class = "col-lg-8">
                <img src="img/pict.jpg" alt="" class = "z-0 position-absolute img">
                <div class = "card z-1 position-absolute">
                    <h1 class = "title">Fulfillment dla Twojego<br>e-Commerce</h1>
                    <ul class = "list">
                        <li>Przyjęcie i magazynowanie produktów</li>
                        <li>Kompletacja i pakowanie</li>
                        <li>Obsługa zwrotów i reklamacji</li>
                        <li>Współpraca ze wszystkimi dostępnymi przewoźnikami</li>
                        <li>Integracja z Twoją platformą e-Commerce</li>
                        
                    </ul>
                    <button class = "btn btn-primary" id = "banner-btn">Więcej</button>
                </div>
            </div>
        </div>
    </div>
    <div id="cookiePopup" class="popup">
        <h3>Уведомление о куках</h3>
        <p>Мы используем файлы cookie на этом сайте.<br>Нажмите "Принять", чтобы принять использование кукисов.</p>
        <button id="acceptButton" class="btn btn-primary">Принять</button>
        <button id="closeButton" class="btn btn-secondary">Закрыть</button>
    </div>
</body>
<script src = "index.js"></script>
</html>


