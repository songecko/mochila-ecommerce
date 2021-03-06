<?php

if (!defined('_PS_VERSION_'))
	exit;

class BuenSalvaje extends Module
{
	public function __construct()
	{
		$this->name = 'buensalvaje';
		$this->tab = 'front_office_features';
		$this->version = '1.0.0';
		$this->author = 'Odiseo Team';
		$this->need_instance = 0;
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
		$this->bootstrap = true;
	
		parent::__construct();
	
		$this->displayName = $this->l('Buen Salvaje Module');
		$this->description = $this->l('Módulo del sitio Buen Salvaje');
	
		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
	}
	
	public function install()
	{
	 	return (parent::install() && $this->registerHook('header'));
	}

	public function uninstall()
	{
		return (parent::uninstall() && $this->unregisterHook('header'));
	}
	
	public function hookHeader($params)
	{
		$this->context->controller->addCSS($this->_path.'css/buensalvaje.css', 'all');
	}  
}