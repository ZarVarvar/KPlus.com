<?php
            include "../PdoConnect.php" ;
            $PDO = PdoConnect::getInstance();

            $id = filter_var(trim($_GET['del_id']), FILTER_SANITIZE_STRING);

            $result = $PDO->PDO->query("DELETE FROM monitors WHERE id = $id ;");

            $products = array();
            while ($productInfo = $result->fetch()) {
                $products[] = $productInfo;
            }

            header('Location: /blocks/admin_panel_monitor.php');