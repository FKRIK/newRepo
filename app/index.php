<?php

require '../vendor/autoload.php';
$smarty = new Smarty();
$smarty->setTemplateDir(VIEWS);
$smarty->setCompileDir(COMPILE);
$smarty->setConfigDir(CONF);
$smarty->setCacheDir(CACHE);
// $smarty->testInstall();

$smarty->display('login.tpl');