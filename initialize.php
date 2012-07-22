<?php
if (!defined('PHPUNIT_ROOT')) {
	define('PHPUNIT_ROOT', dirname(__FILE__));
}
if (!defined('PHPUNIT_LIBS')) {
	define('PHPUNIT_LIBS', PHPUNIT_ROOT.'/vendor/phpunit');
}

set_include_path(implode(PATH_SEPARATOR, array(
PHPUNIT_ROOT,
PHPUNIT_LIBS . '/dbunit/',
PHPUNIT_LIBS . '/php-file-iterator/',
PHPUNIT_LIBS . '/php-text-template/',
PHPUNIT_LIBS . '/php-code-coverage/',
PHPUNIT_LIBS . '/php-token-stream/',
PHPUNIT_LIBS . '/php-timer/',
PHPUNIT_LIBS . '/phpunit-mock-objects/',
// PHPUNIT_ROOT . '/phpunit-selenium/',
// PHPUNIT_ROOT . '/phpunit-story/',
// PHPUNIT_ROOT . '/php-invoker/',
get_include_path()
)));
