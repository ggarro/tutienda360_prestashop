<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-16 21:42:19
  from '/var/www/html/tutienda360/themes/etrendlite/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60516c8b39b350_65477313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ed7fdc2ea3664cc2ec47d97cb3830dae2b7df4d' => 
    array (
      0 => '/var/www/html/tutienda360/themes/etrendlite/templates/_partials/footer.tpl',
      1 => 1615771583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60516c8b39b350_65477313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-top">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164875350360516c8b3977c6_43854351', 'hook_footer_before');
?>

        </div>
    </div>
</div>
<div class="footer-container">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158540981660516c8b3983a5_30719264', 'hook_footer');
?>

        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72242552360516c8b398d28_87246935', 'hook_footer_after');
?>

        </div>
    </div>
</div>
<div class="col-md-12 footer-bottom">
    <div class="container">
        <div class="footer-inner">
            <div class="copyright">
                <p class="copyright-block">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21320796160516c8b399613_54627163', 'copyright_link');
?>

                </p>
            </div>
            <div class="cards">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterPaymentBlock"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
</div><?php }
/* {block 'hook_footer_before'} */
class Block_164875350360516c8b3977c6_43854351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_164875350360516c8b3977c6_43854351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_158540981660516c8b3983a5_30719264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_158540981660516c8b3983a5_30719264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_72242552360516c8b398d28_87246935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_72242552360516c8b398d28_87246935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_21320796160516c8b399613_54627163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_21320796160516c8b399613_54627163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <a class="_blank" href="http://www.prestashop.com" target="_blank">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                        </a>
                    <?php
}
}
/* {/block 'copyright_link'} */
}
