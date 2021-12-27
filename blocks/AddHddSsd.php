<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $razmer = filter_var(trim($_POST['razmer']), FILTER_SANITIZE_STRING);
            $readd = filter_var(trim($_POST['readd']), FILTER_SANITIZE_STRING);
            $writee = filter_var(trim($_POST['writee']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `hddssd`(`name`, `razmer`, `readd`, `writee`, `price`, `img`) VALUES ('$name', '$razmer', '$readd', '$writee', '$price', '/img/hddssd.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";