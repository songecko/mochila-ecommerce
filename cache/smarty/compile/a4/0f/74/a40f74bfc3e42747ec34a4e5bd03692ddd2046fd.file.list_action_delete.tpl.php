<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 00:09:23
         compiled from "D:\www\php_workspace\mochila-ecommerce\admin224ulvcsm\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1503154f93683b028f0-35761772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a40f74bfc3e42747ec34a4e5bd03692ddd2046fd' => 
    array (
      0 => 'D:\\www\\php_workspace\\mochila-ecommerce\\admin224ulvcsm\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1425567843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1503154f93683b028f0-35761772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f93683b29c14_86745575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f93683b29c14_86745575')) {function content_54f93683b29c14_86745575($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
