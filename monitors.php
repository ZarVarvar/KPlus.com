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
  
  $result = $PDO->PDO->query("SELECT * FROM `monitors`");
  
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
            <li class="catalog_name"><a href="tovar.php">Компьютеры</a></li>
            <li class="catalog_name"><a href="nout.php">Ноутбуки</a></li>
            <li class="catalog_name_error"><span class="catalog_name">Комлектующие</span>
                <ul>
                    <li class="catalog_podname"><a href="mat.php">МАТЕРИНСКИЕ ПЛАТЫ</a></li>
                    <li class="catalog_podname"><a href="proc.php">ПРОЦЕССОРЫ</a></li>
                    <li class="catalog_podname"><a href="videocards.php">ВИДЕОКАРТЫ</a></li>
                    <li class="catalog_podname"><a href="ozu.php">ОПЕРАТИВНАЯ ПАМЯТЬ</a></li>
                    <li class="catalog_podname"><a href="blocks_volt.php">БЛОКИ ПИТАНИЯ</a></li>
                    <li class="catalog_podname"><a href="hddssd.php">НАКОПИТЕЛИ ДАННЫХ</a></li>
                    <li class="catalog_podname"><a href="holod.php">СИСТЕМА ОХЛАЖДЕНИЯ</a></li>
                </ul>
            </li>
            <li class="catalog_name_error"><span class="catalog_name">Периферия</span>
        <ul>
            <li class="catalog_podname"><a href="monitors.php">Мониторы</a></li>
            <li class="catalog_podname"><a href="mouse.php">Мыши</a></li>
            <li class="catalog_podname"><a href="keyboard.php">Клавиатуры</a></li>
            <li class="catalog_podname"><a href="audio.php">Наушники</a></li>
        </ul>
        </li>
        </ul>
    </div>


    <div class="conteiner_tovar">
        <?foreach ($products as $product):?>
        <div class="tovar product" data-id="<?=$product['id']?>">
            <div class="tovar_img_box">
                <span class="tovar_text"><?=$product['name']?></span>
                <img class="tovar_img" src="<?=$product['img']?>" alt="">
            </div>
            <span class="tovar_text_har">
                (Экран: <span><?=$product['screen']?></span>)
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