<?php

class News {
    public static function getLast10News() {
        $query = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    
    public static function getAllNews() {
        $query = "SELECT * FROM news ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    
    public static function getNewsByCategoryID($id) {
        $query = "SELECT * FROM news WHERE category_id=".(string)$id." ORDER BY id DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    
    public static function getNewsByID($id) {
        $query = "SELECT * FROM news WHERE id=".(string)$id;
//        echo '<br>';
//        echo '$query = '.$query;
        $db = new database();
        $arr = $db->getAll($query);
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        die;
        return $arr;
    }
}
?>