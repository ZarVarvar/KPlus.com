<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $volt = filter_var(trim($_POST['volt']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `blocks`(`name`, `volt`, `price`, `img`) VALUES ('$name', '$volt', '$price', '/img/blocks.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";