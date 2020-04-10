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
    
    // -------- Edit Category
    public static function getCategoryDetail($id) {
        $query = "SELECT * FROM category WHERE category.id =".$id." ORDER BY category.name";
        $db = new database();
        $arr = $db->getOne($query);
        return $arr;
    }
    
    public static function getCategoryEdit($id) {
        $test = false;
        if(isset($_POST['save'])){
            if(isset($_POST['name'])){
                $name = $_POST['name'];
                $sql = "UPDATE `category` SET `name` = '$name' WHERE `category`.`id` = ".$id;
                $db = new database();
                $item = $db->executeRun($sql);
                if ($item == true){$test = true;}
            }
        }
        return $test;
    }
    
} // Class end
?>