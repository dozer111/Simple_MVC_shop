<?php
/* Smarty version 3.1.30, created on 2017-09-19 14:15:37
  from "C:\xampp\htdocs\Views\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c10a6954fbc1_28321628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9c7184efc709fd92178e382ea9d8f53ae28579b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\main.tpl',
      1 => 1505822348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_59c10a6954fbc1_28321628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25822739159c10a6954cfa4_60393144', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77340830959c10a6954f058_75153624', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_25822739159c10a6954cfa4_60393144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
MainControllerTitle <?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_77340830959c10a6954f058_75153624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
HTML resource of MAIN CONTROLLER<?php
}
}
/* {/block 'body'} */
}
