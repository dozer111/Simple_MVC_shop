<?php
/* Smarty version 3.1.30, created on 2017-09-19 14:00:34
  from "C:\xampp\htdocs\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c106e20ac738_00735433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1870ab14fb2bc4bfc1fc42f6af4f07d010987ac3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\main.tpl',
      1 => 1505822348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_59c106e20ac738_00735433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161437110459c106e20a9a18_47066327', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211000187259c106e20abbe8_90598353', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_161437110459c106e20a9a18_47066327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
MainControllerTitle <?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_211000187259c106e20abbe8_90598353 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
HTML resource of MAIN CONTROLLER<?php
}
}
/* {/block 'body'} */
}
