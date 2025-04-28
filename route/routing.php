<?php
// Вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];  // Fixed $_SERVER['REQUEST_URI']
$num = substr_count($host, '/');  // Fixed variable name and substr_count usage
$path = explode('/', $host)[$num];  // Fixed variable and correct array index syntax

if ($path == '' || $path == 'index' || $path == 'index.php') {
    // Handle the home page or index
    $response = Controller::Startseite();
} elseif ($path == 'all') {
    // Handle all news
    $response = Controller::AllNews();
} elseif ($path == 'category' && isset($_GET['id'])) {
    // Handle news by category ID
    $response = Controller::NewsByCatID($_GET['id']);
} elseif ($path == 'news' && isset($_GET['id'])) {
    // Handle news by ID
    $response = Controller::NewsByID($_GET['id']);
} else {
    // Handle 404 error if no match
    $response = Controller::error404();
}

// Output the response (assumes $response is defined in the Controller methods)
echo $response;
?>
