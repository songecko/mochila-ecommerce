<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 00:07:41
         compiled from "D:\www\php_workspace\mochila-ecommerce\themes\theme948\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213654f9361deb3e99-49740737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e742cc4e7f457be426c1536d627c2f6a67132c9' => 
    array (
      0 => 'D:\\www\\php_workspace\\mochila-ecommerce\\themes\\theme948\\header.tpl',
      1 => 1396342260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213654f9361deb3e99-49740737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'HOOK_HEADER' => 0,
    'page_name' => 0,
    'body_classes' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_TOP' => 0,
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f9361e0536f1_42497469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9361e0536f1_42497469')) {function content_54f9361e0536f1_42497469($_smarty_tpl) {?><?php if (!is_callable('smarty_function_implode')) include 'D:\\www\\php_workspace\\mochila-ecommerce\\tools\\smarty\\plugins\\function.implode.php';
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1, initial-scale=1.0" /> 
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php } ?>
<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

		<link rel="stylesheet" href="http<?php if (Tools::usingSecureMode()) {?>s<?php }?>://fonts.googleapis.com/css?family=Open+Sans:300,600" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,500,600,700,300,800,900' rel='stylesheet' type='text/css' />
		<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
    	<!--[if lt IE 9]><div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->
	<body<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['body_classes']->value)&&count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo smarty_function_implode(array('value'=>$_smarty_tpl->tpl_vars['body_classes']->value,'separator'=>' '),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php }?><?php if ($_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
			<div id="restricted-country">
				<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
			</div>
		<?php }?>
		<div id="page">
        <div id="toTop" style="display: block;"></div>
        <div class="main-wrap-center">
        <div class="main-wrap"> 
			<div class="header-container">
				<header id="header">
					<div class="banner">
						<div class="container">
							<div class="row">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBanner"),$_smarty_tpl);?>

							</div>
						</div>
					</div>
					<div class="nav">
						<div class="container">
							<div class="row">
								<nav><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>
</nav>
							</div>
						</div>
					</div>
					<div>
						<div class="container">
							<div class="row">
								<div id="header_logo">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>
									</a>
								</div>
								<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
<?php }?>
							</div>
						</div>
					</div>
				</header>
			</div>
			<div class="columns-container">
				<div id="columns" class="container">
					<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php }?>
					<div class="row">
						<div id="top_column" class="center_column col-xs-12 col-sm-12"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayTopColumn"),$_smarty_tpl);?>
</div>
					</div>
					<div class="row">
						<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
						<div id="left_column" class="column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
						<?php }?>
						<div id="center_column" class="center_column col-xs-12 col-sm-<?php echo 12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value;?>
">
	<?php }?><?php }} ?>
