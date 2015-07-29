<?php
namespace Application;

class Module
{
    public function onBootstrap (MvcEvent $e)
	{
		$m = $e->getApplication()->getEventManager();
		$l = new ModuleRouteListener();
		$l->attach($m);
	}
	
	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}

	protected function _initDatabases()
	{
		$this->bootstrap('db');
		$db = $this->getResource('db');
		Zend_Registry::set('db', $db);
	}
	protected function _initLayout()
	{
		Zend_Layout::startMvc();
	}
}