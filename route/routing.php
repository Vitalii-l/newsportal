<?php
// Вычислить маршрут из адресной строки

$host = explode ('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode ('/', $host)[$num];

echo '$host = '.$host.'<br>';
echo '$path = '.$path.'<br>';

if ($path == '' OR $path == 'index' OR $path == 'index.php'){
    echo '$path = "",  index, index.php';
    $response = Controller::StartSite();
}
elseif ($path == 'all'){
    echo '$path = all';
     $response = Controller::AllNews();
}
elseif ($path == 'category' and isset($_GET['id'])) {
    echo '$path = category';
     $response = Controller::NewsByCatID($_GET['id']);
}
elseif ($path == 'news' and isset($_GET['id'])) {
    echo '$path = news';
     $response = Controller::NewsByID($_GET['id']);
}
else {
    echo '$path = error';
     $response = Controller::error404();
}


?>