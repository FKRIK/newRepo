<?php
/* Smarty version 4.3.1, created on 2023-04-24 10:43:02
  from '/home/est.fernandolima/dev/learning_smarty/app/src/views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64468766623c12_87243665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4a970c3c62e5d86ec293fb8a81404e259420147' => 
    array (
      0 => '/home/est.fernandolima/dev/learning_smarty/app/src/views/index.tpl',
      1 => 1682343782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64468766623c12_87243665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11747963146446876661e5d4_05071005', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_395641540644687666201a3_53625815', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27006280964468766621954_19689059', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139070520564468766622c51_90812469', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block 'title'} */
class Block_11747963146446876661e5d4_05071005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11747963146446876661e5d4_05071005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home Page<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_395641540644687666201a3_53625815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_395641540644687666201a3_53625815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Welcome to Home Page! -this is the header</h2>
<?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_27006280964468766621954_19689059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_27006280964468766621954_19689059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>Welcome to Home Page! -this is the body</p>
<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_139070520564468766622c51_90812469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_139070520564468766622c51_90812469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h6>Welcome to Home Page! -this is the footer</h6>
<?php
}
}
/* {/block 'footer'} */
}
