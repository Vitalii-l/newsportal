<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php'){
    // Main page
    $response = controllerAdmin::formLoginSite();
}
// ---- Login, Logout ----
elseif ($path == 'login'){
    // Login form
    $response = controllerAdmin::loginAction();
}
 elseif ($path == 'logout') {
     // Logout
     $response = controllerAdmin::logoutAction();
}
// ---- User profile -------
elseif ($path == 'userProfile'){
    $response = controllerAdmin::userProfile();
}

// ---- Password change ----
elseif ($path == 'passwordChange'){
    // Password change form
    $response = controllerAdmin::formPasswordChange();
}
elseif ($path == 'passwordChangeAnswer'){
    // Password change answer
    $response = controllerAdmin::userPasswordChange();
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

//------------- Category Edit
elseif ($path == 'categoryEdit' && isset($_GET['id'])){
    $response = controllerAdminCategory::categoryEditForm($_GET['id']);
}
elseif ($path == 'categoryEditResult' && isset($_GET['id'])) {
    $response = controllerAdminCategory::categoryEditResult($_GET['id']);
}

//------------- Category Delete
elseif ($path == 'categoryDel' && isset($_GET['id'])){
    $response = controllerAdminCategory::categoryDeleteForm($_GET['id']);
}
 elseif ($path == 'categoryDelResult' && isset($_GET['id'])) {
    $response = controllerAdminCategory::categoryDeleteResult($_GET['id']);
}

//------------- News List
elseif ($path == 'newsAdmin') {
    $response = controllerAdminNews::NewsList();
}
//------------- News Add
elseif ($path == 'newsAdd'){
    $response = controllerAdminNews::newsAddForm();
}
elseif ($path == 'newsAddResult'){
    $response = controllerAdminNews::newsAddResult();
}

//------------- News Edit
elseif ($path == 'newsEdit' && isset($_GET['id'])){
    $response = controllerAdminNews::newsEditForm($_GET['id']);
}
elseif ($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminNews::newsEditResult($_GET['id']);
}

//------------- News Delete
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