#!/usr/bin/php -q
<?php
/**
 * Command-line code generation utility to automate programmer chores.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Console
 * @since         CakePHP(tm) v 2.0
 */

$ds = DIRECTORY_SEPARATOR;
$dispatcher = 'Cake' . $ds . 'Console' . $ds . 'ShellDispatcher.php';

if (function_exists('ini_set')) {
	$root = dirname(dirname(dirname(__FILE__)));

	// the following line differs from its sibling
	// /app/Console/cake.php
	ini_set('include_path', $root . PATH_SEPARATOR .  $ds . 'var' . $ds . 'www' . $ds . 'html' . $ds . 'Vendor' . $ds . 'cakephp' . $ds . 'cakephp' . $ds . 'lib' . PATH_SEPARATOR . ini_get('include_path'));
}

if (!include $dispatcher) {
	trigger_error('Could not locate CakePHP core files.', E_USER_ERROR);
}
unset($paths, $path, $dispatcher, $root, $ds);

return ShellDispatcher::run($argv);
