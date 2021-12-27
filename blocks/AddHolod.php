<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $material = filter_var(trim($_POST['material']), FILTER_SANITIZE_STRING);
            $speed = filter_var(trim($_POST['speed']), FILTER_SANITIZE_STRING);
            $shum = filter_var(trim($_POST['shum']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `holod`(`name`, `material`, `speed`, `shum`, `price`, `img`) VALUES ('$name', '$material', '$speed', '$shum', '$price', '/img/holod.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";