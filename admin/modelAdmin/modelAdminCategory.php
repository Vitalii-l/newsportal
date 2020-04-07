<?php
class modelAdminCategory {
    
    // -------- List
    public static function getCategoryList() {
        $sql = "SELECT * FROM category ORDER BY category.name";
        $db = new database();
        // $rows - data array
        $rows = $db->getAll($sql);
        return $rows;
    }
} // Class end
?>