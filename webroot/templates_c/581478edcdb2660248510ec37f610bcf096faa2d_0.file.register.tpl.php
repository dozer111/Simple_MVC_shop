<?php
/* Smarty version 3.1.30, created on 2017-09-20 19:21:41
  from "C:\xampp\htdocs\Views\Auth\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c2a3a57443e0_35651548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581478edcdb2660248510ec37f610bcf096faa2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Auth\\register.tpl',
      1 => 1505928034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59c2a3a57443e0_35651548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30436079559c2a3a5742389_59237774', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21077744059c2a3a5743ba8_53155686', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_30436079559c2a3a5742389_59237774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
REGISTER <?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_21077744059c2a3a5743ba8_53155686 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-inline" action="/auth/register/" method="POST">
        <div class="form-group">
            <label class="sr-only" for="login">Email address</label>
            <input type="text" class="form-control" id="login" placeholder="Email" name="login">
        </div>
        <div class="form-group">
            <label class="sr-only" for="pass">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Do it
            </label>
        </div>
        <button type="submit" class="btn btn-default">Sign in</button>
    </form>

<?php
}
}
/* {/block 'body'} */
}
