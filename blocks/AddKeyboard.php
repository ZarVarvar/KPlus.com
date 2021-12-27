<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $types = filter_var(trim($_POST['types']), FILTER_SANITIZE_STRING);
            $RGB = filter_var(trim($_POST['RGB']), FILTER_SANITIZE_STRING);
            $interface = filter_var(trim($_POST['interface']), FILTER_SANITIZE_STRING);
            $time = filter_var(trim($_POST['time']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `keyboards`(`name`, `types`, `RGB`, `interface`, `price`, `img`) VALUES ('$name', '$types', '$RGB', '$interface', '$price', '/img/keyboard.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";