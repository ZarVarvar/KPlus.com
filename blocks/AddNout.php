<?php
            include "D:\programms\openserver\domains\KPlus.com\PdoConnect.php";
            $PDO = PdoConnect::getInstance();

            $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
            $proc = filter_var(trim($_POST['proc']), FILTER_SANITIZE_STRING);
            $video = filter_var(trim($_POST['video']), FILTER_SANITIZE_STRING);
            $ozu = filter_var(trim($_POST['ozu']), FILTER_SANITIZE_STRING);
            $oc = filter_var(trim($_POST['oc']), FILTER_SANITIZE_STRING);
            $hddssd = filter_var(trim($_POST['hddsdd']), FILTER_SANITIZE_STRING);
            $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
            $screen = filter_var(trim($_POST['screen']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("INSERT INTO `videocards`(`name`, `proc`, `video`, `ozu`, `oc`, `hddssd`, `screen`, `price`, `img`) VALUES ('$name', '$proc', '$video', '$ozu', '$oc', '$hddssd', '$screen','$price', '/img/nout.svg')");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            echo "Товар успешно добавлен";