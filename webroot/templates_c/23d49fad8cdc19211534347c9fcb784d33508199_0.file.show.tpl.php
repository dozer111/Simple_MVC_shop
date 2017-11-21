<?php
/* Smarty version 3.1.30, created on 2017-09-25 15:53:12
  from "C:\xampp\htdocs\Views\Category\show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c90a48dc95d1_46161475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23d49fad8cdc19211534347c9fcb784d33508199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Category\\show.tpl',
      1 => 1506089775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59c90a48dc95d1_46161475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135879585459c90a48dc5af0_38850014', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_135879585459c90a48dc5af0_38850014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1> This is CategoryController ====> Show Action<h1>
    <!--  <h2> Categories </h2>
      <pre></pre><br>
      <h2>PARAMS</h2>
  -->

    <h2>This is <?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
 category</h2>
    <table border="5" style="font-size: 50px" width="70%" align="center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Weight</th>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['categoryId']->value]['id'];?>
</td>
            <td>    <?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['categoryId']->value]['name'];?>
</td>
            <td>    <?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['categoryId']->value]['weight'];?>

            </td>
        </tr>
    </table>
<?php
}
}
/* {/block 'body'} */
}
