<?php
/* Smarty version 3.1.30, created on 2017-09-21 15:23:03
  from "C:\xampp\htdocs\Views\Admin\Categories\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c3bd37c76f10_84560424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cc849d1b368dbcce3f65f430794946e97cd80f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\Categories\\index.tpl',
      1 => 1506000182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../layout.tpl' => 1,
  ),
),false)) {
function content_59c3bd37c76f10_84560424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108551599359c3bd37c76301_54448869', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_108551599359c3bd37c76301_54448869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="container">
        <h2>Update Cat</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Weight</th>
                <th>Update</th>
                <th>Remove</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <tr>
                <form action="/admin/categories/update" method="post">
                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
 </td>
                    <td><input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"></td>
                    <td><input type="number" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['weight'];?>
"></td>
                    <td><input type="submit" class="btn btn-success"></td>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                </form>
                <td><button class="btn-danger" onclick="remove()" >Remove</button></td>
            </tr>
            </tbody>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </tbody>
        </table>
    </div>
    <h2> Create Cat</h2>
                <form action="/admin/categories/create" method="post" style="width: 400px">
                    <input type="text" name="name" value="name" class="form-control">
                    <input type="number" name="weight" value="1" style="width: 100%">
                    <input type="submit" class="btn btn-success">
                </form>














<?php
}
}
/* {/block 'body'} */
}
