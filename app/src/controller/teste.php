<?php

require '../vendor/autoload.php';

if(empty($_POST['user']) && empty($_POST['pw'])){
    echo "Olá!";
}

$user = $_POST['user'];
echo $user;
exit;

$smarty = new Smarty();
$smarty->assign('user', $user);
$smarty->display('home.tpl');
