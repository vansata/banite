<?php

namespace application;

use application;

/**
 * Description of Load
 * Loading and instantie model, and views; 
 * TODO loading ang instantie controllers;
 * @author vansa
 */
class Load {

    private $obj;
    private $_classes = array(
        'libs' => "libs",
        'model' => "model",
    );

    /**
     * @uses for corect load model second parametars is a folder path, separator is a \
     * @param object $names as a model name
     * @param folder/namespaces $namespace 
     * @example in controllers "$this->load($model,$namespace)" where $namespace is a folder path to model seperatori is "\"
     * @return new model object
     */
    public function __call($name, $arguments) {
        if (array_key_exists($name, $this->_classes)) {
            //Define proparti in methods
            $names = $arguments[0];
            $namespace = $arguments[1];
            $args = $arguments[2];

            $this->getNameSpace(strtolower($names), strtolower($name), $namespace);
            $file = \str_replace("\\", DS, $this->obj).".php";
            if (!\is_readable($file)) {
                throw new \Exception("The model whit name $names is not found in $file ");
            } else {
                $registry = Registry::getInstance();
                return $registry->$names= new $this->obj($args);
            }
        } else {
            echo "neizwesten metod";
        }
    }

    /**
     * @uses Veiw class in application to loading and extract data.
     * @param type $view
     * @param type $data
     * @return type 
     */
    public function view($view, array $data = NULL, $extd = 'php') {
        $registry = Registry::getInstance();
        $registry->$view = new View();
        $registry->$view->render($view, $data, $extd);
    }

    /**
     * 
     * @param type $name string/name to loading class
     * @param type $baseFold string/name to base classes folder
     * @param type $namespace string/name to folder paths
     * @return type object $obj temp fullpath to call objects
     */
    private function getNameSpace($name, $baseFold, $namespace = NULL) {
        $obj = $name;
        if ($namespace != Null) {
            
            if (mb_stristr($namespace, $baseFold . "\\")) {
                $obj = $namespace . '\\' . $name;
                $this->obj = $obj;
                return true;
            } else {
                $obj = $baseFold . '\\' . $namespace . '\\' . $name;
                $this->obj = $obj;
                return true;
            }
            
        } else {
            $obj = $baseFold . "\\" . $name;
            $this->obj = $obj;
            return true;
        }
        throw new \Exception("Bad $obj in getNameSpace function");
    }

}

?>
