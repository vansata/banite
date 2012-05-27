<?php

namespace libs;

class Header {

    public $menu;
    
    public function _topmenu($items,$class) {
        $this->menu .= "<ul>";
        foreach ($items as $k) {
           if($class===$k['menu_link']){
               $select="class='selected'";
           }else{
               $select = NULL;
           }
            $this->menu .= '<li><a href="'.\application\base_url(). $k['menu_link'] . '  "' . $select . '>' . $k['menu_name']."</a>";
            if (isset($k['sub_menu'])) {
                $this->menu .= $this->_topmenu($k['sub_menu'],NULL);
            }
            $this->menu .= '</li>';
        }
        $this->menu .="</ul>";
    }

}

