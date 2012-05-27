<?php

namespace controller;

class Index extends _bace {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->setHeader("Добре Дошли");
        $this->load->view($this->conteiner."/home");
        $this->setFooter();
    }

}

?>
