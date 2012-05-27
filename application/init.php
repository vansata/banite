<?php

namespace application;

include 'config.php';

/**
 * Base includes. 
 * Base instantie basic class; 
 * autoloaderFunction; 
 * 
 */
function base_url() {
   global $config;
    if (!empty($config['base_url'])) {
        return $config['base_url'];
    } else {
        return $_SERVER['HTTP_HOST'];
    }
}


function baseAutoLoad($classname) {
    $classPath = str_replace("\\", DS, $classname) . ".php";
    if (file_exists($classPath)) {
        require_once(($classPath));
    } else {
        throw new \Exception("The file $classPath is not found");
    }
}
defined('CSS_PATH') ? NULL :define('CSS_PATH',base_url()."/view/style/css") ;
defined('STYLE') ? NULL :define('STYLE',base_url()."/view/style/") ;
defined('IMG_PATH') ? NULL :define('IMG_PATH',base_url()."/view/style/images") ;
defined('JS_PATH') ? NULL :define('JS_PATH',base_url()."/view/style/js") ;

\spl_autoload_register(__NAMESPACE__ . '\baseAutoLoad');
//Load static Router aoutside in baseAutoLoad function
require_once SITE_PATH . DS . "application" . DS . "Router.php";
$rut = \Router::route(new Request());