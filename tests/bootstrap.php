<?php declare(strict_types = 1);

use Contributte\Tester\Environment;

if (@!include __DIR__ . '/../vendor/autoload.php') {
	echo 'Install Nette Tester using `composer update --dev`';
	exit(1);
}

// Configure environment
Environment::setupTester();
Environment::setupTimezone(Environment::DEFAULT_TIMEZONE);
Environment::setupFolders(__DIR__);
