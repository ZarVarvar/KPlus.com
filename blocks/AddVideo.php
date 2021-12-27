<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $gddr = filter_var(trim($_POST['gddr']), FILTER_SANITIZE_STRING);
            $razryd = filter_var(trim($_POST['razryd']), FILTER_SANITIZE_STRING);
            $made = filter_var(trim($_POST['made']), FILTER_SANITIZE_STRING);
            $volt = filter_var(trim($_POST['volt']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `videocardss`(`name`, `gddr`, `razryd`, `made`, `volt`, `price`, `img`) VALUES ('$name', '$gddr', '$razryd', '$made', '$volt', '$price', '/img/video.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";