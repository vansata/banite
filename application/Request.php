<?php

namespace application;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Request
 * Get url and processing
 * @author vansa
 */
class Request {

    /**
     *
     * @var type 
     */
            private $contorller, $method, $args;

    public function __construct() {
        $pats = explode( "/" ,$_SERVER['REQUEST_URI']);
        $pats = implode('/', $pats);
       $pats = explode("/", $pats);
       
      
       if($pats[1]=='banite'){
            $pats[1]="";
       }
        $pats=  array_filter($pats);
 
        
        
        $this->contorller = ($c = \array_shift($pats)) ? $c : "index";
        $this->method = ($c = \array_shift($pats)) ? $c : "index";
        $this->args = (isset($pats)) ? $pats : array();
    }

    /**
     *
     * @return type 
     */
    public function getContorller() {
        if (strstr($this->contorller, "_")) {
           
            throw new \Exception("Не може да достъпите метода $this->contorller");
        } else {
            return $this->contorller;
        }
    }

    /**
     *
     * @return type 
     */
    public function getMethod() {
        if (strstr($this->method, "_")) {
            throw new \Exception("Не може да достъпите метода $this->method");
        } else {
            return $this->method;
        }
    }

    /**
     *
     * @return type 
     */
    public function getArgs() {
        
        return $this->args;
    }

}

?>
