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
    
    //------- Edit Category
    public static function categoryEditForm($id) {
        $detail = modelAdminCategory::getCategoryDetail($id);
        include_once 'viewAdmin/categoryEditForm.php';
    }
    public static function categoryEditResult($id) {
        $test = modelAdminCategory::getCategoryEdit($id);
        include_once 'viewAdmin/categoryEditForm.php';
    }
    
    //------- Delete Category
    public static function categoryDeleteForm($id) {
        $detail = modelAdminCategory::getCategoryDetail($id);
        include_once 'viewAdmin/categoryDeleteForm.php';
    }
    public static function categoryDeleteResult($id) {
        $test = modelAdminCategory::getCategoryDelete($id);
        include_once 'viewAdmin/categoryDeleteForm.php';
    }
    
} // end Class