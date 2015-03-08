<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 00:07:41
         compiled from "D:\www\php_workspace\mochila-ecommerce\themes\theme948\modules\blockcmsinfo\blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1738254f9361d1c0e22-07266511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8389c48fd0e46c9f5b3bc9bb4126065815e3d9a7' => 
    array (
      0 => 'D:\\www\\php_workspace\\mochila-ecommerce\\themes\\theme948\\modules\\blockcmsinfo\\blockcmsinfo.tpl',
      1 => 1395065096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1738254f9361d1c0e22-07266511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f9361d1d46d5_14067607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9361d1d46d5_14067607')) {function content_54f9361d1d46d5_14067607($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>

<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block" class="col-xs-8" >
<div class="clearfix row">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><div class="cmsinfo_block_inset"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div></div>
		<?php } ?>
</div>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>
