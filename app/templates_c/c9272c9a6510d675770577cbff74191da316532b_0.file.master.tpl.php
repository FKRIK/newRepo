<?php
/* Smarty version 4.3.1, created on 2023-04-24 11:08:46
  from '/home/est.fernandolima/dev/learning_smarty/app/src/views/master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64468d6e1ddbb9_87921859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9272c9a6510d675770577cbff74191da316532b' => 
    array (
      0 => '/home/est.fernandolima/dev/learning_smarty/app/src/views/master.tpl',
      1 => 1682345325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64468d6e1ddbb9_87921859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style/style.css">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57178762164468d6e1dc8e6_34079866', 'title');
?>
</title>
</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156518101764468d6e1dd014_77067929', 'header');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132670725764468d6e1dd452_24800875', 'main');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95413808564468d6e1dd833_80167006', 'footer');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_57178762164468d6e1dc8e6_34079866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_57178762164468d6e1dc8e6_34079866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_156518101764468d6e1dd014_77067929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_156518101764468d6e1dd014_77067929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Header<?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_132670725764468d6e1dd452_24800875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_132670725764468d6e1dd452_24800875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Body<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_95413808564468d6e1dd833_80167006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_95413808564468d6e1dd833_80167006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Footer<?php
}
}
/* {/block 'footer'} */
}
