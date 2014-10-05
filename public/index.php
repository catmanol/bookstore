<?php

// Define path to application directory
define('APPLICATION_PATH', realpath(__DIR__ . '/../application'));

// Define path to application libraries
define('APPLICATION_LIBRARY_PATH', realpath(__DIR__ . '/../library'));

// build the include_path
set_include_path(
    get_include_path() . PATH_SEPARATOR . APPLICATION_LIBRARY_PATH
    . PATH_SEPARATOR . APPLICATION_PATH
);

require APPLICATION_PATH . '/config/config.php';

$ajax = false;

//valideaza ce pagina sa fie aratata
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else if (isset($_POST['page'])) {
    $ajax = true;
    $page = $_POST['page'];
} else {
    $page = NULL;
}

//determina ce pagina sa fie afisata
switch ($page) {
    case 'admin':
        $page = "admin.php";
        $page_title = "Page to administrate book store";
        break;

    default:
        $page = "bookstore.php";
        $page_title = "Online book store";
        break;
}

if (!$ajax) {
    //include header
    include_once APPLICATION_PATH . '/pages/header.php';
}

require_once 'BookStore/Application/Application.php';
$application = new \BookStore\Application\Application($config);
//include modulul
$application->openPage($page);

if (!$ajax) {
    //include footer
    include_once APPLICATION_PATH . '/pages/footer.php';
}
