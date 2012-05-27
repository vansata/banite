<?php

/**
 * Base MVc 
 * @author Vanssa 
 * @license OpenSurse
 *  ######################
 */
/* Define base path Constants */
try {
defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_PATH') ? NULL : define('SITE_PATH', dirname(realpath(__FILE__)));

/* Include core file */
require_once SITE_PATH . DS . "application" . DS . "init.php";
} catch (Exception $exc) {
    echo "<pre>".print_r($exc->getMessage(), 1)."</pre>";
}

?>
