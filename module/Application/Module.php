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
}