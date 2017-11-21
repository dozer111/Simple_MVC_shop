<?php
/* Smarty version 3.1.30, created on 2017-09-26 18:47:25
  from "C:\xampp\htdocs\Views\admin\Items\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca849d759b91_91763879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ea791b2e74c7004b72720c9cc09ae129a8068f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\admin\\Items\\index.tpl',
      1 => 1506441939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../layout.tpl' => 1,
  ),
),false)) {
function content_59ca849d759b91_91763879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173669251959ca849d758c50_25549207', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_173669251959ca849d758c50_25549207 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1> Admin =====> ItemsController====> IndexAction</h1>


    <div class="container">
        <h2>Update Item</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category name</th>
                <th>Category Number</th>
                <th>Image</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
</td>
                <td><img src="/cdn/getItemImage/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" alt="" width="130px" height="100px"></td>
                <td><a href="/admin/items/remove/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Delete</a></td>
            </tr>
            </tbody>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </tbody>
        </table>
        <div style="width: 100%;text-align: center">
            <ul class="pagination">
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['pagination']->value['pagesTotal']) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['pagination']->value['pagesTotal']; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                    <li <?php if (isset($_GET['page']) && $_GET['page'] == $_smarty_tpl->tpl_vars['i']->value) {?>
                        class="active" <?php }?>><a href="/admin/items/index/?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                <?php }
}
?>


            </ul>
        </div>
    </div>
    <h2> Create Item</h2>


    <form action="/admin/items/create" method="post" style="width: 400px" enctype="multipart/form-data">
        <input type="text" name="name"  class="form-control" placeholder="Item Name">
        <input type="text" name="description" style="width: 100%" placeholder="Item Description"><br>
        <input type="number" name="price"  style="width: 100%" placeholder="Item Price"><br>
        <select class="selectpicker show-tick" style="width: 100%" name="category_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>

            <option  value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select><br>
        <input type="file" name="file" value="Choose file">
        <input type="submit" class="btn btn-success">
    </form>










<?php
}
}
/* {/block 'body'} */
}
