<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $datch = filter_var(trim($_POST['datch']), FILTER_SANITIZE_STRING);
            $sensor = filter_var(trim($_POST['sensor']), FILTER_SANITIZE_STRING);
            $count = filter_var(trim($_POST['count']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `mouses`(`name`, `datch`, `sensor`, `count`, `price`, `img`) VALUES ('$name', '$datch', '$sensor', '$count', '$price', '/img/mouse.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";