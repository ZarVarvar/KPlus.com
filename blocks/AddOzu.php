<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $ram = filter_var(trim($_POST['ram']), FILTER_SANITIZE_STRING);
            $tact = filter_var(trim($_POST['tact']), FILTER_SANITIZE_STRING);
            $made = filter_var(trim($_POST['made']), FILTER_SANITIZE_STRING);
            $time = filter_var(trim($_POST['time']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `ozu`(`name`, `ram`, `tact`, `made`, `time`, `price`, `img`) VALUES ('$name', '$ram', '$tact', '$made', '$time', '$price', '/img/ozu.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";