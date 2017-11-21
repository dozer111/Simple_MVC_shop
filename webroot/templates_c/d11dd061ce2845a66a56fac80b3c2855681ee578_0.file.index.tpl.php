<?php
/* Smarty version 3.1.30, created on 2017-09-26 17:53:41
  from "C:\xampp\htdocs\Views\Category\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca78056a9f98_37855416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd11dd061ce2845a66a56fac80b3c2855681ee578' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Category\\index.tpl',
      1 => 1506441221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59ca78056a9f98_37855416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191629373559ca78056a9806_73471939', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_191629373559ca78056a9806_73471939 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1> This is CategoryController ====> indexAction<h1>
  <!--  <h2> Categories </h2>
    <pre></pre><br>
    <h2>PARAMS</h2>
-->
    <pre> <?php echo print_r($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['params']->value[0]]);?>
</pre>
    <h2>This is <?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['params']->value[0]]['name'];?>
 category</h2>
    <table border="5" style="font-size: 50px" width="70%" align="center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Weight</th>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['params']->value[0]]['id'];?>
</td>
            <td>    <?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['params']->value[0]]['name'];?>
</td>
            <td>    <?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['params']->value[0]]['weight'];?>

            </td>
        </tr>
    </table>
<?php
}
}
/* {/block 'body'} */
}
