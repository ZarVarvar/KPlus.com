<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widht">
    <link rel="stylesheet" href="./style/tovar.css">
    <link rel="shortcut icon" href="/img/kplus.png" type="image/png">
    <link rel="stylesheet" href="/style/popup.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/ajax.js"></script>
    <title>KPlus</title>
</head>

<body>

    <?php 
    spl_autoload_register(function ($class) {
        include '' . $class . '.php';
    });
    
    $PDO = PdoConnect::getInstance();
  
  $result = $PDO->PDO->query("SELECT * FROM `computers`");
  
  $products = array();
  
  while ($productInfo = $result->fetch()){
      $products[] = $productInfo;
  }

  require_once "blocks/header.php";
     ?>



    <div id="sidebar">
        <div class="toggle-btn" onclick="openMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li id="catalog_name_zagolovok">КАТАЛОГ</li>
            <li class="catalog_name"><a href="">Компьютеры</a></li>
            <li class="catalog_name"><a href="">Ноутбуки</a></li>
            <li class="catalog_name_error"><span class="catalog_name">Комлектующие</span>
                <ul>
                    <li class="catalog_podname"><a href="">МАТЕРИНСКИЕ ПЛАТЫ</a></li>
                    <li class="catalog_podname"><a href="">ПРОЦЕССОРЫ</a></li>
                    <li class="catalog_podname"><a href="">ВИДЕОКАРТЫ</a></li>
                    <li class="catalog_podname"><a href="">ОПЕРАТИВНАЯ ПАМЯТЬ</a></li>
                    <li class="catalog_podname"><a href="">БЛОКИ ПИТАНИЯ</a></li>
                    <li class="catalog_podname"><a href="">НАКОПИТЕЛИ ДАННЫХ</a></li>
                    <li class="catalog_podname"><a href="">СИСТЕМА ОХЛАЖДЕНИЯ</a></li>
                </ul>
            </li>
            <li class="catalog_name_error"><span class="catalog_name">Периферия</span>
        <ul>
            <li class="catalog_podname"><a href="">Мониторы</a></li>
            <li class="catalog_podname"><a href="">Мыши</a></li>
            <li class="catalog_podname"><a href="">Клавиатуры</a></li>
            <li class="catalog_podname"><a href="">Наушники</a></li>
        </ul>
        </li>
        </ul>
    </div>


    <div class="conteiner_tovar">
        <?foreach ($products as $product):?>
        <div class="tovar product" data-id="<?=$product['id_tov']?>">
            <div class="tovar_img_box">
                <span class="tovar_text"><?=$product['name']?></span>
                <img class="tovar_img" src="/img/sis-12 1.svg" alt="">
            </div>
            <span class="tovar_text_har">
                (Процессор: <span><?=$product['proc']?></span>, Видеокарта: <span><?=$product['video']?></span>, ОЗУ:
                <span><?=$product['ozu']?></span>, Накопители данных: <span><?=$product['hddssd']?></span>, OC:
                <span><?=$product['oc']?></span>)
            </span>


            <span class="tovar_text_har" id="tovar_text_price"><?=$product['price']?> ₽</span>

            <button class="tovar_btn popup_link" href="#popup_order">Купить</button>


        </div>
        <?endforeach?>
    </div>


    

    <?php include "blocks/popup.php" ?>
   

    <script src="/js/menu.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/ajax.js"></script>




</body>

</html>