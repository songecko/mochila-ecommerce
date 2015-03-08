<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 00:07:41
         compiled from "D:\www\php_workspace\mochila-ecommerce\themes\theme948\modules\blockbestsellers\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:447754f9361d53dd31-77124752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fff31772d1af10ba5316a2f24ff684839df0ad79' => 
    array (
      0 => 'D:\\www\\php_workspace\\mochila-ecommerce\\themes\\theme948\\modules\\blockbestsellers\\tab.tpl',
      1 => 1394409022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '447754f9361d53dd31-77124752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f9361d54f2c5_87406746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9361d54f2c5_87406746')) {function content_54f9361d54f2c5_87406746($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\www\\php_workspace\\mochila-ecommerce\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>
