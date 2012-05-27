<?php

namespace application;

use application;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author vansa
 */
class View {

    public $load;

    public function __construct() {
	$this->load = new Load();
    }
/**
 * procesed to load view, and extract data. 
 * functions not visible outsite on Loader
 * @param string $file
 * @param array $data
 * @return type 
 */
    public function render($file ,array $data = NULL,$extd) {
	//$file = \str_replace("\\", DS, $file) . ".php";
	$file = SITE_PATH . DS . 'view' . DS . $file . ".".$extd;
	if (is_readable($file)) {
	 
	    if (isset($data)) {
		extract($data);
	    }
	       include_once $file;
	    return True;
	}

	throw new \Exception("Error 404 the file $file is not found ");
    }

}

?>
