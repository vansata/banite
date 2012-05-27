<?php

namespace controller;

class sights extends _bace {

    public function __construct() {
        parent::__construct();
        $this->load->model('sights');
    }

    public function index() {
        $this->setHeader("Добре Дошли");
        $data['data'] = $this->get_all_data();
        $this->load->view($this->conteiner . "/sights", $data);
        $this->setFooter();
    }

    public function current($id) {
        
        $this->setHeader("Добре Дошли");
        $data['item'] = $this->sights->getCurrnet($id);
        $data['img'] = $this->sights->getimg($id);
        
        $this->load->view($this->conteiner . "/current", $data);
        $this->setFooter();
    }

    protected function get_all_data() {

        return $this->sights->getData();
    }

}

