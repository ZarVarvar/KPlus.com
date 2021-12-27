<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $socket = filter_var(trim($_POST['socket']), FILTER_SANITIZE_STRING);
            $chipset = filter_var(trim($_POST['chipset']), FILTER_SANITIZE_STRING);
            $ozu = filter_var(trim($_POST['ozu']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
            $form_factor = filter_var(trim($_POST['form_factor']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `mats`(`name`, `socket`, `chipset`, `ozu`, `audio`, `form_factor`, `price`, `img`) VALUES ('$name', '$socket', '$chipset', '$ozu', '$audio', '$form_factor','$price', '/img/mat1.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";