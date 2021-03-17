<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-16 21:42:19
  from '/var/www/html/tutienda360/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_footerAfter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60516c8b421e14_25350848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bb4dd8147e928b455c451694f0ab55d555dfe24' => 
    array (
      0 => '/var/www/html/tutienda360/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_footerAfter.tpl',
      1 => 1615771583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60516c8b421e14_25350848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '159563775560516c8b41f634_11255368';
?>

<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
	<?php if (isset($_smarty_tpl->tpl_vars['block']->value['content'])) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
