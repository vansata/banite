<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Router
 * get controllers from url, 
 * @author vansa
 */
class Router {

    /**
     *
     * @param application\Request $req
     * @return controller object
     */
    public static function route(application\Request $req) {
        $controller = $req->getContorller();
        $metod = $req->getMethod();
        $argc = $req->getArgs();
        $controller = "controller\\" . ucfirst($controller);
        $controllerPath = SITE_PATH . DS . str_replace("\\", DS, $controller) . ".php";
        if (file_exists($controllerPath)) {
            $controller = new $controller;
            //Chek metod is not define load defult method index
            $metod = (is_callable(array($controller, $metod))) ? $metod : "index";
            //Chek methods arguments 
            if (!empty($argc)) {
                call_user_func_array(array($controller, $metod), $argc);
            } else {
                call_user_func(array($controller, $metod));
            }
            return;
        }
        throw new Exception("Error 404 the controllers $controller is not Found");
    }

}

?>
