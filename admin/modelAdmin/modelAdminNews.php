<?php
class modelAdminNews {
    
    // -------- News List
    public static function getNewsList() {
        $query = "SELECT news.*, category.name, users.login FROM news, category, users WHERE news.category_id=category.id AND news.user_id=users.id ORDER BY `news`.`id` DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    
    // -------- Add News
    public static function getNewsAdd() {
        $test = false;
        if (isset($_POST['save'])){
            if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory'])) {
                $title = $_POST['title'];
                $text = $_POST['text'];
                $idCategory = $_POST['idCategory'];
                
                // ------- image type blob
                if(isset($_FILES['picture'])){
                    $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
                    $sql = "INSERT INTO `news` (`id`,`title`,`text`,`picture`,`category_id`,`user_id`) VALUES (NULL, '$title', '$text', '$image', '$idCategory', '9')";
                }
                // -----------------------
                else {$sql = "INSERT INTO `news` (`id`,`title`,`text`,`category_id`,`user_id`) VALUES (NULL, '$title', '$text', '$idCategory', '9')";
                    
                }
                $db = new database();
                $item = $db->executeRun($sql);
                if ($item == true){$test = true;}
                
            }
        }
    return $test;
    }
} // end Class
