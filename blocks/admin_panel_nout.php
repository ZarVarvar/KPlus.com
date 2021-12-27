<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widht">
    <link rel="stylesheet" href="../style/tovar.css">
    <link rel="shortcut icon" href="/img/kplus.png" type="image/png">
    <link rel="stylesheet" href="/style/popup.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/ajax.js"></script>
    <title>KPlus</title>
</head>

<body>

    <?php 
   
   include "../PdoConnect.php" ;
    $PDO = PdoConnect::getInstance();
  
  $result = $PDO->PDO->query("SELECT * FROM `videocards`");
  
  $products = array();
  
  while ($productInfo = $result->fetch()){
      $products[] = $productInfo;
  }

     ?>

<header class="header">
        <div class="conteiner_header">
        <img class="logo" src="/img/kplus.png" onclick="document.location='index.php'" alt="error">
        <div class="search">
            <input id="input_text" type="text" placeholder="Поиск">
            <button class="search_btn" type="submit"><img src="/img/lupa.svg" alt=""></button>
        </div>
        <div class="icon">
            <button class="icon_btn popup_link" href="#popup_map" type="submit"><img src="/img/adres.svg" alt=""></button>
            <button class="icon_btn popup_link" href="#popup" type="submit"><img src="/img/dostavka.svg" alt=""></button>
            <button class="icon_btn" onclick="document.location='../tovar.php'" type="submit"><img src="/img/exit.svg" alt=""></button>
        </div>
        </div>
    </header>


    <div id="sidebar">
        <div class="toggle-btn" onclick="openMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li id="catalog_name_zagolovok">КАТАЛОГ</li>
            <li class="catalog_name"><a href="admin_panel.php">Компьютеры</a></li>
            <li class="catalog_name"><a href="admin_panel_nout.php">Ноутбуки</a></li>
            <li class="catalog_name_error"><span class="catalog_name">Комлектующие</span>
                <ul>
                    <li class="catalog_podname"><a href="admin_panel_mat.php">МАТЕРИНСКИЕ ПЛАТЫ</a></li>
                    <li class="catalog_podname"><a href="admin_panel_proc.php">ПРОЦЕССОРЫ</a></li>
                    <li class="catalog_podname"><a href="admin_panel_video.php">ВИДЕОКАРТЫ</a></li>
                    <li class="catalog_podname"><a href="admin_panel_ozu.php">ОПЕРАТИВНАЯ ПАМЯТЬ</a></li>
                    <li class="catalog_podname"><a href="admin_panel_blockvolt.php">БЛОКИ ПИТАНИЯ</a></li>
                    <li class="catalog_podname"><a href="admin_panel_hddssd.php">НАКОПИТЕЛИ ДАННЫХ</a></li>
                    <li class="catalog_podname"><a href="admin_panel_holod.php">СИСТЕМА ОХЛАЖДЕНИЯ</a></li>
                </ul>
            </li>
            <li class="catalog_name_error"><span class="catalog_name">Периферия</span>
        <ul>
            <li class="catalog_podname"><a href="admin_panel_monitor.php">Мониторы</a></li>
            <li class="catalog_podname"><a href="admin_panel_mouse.php">Мыши</a></li>
            <li class="catalog_podname"><a href="admin_panel_keyboard.php">Клавиатуры</a></li>
            <li class="catalog_podname"><a href="admin_panel_audio.php">Наушники</a></li>
        </ul>
        </li>
        </ul>
    </div>

<button class="add popup_link" href="#popupaddnout">Добавить</button>

<div class="conteiner_tovar">
        <?foreach ($products as $product):?>
        <div class="tovar product" data-id="<?=$product['id']?>">
            <div class="tovar_img_box">
                <span class="tovar_text"><?=$product['name']?></span>
                <img class="tovar_img" src="<?=$product['img']?>" alt="">
            </div>
            <span class="tovar_text_har">
                (Процессор: <span><?=$product['proc']?></span>, Видеокарта: <span><?=$product['video']?></span>, ОЗУ:
                <span><?=$product['ozu']?></span>, Накопители данных: <span><?=$product['hddssd']?></span>, OC:
                <span><?=$product['oc']?></span>, Экран: <span><?=$product['screen']?></span>)
            </span>


            <span class="tovar_text_har" id="tovar_text_price"><?=$product['price']?> ₽</span>

            <button class="tovar_btn popup_link" href="#popup_order">Купить</button>
            <a class="upravlenie" href="del_nout.php?del_id= <?= $product['id'] ?>">Удалить</a>

        </div>
        <?endforeach?>
    </div>


    

    <?php include "popup.php" ?>
   

    <script src="/js/menu.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/ajax.js"></script>




</body>

</html>