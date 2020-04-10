<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php'){
    // Main page
    $response = controllerAdmin::formLoginSite();
}
// ---- Logging in ----
elseif ($path == 'login'){
    // Login form
    $response = controllerAdmin::loginAction();
}
 elseif ($path == 'logout') {
     // Logout
     $response = controllerAdmin::logoutAction();
}
//------------- Category List
elseif ($path == 'categoryAdmin') {
    $response = controllerAdminCategory::categoryList();
}
//------------- Category Add
elseif ($path == 'categoryAdd'){
    $response = controllerAdminCategory::categoryAddForm();
}
elseif ($path == 'categoryAddResult'){
    $response = controllerAdminCategory::categoryAddResult();
}

//------------- News List
elseif ($path == 'newsAdmin') {
    $response = controllerAdminNews::NewsList();
}
//------------- Add News
elseif ($path == 'newsAdd'){
    $response = controllerAdminNews::newsAddForm();
}
elseif ($path == 'newsAddResult'){
    $response = controllerAdminNews::newsAddResult();
}

//------------- Edit News
elseif ($path == 'newsEdit' && isset($_GET['id'])){
    $response = controllerAdminNews::newsEditForm($_GET['id']);
}
 elseif ($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminNews::newsEditResult($_GET['id']);
}

//------------- Delete News
elseif ($path == 'newsDel' && isset($_GET['id'])){
    $response = controllerAdminNews::newsDeleteForm($_GET['id']);
}
 elseif ($path == 'newsDelResult' && isset($_GET['id'])) {
    $response = controllerAdminNews::newsDeleteResult($_GET['id']);
}

else {
    // Page not found
    $response = controllerAdmin::error404();
}