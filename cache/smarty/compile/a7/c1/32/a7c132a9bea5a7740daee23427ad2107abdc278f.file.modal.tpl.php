<?php /* Smarty version Smarty-3.1.19, created on 2015-03-07 19:24:32
         compiled from "D:\www\php_workspace\mochila-ecommerce\admin6312hqlqr\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2850054fb96c070ae29-32480230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c132a9bea5a7740daee23427ad2107abdc278f' => 
    array (
      0 => 'D:\\www\\php_workspace\\mochila-ecommerce\\admin6312hqlqr\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1425567843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2850054fb96c070ae29-32480230',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54fb96c0714441_40177440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fb96c0714441_40177440')) {function content_54fb96c0714441_40177440($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
