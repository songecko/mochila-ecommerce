<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 00:53:40
         compiled from "D:\www\php_workspace\mochila-ecommerce\modules\homeslider\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:846254f9361c46e8a7-50771426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4460af2f201f937f9b923620874d9f68350e9721' => 
    array (
      0 => 'D:\\www\\php_workspace\\mochila-ecommerce\\modules\\homeslider\\views\\templates\\hook\\header.tpl',
      1 => 1425620716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '846254f9361c46e8a7-50771426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f9361c5aa637_53141956',
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9361c5aa637_53141956')) {function content_54f9361c5aa637_53141956($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
<script type="text/javascript">
     var homeslider_loop=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['loop']);?>
;
     var homeslider_width=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['width']);?>
;
     var homeslider_speed=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['speed']);?>
;
     var homeslider_pause=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['pause']);?>
;
</script>
<?php }?><?php }} ?>
