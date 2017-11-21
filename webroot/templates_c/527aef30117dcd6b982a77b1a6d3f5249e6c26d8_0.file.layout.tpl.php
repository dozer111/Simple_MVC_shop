<?php
/* Smarty version 3.1.30, created on 2017-09-25 16:50:36
  from "C:\xampp\htdocs\Views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c917bcab97f5_73168707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '527aef30117dcd6b982a77b1a6d3f5249e6c26d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\layout.tpl',
      1 => 1506351035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c917bcab97f5_73168707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172474225959c917bcaa92c7_61236248', 'title');
?>
</title>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</head>
<body>
<!-- Bootstrap NavBar-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>

            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if (isset($_smarty_tpl->tpl_vars['admin']->value) && $_smarty_tpl->tpl_vars['admin']->value == 1) {?>
                    <li class="active"><a href="/admin/categories"> Categories</a></li>
                    <li><a href="/admin/items"> Items</a></li>
                <?php }?>

            </ul>
                <ul class="nav navbar-nav">
                <?php if (isset($_SESSION['user'])) {?>
                    <?php if ($_SESSION['user']->isAdmin()) {?>
                    <li><a href="admin/">ADMIN PAGE</a></li>
                        <?php }?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']->getLogin();?>
 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/profile/index">Profile</a></li>
                            <li><a href="/auth/logout">LOGOUT</a></li>

                        </ul>

                    </li>



                    <?php } else { ?>
                    <li><a href="/auth/login">Log in 12 </a></li>
                    <li><a href="/auth/register">Register 12 </a></li>
                <?php }?>











            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77145178459c917bcab8f52_72310737', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_172474225959c917bcaa92c7_61236248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My shop<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_77145178459c917bcab8f52_72310737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

</div>







    <?php
}
}
/* {/block 'body'} */
}
