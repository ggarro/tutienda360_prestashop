<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-16 21:42:18
  from '/var/www/html/tutienda360/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_displayTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60516c8ae9f596_85491974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36b9d36762f1504e875620eaef1c3bbba18c90ae' => 
    array (
      0 => '/var/www/html/tutienda360/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_displayTop.tpl',
      1 => 1615771583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60516c8ae9f596_85491974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '148713243260516c8ae9c316_74970423';
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
