<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 00:09:23
         compiled from "D:\www\php_workspace\mochila-ecommerce\admin224ulvcsm\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1989454f93683a8a5d1-03408709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708c584c08ae176b67619249dbf98391756aeeee' => 
    array (
      0 => 'D:\\www\\php_workspace\\mochila-ecommerce\\admin224ulvcsm\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1425567843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1989454f93683a8a5d1-03408709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f93683ae5530_16251294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f93683ae5530_16251294')) {function content_54f93683ae5530_16251294($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
