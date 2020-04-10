<?php
class controllerAdminCategory {
    
    //------- Category List
    public static function categoryList() {
        $arr = modelAdminCategory::getCategoryList();
        include_once 'viewAdmin/categoryList.php';
    }
    
    //------- Add Category
    public static function categoryAddForm() {
        $arr = modelAdminCategory::getCategoryList();
        include_once 'viewAdmin/categoryAddForm.php';
    }
    public static function categoryAddResult() {
        $test = modelAdminCategory::getCategoryAdd();
        include_once 'viewAdmin/categoryAddForm.php';
    }
    
    
} // end Class