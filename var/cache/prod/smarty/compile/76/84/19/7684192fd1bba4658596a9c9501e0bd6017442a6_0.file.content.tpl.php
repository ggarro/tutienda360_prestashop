<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-16 21:42:11
  from '/var/www/html/tutienda360/administrador/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60516c83cc5bd6_20094800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7684192fd1bba4658596a9c9501e0bd6017442a6' => 
    array (
      0 => '/var/www/html/tutienda360/administrador/themes/new-theme/template/content.tpl',
      1 => 1613657793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60516c83cc5bd6_20094800 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
