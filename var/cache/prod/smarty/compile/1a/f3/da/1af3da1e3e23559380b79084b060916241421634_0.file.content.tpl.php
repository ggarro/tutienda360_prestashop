<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-17 10:04:37
  from '/var/www/html/tutienda360/administrador/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60521a85164827_22285885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af3da1e3e23559380b79084b060916241421634' => 
    array (
      0 => '/var/www/html/tutienda360/administrador/themes/default/template/content.tpl',
      1 => 1613657793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60521a85164827_22285885 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
