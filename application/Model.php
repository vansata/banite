<?php

namespace application;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author vansa
 */
abstract class Model {

    private $_registry;
    protected $db;
/**
 *$db  new PDO 
 */
    public function __construct() {
        $this->_registry = \application\Registry::getInstance();
          $this->db = new \PDO('mysql:host=localhost;dbname=banite', 'banite', '123', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
          $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    }

}

?>
