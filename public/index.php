<?php
chdir(dirname(__DIR__));
include 'init_autoloader.php';
Zend\Mvc\Application::init(require 'config/application.config.php')->run();