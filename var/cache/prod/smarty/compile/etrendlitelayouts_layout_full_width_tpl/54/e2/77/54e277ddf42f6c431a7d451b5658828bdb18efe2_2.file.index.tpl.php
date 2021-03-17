<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-16 21:42:18
  from '/var/www/html/tutienda360/themes/etrendlite/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60516c8ae400d2_06917509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54e277ddf42f6c431a7d451b5658828bdb18efe2' => 
    array (
      0 => '/var/www/html/tutienda360/themes/etrendlite/templates/index.tpl',
      1 => 1615771583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60516c8ae400d2_06917509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181016781960516c8ae3e455_96049489', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_39909283960516c8ae3e8f3_41394319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_46405258660516c8ae3f299_04682491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_118276832560516c8ae3ef72_52528509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46405258660516c8ae3f299_04682491', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_181016781960516c8ae3e455_96049489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_181016781960516c8ae3e455_96049489',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_39909283960516c8ae3e8f3_41394319',
  ),
  'page_content' => 
  array (
    0 => 'Block_118276832560516c8ae3ef72_52528509',
  ),
  'hook_home' => 
  array (
    0 => 'Block_46405258660516c8ae3f299_04682491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39909283960516c8ae3e8f3_41394319', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118276832560516c8ae3ef72_52528509', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
