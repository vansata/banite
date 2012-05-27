<?php

namespace model;

use application\Model;

class Sights extends Model {

    public function getData() {
        $sql = "SELECT i.items_id,i.items_name, LEFT (i.items_desc, 100) AS small, i.items_desc,  ";
        $sql .= " img.img_id, img.img_path, img.items_id, img.img_name,";
        $sql .= "menu.menu_id,menu.menu_name,menu.menu_link ";
        $sql .= "FROM items AS i,img,menu ";
        $sql .= "WHERE img.items_id=i.items_id ";
        $sql .= "AND i.menu_id=menu.menu_id ";
        $sql .= "GROUP BY i.items_id ASC";

        $sth = $this->db->query($sql);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
        
    }

    public function getCurrnet($id) {
        $sql = "SELECT * FROM items WHERE items_id = :id ";  
        $sth = $this->db->prepare($sql);
        $sth->bindParam(':id', $id);
        $sth->execute();
        $data = $sth->fetch(\PDO::FETCH_ASSOC);
        return $data;
    }
public function getImg($id){
    $sql = "SELECT * FROM img WHERE items_id=:id";
        $sth = $this->db->prepare($sql);
        $sth->bindParam(':id', $id);
        $sth->execute();
     return $sth->fetchAll(\PDO::FETCH_ASSOC);
    
}
}
