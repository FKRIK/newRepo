<?php
/* Smarty version 4.3.1, created on 2023-04-24 11:34:31
  from '/home/est.fernandolima/dev/learning_smarty/app/src/views/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644693776a1721_38297603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b05b7895d43625af5dbfcdcf1fd7e109cb90262' => 
    array (
      0 => '/home/est.fernandolima/dev/learning_smarty/app/src/views/login.tpl',
      1 => 1682346869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644693776a1721_38297603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1018217056644693776a0375_23726082', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_346863370644693776a0a43_12074548', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291492000644693776a0ee1_47404486', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1298094138644693776a13a5_64331284', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block 'title'} */
class Block_1018217056644693776a0375_23726082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1018217056644693776a0375_23726082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login Page<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_346863370644693776a0a43_12074548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_346863370644693776a0a43_12074548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_291492000644693776a0ee1_47404486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_291492000644693776a0ee1_47404486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="../src/controller/teste.php" method="post">
        <div>
            <label for="txt_user">User</label><br>
            <input type="text" name="user" id="txt_user">
        </div>
        <div>
            <label for="txt_pw">Password</label><br>
            <input type="text" name="pw" id="txt_pw">
        </div>

        <input type="submit" value="Entrar" />
    </form>
<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_1298094138644693776a13a5_64331284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1298094138644693776a13a5_64331284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
