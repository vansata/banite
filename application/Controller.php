<?php

namespace application;

use application;

abstract class Controller {

    /**
     *
     * @var type $_registry;
     * @var type $load
     */
    protected $_registry;
    protected $load;
    protected $view;

//Loading controlers,view,model,libs
    public function __construct() {
	$this->_registry = Registry::getInstance();
	$this->load = new Load();
	
    }

    /**
     *Get registry keys in registry object.
     * @param type $name
     * @param type $value 
     */
    public final function __get($name) {
	if ($return = $this->_registry->$name) {
	    return $return;
	}
	throw new \Exception("Controllers __Get is broken");
    }

}
