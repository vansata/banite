<?php

namespace controller;

use application\Controller;

/**
 * Description of bace
 *
 * @author vansa
 */
abstract class _bace extends Controller {

    protected $menu, $head, $conteiner;

    public function __construct() {
        parent::__construct();

        $this->head = "tmpItems/header";
        $this->conteiner = "tmpItems/conteiner";
    }

    abstract function index();

    protected function setHeader($title=false) {
        //Set the menu
        $this->_menu();
        $data['menu'] = $this->menu;
        //Set the heading name 
        $data['title']=$title;
        
        
        $this->load->view($this->head . "/header", $data);
    }
    protected function setFooter(){
        $this->load->view('tmpItems/footer');
    }

    private function _menu() {
        $this->load->libs('tree');
        $data = $this->tree->getTree($this->get_menu_data(), 'menu_id', 'parrent_id', 'sub_menu');
        $this->load->libs('header');
        $class = $_SERVER['REQUEST_URI'];

        $this->header->_topmenu($data, $class);
        $this->menu = $this->header->menu;
    }

    private function get_menu_data() {
        $this->load->model('header');
        return $this->header->topmenu();
    }

}

