<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-16 21:43:56
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60516cece5c577_12772015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1615771583,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_60516cece5c577_12772015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://demo.tutienda360.com/index.php?controller=my-account" rel="nofollow">
      Su cuenta
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="https://demo.tutienda360.com/index.php?controller=identity" title="Información personal" rel="nofollow">
            Información personal
          </a>
        </li>
            <li>
          <a href="https://demo.tutienda360.com/index.php?controller=history" title="Pedidos" rel="nofollow">
            Pedidos
          </a>
        </li>
            <li>
          <a href="https://demo.tutienda360.com/index.php?controller=order-slip" title="Facturas por abono" rel="nofollow">
            Facturas por abono
          </a>
        </li>
            <li>
          <a href="https://demo.tutienda360.com/index.php?controller=addresses" title="Direcciones" rel="nofollow">
            Direcciones
          </a>
        </li>
        
	</ul>
</div>
<?php }
}