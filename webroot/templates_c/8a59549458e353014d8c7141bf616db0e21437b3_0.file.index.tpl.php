<?php
/* Smarty version 3.1.30, created on 2017-09-21 17:48:23
  from "C:\xampp\htdocs\Views\Admin\Main\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c3df47bd7861_80149673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a59549458e353014d8c7141bf616db0e21437b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\Main\\index.tpl',
      1 => 1506008899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../layout.tpl' => 1,
  ),
),false)) {
function content_59c3df47bd7861_80149673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200588907859c3df47bd6d62_64189664', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_200588907859c3df47bd6d62_64189664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul style="font-size: 30px">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
        <li><a href="/category/index/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>



        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </ul>

    <?php
}
}
/* {/block 'body'} */
}
