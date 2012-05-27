<?php
namespace libs;
class Tree {

    public $page_id, $parent_id, $title;

    public function getTree($items, $cat_id, $parent_id, $childFields) {
        return $this->convertToTree($items, $cat_id, $parent_id, $childFields);
    }

    private function convertToTree(array $item, $cat_name = 'id', $parent_id = 'parentId', $childFilds = 'childNodes') {
        
        $indexed = array();
        // first pass - get the array indexed by the primary id
        foreach ($item as $row) {
            $indexed[$row[$cat_name]] = $row;
//            $indexed[$row[$cat_name]][$childFilds] = "";
        }

        //second pass
        $root = null;
        foreach ($indexed as $id => $row) {
            $indexed[$row[$parent_id]][$childFilds][$id] = & $indexed[$id];
            if ($row[$parent_id] === null) {
                $root = $id;
                $roots[] = $id;
            }
        }

        
        
//Had to be modified, beacuse it returned only the last indexed root id
        foreach ($roots as $k) {
            $return[$k] = $indexed[$k];
            
            
        }
        
       
        return $return;
    }

//hierarchy array
}

