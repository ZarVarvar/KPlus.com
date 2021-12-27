<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $count_yader = filter_var(trim($_POST['count_yader']), FILTER_SANITIZE_STRING);
            $count_potok = filter_var(trim($_POST['count_potok']), FILTER_SANITIZE_STRING);
            $made = filter_var(trim($_POST['made']), FILTER_SANITIZE_STRING);
            $cache = filter_var(trim($_POST['cache']), FILTER_SANITIZE_STRING);
            $socket = filter_var(trim($_POST['socket']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `processors`(`name`, `count_yader`, `count_potok`, `made`, `cache`, `socket`, `price`, `img`) VALUES ('$name', '$count_yader', '$count_potok', '$made', '$cache', '$socket','$price', '/img/proc.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";