<?php
/**
 * configuration file för Anax webroot.
 *
 */


/**
 *  Paths
 *
 */
define('ANAX_INSTALL_PATH', realpath(__DIR__ . '/../') . '/');
define('ANAX_APP_PATH',     ANAX_INSTALL_PATH . '/app/');


/**
 * Date timezone.
 *
 */
date_default_timezone_set('CET');

/**
 * Include autoloader.
 *
 */
include(ANAX_APP_PATH . '/../autoloader.php');

