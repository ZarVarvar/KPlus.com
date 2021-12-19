<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widht">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="shortcut icon" href="/img/kplus.png" type="image/png">
    <link rel="stylesheet" href="/style/popup.css">
    <title>Каталог</title>
</head>

<body>

    <?php require_once "blocks/header.php"; ?>
    
<div class="container">
    <h1 class="catalog_text">КАТАЛОГ</h1>

    <div class="div_catalog_btn1">
             <button class="catalog_btn" onclick="document.location='tovar.php'" type="submit">
                 <span class="catalog_btn_text">Комьютеры</span>
                 <img class="catalog_btn_img" src="/img/sis-12 1.svg" alt="">
                </button>
             <button class="catalog_btn" type="submit">
             <span class="catalog_btn_text">Ноутбуки</span>
                 <img class="catalog_btn_img" src="/img/nout.svg" alt="">
                </button>
             <button class="catalog_btn" id="btn_last" type="submit">
             <span class="catalog_btn_text">Комплектующие</span>
                 <img class="catalog_btn_img" src="/img/mat.svg" alt="">
                </button>
    </div>

    <div class="div_catalog_btn2">
             <button id="btn_last" class="catalog_btn" type="submit">
             <span class="catalog_btn_text">Периферия</span>
                 <img class="catalog_btn_img" src="/img/mouse.svg" alt="">
                </button>
    </div>

   <h1 class="fraza_podval">Доверяйте людям, а не пришельцам :)</h1>
   </div>

   <?php require_once "blocks/popup.php" ?>
   <script src="/js/popup.js"></script>

</body>

</html>