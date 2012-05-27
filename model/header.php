<?php

namespace model;

use application\Model;

class Header extends Model {

    public function topmenu() {
        $sql ="SELECT * FROM menu GROUP BY menu_id, parrent_id ASC ";
       
       $sth = $this->db->query($sql);
       $sth->execute();
     return  $sth->fetchAll(\PDO::FETCH_ASSOC);
     
    
       
     
    }
   
}
