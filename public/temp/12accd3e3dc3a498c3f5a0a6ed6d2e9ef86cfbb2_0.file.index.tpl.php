<?php
/* Smarty version 3.1.33, created on 2018-10-17 18:17:44
  from 'C:\laragon\www\test2\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc77cc8abf320_27979527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12accd3e3dc3a498c3f5a0a6ed6d2e9ef86cfbb2' => 
    array (
      0 => 'C:\\laragon\\www\\test2\\app\\views\\index.tpl',
      1 => 1539800249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc77cc8abf320_27979527 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="../vendor/twitter/bootstrap/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <form id="suscribe">
                    <label><b><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</b></label>
                </form>                
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="../vendor/twitter/bootstrap/dist/js/bootstrap.min.js"/>
    </body>
</html>
<?php }
}
