<?php
/* Smarty version 3.1.30, created on 2017-09-26 18:27:38
  from "C:\xampp\htdocs\Views\main\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca7ffa38d6d4_57479663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bb727f95efcd20073c71ebf1356e3d90dda7b7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\main\\main.tpl',
      1 => 1506442339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59ca7ffa38d6d4_57479663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35550154259ca7ffa376653_76932990', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28700786359ca7ffa38cf72_60446517', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_35550154259ca7ffa376653_76932990 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
MainControllerTitle <?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_28700786359ca7ffa38cf72_60446517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
HTML resource of MAIN CONTROLLER

    <div class="row">
        <div class="col-sm-3 col-md-3">
            <ul class="list-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <li class="list-group-item"
                        <?php if (isset($_smarty_tpl->tpl_vars['categoryId']->value) && $_smarty_tpl->tpl_vars['category']->value['id'] === $_smarty_tpl->tpl_vars['categoryId']->value) {?>style="background-color: silver" <?php }?>>
                    <a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>

        <div class="row col-sm-9 col-md-9">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="col-sm-3 col-md-3">
                <div class="thumbnail">
                    <img alt="100%x200"
                         data-src="holder.js/100%x200"
                         src="/cdn/getItemImage/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                         data-holder-rendered="true" style="height: 200px; width: 250px; display: block;">
                    <div class="caption">
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
===><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p>
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</h3>
                        <p ></p>
                        <p><a href="/main/show/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary" role="button">About</a>
                    </div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
        </div>


<?php
}
}
/* {/block 'body'} */
}
