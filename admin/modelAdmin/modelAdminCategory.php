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
    
    // -------- Add Category
    public static function getCategoryAdd() {
        $test = false;
        if (isset($_POST['save'])){
            if(isset($_POST['name'])) {
                $name = $_POST['name'];
                $sql = "INSERT INTO `category` (`name`) VALUES ('$name')";
                $db = new database();
                $item = $db->executeRun($sql);
                if ($item == true){$test = true;}
            }
            else {
                echo "Error. Category name doesn't defined";
            }     
        }
        return $test;
    }
    
} // Class end
?>