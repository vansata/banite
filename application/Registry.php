<?php

namespace application;

/**
 * Description of Registry
 * 
 * @author vansa
 */
class Registry {

    private static $_instantie;
    private $_args;

    private function __construct() {
	
    }
/**
 *
 * @return type 
 */
    public static function getInstance() {
	if (!self::$_instantie instanceof self) {
	    self::$_instantie = new Registry();
	}
	return self::$_instantie;
    }
/**
 *
 * @param type $name
 * @return type 
 */
    public final function __get($name) {
        
	if (isset($this->_args[$name])) {
	    return $this->_args[$name];
	}
	throw new \Exception("The method __get/__set is broken in registry <hr/> ");
    }
/**
 * @param type $name
 * @param type $value 
 */
    public final function __set($name, $value) {
	$this->_args[$name] = $value;
    }

}
?> 
 