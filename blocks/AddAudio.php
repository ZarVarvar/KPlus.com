<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $format = filter_var(trim($_POST['format']), FILTER_SANITIZE_STRING);
            $types = filter_var(trim($_POST['types']), FILTER_SANITIZE_STRING);
            $mg = filter_var(trim($_POST['mg']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `audios`(`name`, `format`, `types`, `mg`, `price`, `img`) VALUES ('$name', '$format', '$types', '$mg', '$price', '/img/audio.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";