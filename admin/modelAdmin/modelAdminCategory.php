<?php
class modelAdminCategory {
    
    // -------- List
    public static function getCategoryList() {
        $sql = "SELECT * FROM catefory ORDER BY category.name";
        $db = new database();
        // $row - data array
        $rows = $db->getAll($sql);
        return $rows;
    }
} // Class end
