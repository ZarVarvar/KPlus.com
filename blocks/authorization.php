<?php
$login_admin = "admin";
$password_admin = "admin";

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password."eofe3we32f5w");
$password_admin = md5($password_admin."eofe3we32f5w"); 

if($password == $password_admin && $login == $login_admin){
    header('Location: /blocks/admin_panel.php'); 
}else{
    header('Location: /'); 
}